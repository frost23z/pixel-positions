<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;

class RegisteredUserController extends Controller
{
    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254', 'unique:users,email'],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        $employerAttributes = $request->validate([
            'employer' => ['required'],
            'logo' => ['required', File::image()->types(['png', 'jpg', 'jpeg', 'gif', 'webp'])->max(2 * 1024)]
        ]);

        $logoPath = $request->logo->store('logos', 'public');

        $user = User::create($userAttributes);

        $user->employer()->create([
            'name' => $employerAttributes['employer'],
            'logo' => $logoPath
        ]);

        Auth::login($user);

        return redirect()->route('index');
    }

    public function create()
    {
        return view('auth.register');
    }
}
