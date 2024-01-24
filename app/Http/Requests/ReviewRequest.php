<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
            'titel_review' => ['required', 'min:6', 'max:100'],
            'beschrijving_review' => ['required', 'max:150'],
            'rating' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'titel_review.required' => 'Een titel voor je review moet je schrijven!',
            'titel_review.max' => 'Titel van je review mag maximaal 255 karakters lang zijn!',
            'titel_review.min' => 'Titel van je review moet minimaal 6 karakters lang zijn!',
            'beschrijving_review.required' => 'Je moet een beschrijving schrijven!',
            'beschrijving_review.max' => 'Beschrijving mag maximaal 150 karakters lang zijn!',
            'rating.required' => 'Je moet een cijfer geven!'
        ];
    }
}
