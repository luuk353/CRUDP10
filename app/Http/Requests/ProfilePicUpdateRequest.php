<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfilePicUpdateRequest extends FormRequest
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
            'profilepic' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ];
    }

    public function messages(): array
    {
        return [
            'profilepic.required' => 'Je moet een foto selecteren.',
            'profilepic.image' => 'Het moet wel een foto zijn!.',
            'profilepic.mimes' => 'Je foto moet een van deze extensies hebben, zoals jpeg, png, jpg,gif,svg.',
            'profilepic.max' => 'Je foto mag niet groter zijn dan 2MB.',
        ];
    }
}
