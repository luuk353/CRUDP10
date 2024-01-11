<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','min:6','max:100'],
            'email' => ['required','max:150'],
            'password' => ['required','min:8','max:100'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Je moet een naam schrijven!',
            'name.min' => 'Naam voor de admin moet minimaal 6 karakters lang zijn!',
            'name.max' => 'Naam voor de admin mag maximaal 100 karakters lang zijn!',
            'email.required' => 'Je moet een email schrijven!',
            'email.max' => 'Email voor de admin mag maximaal 150 karakters lang zijn!',
            'password.required' => 'Je moet een wachtwoord schrijven!',
            'password.min' => 'Wachtwoord voor de admin moet minimaal 8 karakters lang zijn!',
            'password.max' => 'Wachtwoord voor de admin mag maximaal 100 karakters lang zijn!',
        ];
    }
}
