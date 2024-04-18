<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'title' => ['required', 'unique:news_posts', 'max:75', 'min:4'],
            'beschrijving' => ['required', 'unique:news_posts', 'max:150', 'min:4'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Titel is verplicht!',
            'title.unique' => 'Titel moet uniek zijn!',
            'title.max' => 'Titel mag maximaal 75 karakters bevatten!',
            'title.min' => 'Titel mag minimaal 4 karakters bevatten!',
            'beschrijving.required' => 'Beschrijving is verplicht!',
            'beschrijving.unique' => 'Beschrijving moet uniek zijn!',
            'beschrijving.max' => 'Beschrijving max maximaal 75 karakters bevatten!',
            'beschrijving.min' => 'Beschrijving max minimaal 4 karakters bevatten!',
        ];
    }
}