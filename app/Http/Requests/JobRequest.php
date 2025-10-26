<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class JobRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required', Rule::in(['Full-time', 'Part-time', 'Contract', 'Temporary', 'Internship'])],
            'url' => ['required', 'active_url'],
            'featured' => ['nullable'],
            'tags' => ['nullable', 'string']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
