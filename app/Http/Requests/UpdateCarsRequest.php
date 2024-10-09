<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Modifica questo valore in true per consentire la richiesta
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
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1886|max:' . date('Y'),
            'color' => 'required|string|max:50',
            'price' => 'required|numeric|min:0',
            'engine' => 'required|string|max:50',
            'horsepower' => 'required|integer|min:0',
            'doors' => 'required|integer|min:1',
            'km' => 'required|integer|min:0',
            'used' => 'required|boolean',
        ];
    }
}
