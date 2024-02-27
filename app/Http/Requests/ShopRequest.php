<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopRequest extends FormRequest
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
            'itemName' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'amount' => ['required', 'integer'],
            'picture' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5120'],
        ];
    }

    public function messages(): array
    {
        return [
            'itemName.required' => 'Je moet een naam voor het product invullen!',
            'price.required' => 'Je moet een prijs invullen!',
            'price.numeric' => 'Prijs moet een getal zijn!',
            'amount.required' => 'Je moet een aantal invullen!',
            'amount.integer' => 'Aantal moet een getal zijn!',
            'picture.required' => 'Je moet een afbeelding toevoegen!',
            'picture.image' => 'Bestand moet een afbeelding zijn!',
            'picture.mimes' => 'Bestand moet een jpeg, png, jpg, gif of svg zijn!',
            'picture.max' => 'Bestand mag maximaal 5MB groot zijn!',
        ];
    }
}
