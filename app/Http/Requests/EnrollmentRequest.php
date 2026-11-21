<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnrollmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'fullname' => 'required|min:5',
            'student_id' => 'required|regex:/^[0-9]{8}$/',
            'track' => 'required|in:web2,network',
            'email' => 'required|email',
            'units' => 'required|integer|between:3,21',
            'terms' => 'accepted',
        ];
    }

    public function messages(): array
    {
        return [
            'fullname.required' => 'Please enter your full name.',
            'fullname.min' => 'Full name must be at least 5 characters.',
            'student_id.required' => 'Student ID is required.',
            'student_id.regex' => 'Student ID must contain exactly 8 digits.',
            'track.required' => 'Please select your track.',
            'track.in' => 'Please select a valid track.',
            'email.required' => 'Email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'units.required' => 'Please enter the number of units.',
            'units.integer' => 'Units must be a whole number.',
            'units.between' => 'Units must be between 3 and 21.',
            'terms.accepted' => 'You must accept the terms and conditions.',
        ];
    }
}
