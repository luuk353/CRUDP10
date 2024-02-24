<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AchievementRequest extends FormRequest
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
            'name' => ['required', 'unique:achievements'],
            'description' => ['required', 'unique:achievements'],
        ];
    }

    public function messages(): array
    {
        return [
            [
                'name.required' => 'Name is required',
                'name.unique' => 'Name is already taken',
                'description.required' => 'Description is required',
                'description.unique' => 'Description is already taken',
            ]
        ];
    }
}
