<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'event_naam' => ['required','min:6','max:100'],
            'event_beschrijving' => ['required','max:150'],
            'event_locatie' => ['required'],
            'begin_datum' => ['required'],
            'eind_datum' => ['required'],
            'begin_tijd' => ['required'],
            'eind_tijd' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'event_naam.required' => 'Een titel voor je event moet je schrijven!',
            'event_naam.max' => 'Titel van je event mag maximaal 100 karakters lang zijn!',
            'event_naam.min' => 'Titel van je event moet minimaal 6 karakters lang zijn!',
            'event_beschrijving.required' => 'Je moet een beschrijving schrijven!',
            'event_beschrijving.max' => 'Beschrijving mag maximaal 150 karakters lang zijn!',
            'event_locatie.required' => 'Je moet een locatie schrijven!',
            'begin_datum.required' => 'Je moet een begin datum schrijven!',
            'eind_datum.required' => 'Je moet een eind datum schrijven!',
            'begin_tijd.required' => 'Je moet een begin tijd schrijven!',
            'eind_tijd.required' => 'Je moet een eind tijd schrijven!',
            'begin_datum.date' => 'De begin datum is ongeldig!',
            'eind_datum.date' => 'De eind datum is ongeldig!',
            'begin_tijd.date' => 'De begin tijd is ongeldig!',
            'eind_tijd.date' => 'De eind tijd is ongeldig!',
            'begin_tijd.after_or_equal' => 'De begin tijd moet groter zijn dan de eind tijd!',
            'eind_tijd.after_or_equal' => 'De eind tijd moet groter zijn dan de begin tijd!',
            'begin_tijd.before_or_equal' => 'De begin tijd moet kleiner zijn dan de eind tijd!',
            'eind_tijd.before_or_equal' => 'De eind tijd moet kleiner zijn dan de begin tijd!',
        ];
    }
}
