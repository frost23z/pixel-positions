<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required'],
            'url' => ['required'],
            'featured' => ['boolean'],
            'employer_id' => ['required', 'exists:employers'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
