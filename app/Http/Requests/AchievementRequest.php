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
            'name' => ['required', 'unique:achievements', 'max:50'],
            'description' => ['required', 'unique:achievements', 'max:100'],
        ];
    }

    public function messages(): array
    {
        return [
            [
                'name.required' => 'Naam is verplicht',
                'name.unique' => 'Naam bestaat al',
                'name.max' => 'Naam mag maximaal 50 karakters lang zijn',
                'description.required' => 'Beschrijving is verplicht',
                'description.unique' => 'Beschrijving bestaat al',
                'description.max' => 'Beschrijving mag maximaal 100 karakters lang zijn'
            ]
        ];
    }
}
