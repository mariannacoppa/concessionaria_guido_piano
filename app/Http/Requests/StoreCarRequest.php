<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'brand' => 'required|string|max:30',
            'model' => 'required|string|max:30',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'color' => 'required|string|max:15',
            'price' => 'required|numeric|min:0',
            'engine' => 'required|string|max:30',
            'horsepower' => 'required|integer|min:0|max:9999',
            'doors' => 'required|integer|min:2|max:5',
            'km' => 'required|integer|min:0',
            'used' => 'required|boolean',
        ];
    }

    /**
     * Get custom error messages for validation.
     *
     * @return array<string, string>
     */
    public function messages()
    {
        return [
            'brand.required' => 'Il campo "marca" è obbligatorio.',
            'brand.string' => 'Il campo "marca" deve essere una stringa.',
            'brand.max' => 'Il campo "marca" non può superare i 30 caratteri.',
            
            'model.required' => 'Il campo "modello" è obbligatorio.',
            'model.string' => 'Il campo "modello" deve essere una stringa.',
            'model.max' => 'Il campo "modello" non può superare i 30 caratteri.',
            
            'year.required' => 'Il campo "anno" è obbligatorio.',
            'year.integer' => 'Il campo "anno" deve essere un numero intero.',
            'year.min' => 'Il campo "anno" non può essere inferiore a 1900.',
            'year.max' => 'Il campo "anno" non può essere superiore all\'anno corrente.',

            'color.required' => 'Il campo "colore" è obbligatorio.',
            'color.string' => 'Il campo "colore" deve essere una stringa.',
            'color.max' => 'Il campo "colore" non può superare i 15 caratteri.',

            'price.required' => 'Il campo "prezzo" è obbligatorio.',
            'price.numeric' => 'Il campo "prezzo" deve essere un numero.',
            'price.min' => 'Il campo "prezzo" deve essere positivo.',

            'engine.required' => 'Il campo "motore" è obbligatorio.',
            'engine.string' => 'Il campo "motore" deve essere una stringa.',
            'engine.max' => 'Il campo "motore" non può superare i 30 caratteri.',

            'horsepower.required' => 'Il campo "cavalli" è obbligatorio.',
            'horsepower.integer' => 'Il campo "cavalli" deve essere un numero intero.',
            'horsepower.min' => 'Il campo "cavalli" deve essere almeno 0.',
            'horsepower.max' => 'Il campo "cavalli" non può superare 9999.',

            'doors.required' => 'Il campo "porte" è obbligatorio.',
            'doors.integer' => 'Il campo "porte" deve essere un numero intero.',
            'doors.min' => 'Il numero minimo di "porte" è 2.',
            'doors.max' => 'Il numero massimo di "porte" è 5.',

            'km.required' => 'Il campo "chilometraggio" è obbligatorio.',
            'km.integer' => 'Il campo "chilometraggio" deve essere un numero intero.',
            'km.min' => 'Il campo "chilometraggio" deve essere almeno 0.',

            'used.required' => 'Il campo "usata" è obbligatorio.',
            'used.boolean' => 'Il campo "usata" deve essere vero o falso.',
        ];
    }
}
