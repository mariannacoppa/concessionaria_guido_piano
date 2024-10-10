<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBrandRequest extends FormRequest
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
            'company' => 'required|string|max:100|unique:brands,company,' . $this->route('brand'),
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:100',
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
            'company.required' => 'Il campo "azienda" è obbligatorio.',
            'company.string' => 'Il campo "azienda" deve essere una stringa.',
            'company.max' => 'Il campo "azienda" non può superare i 100 caratteri.',
            'company.unique' => 'Questa azienda è già presente nel database, inserire un nome univoco.',

            'phone.required' => 'Il campo "telefono" è obbligatorio.',
            'phone.string' => 'Il campo "telefono" deve essere una stringa.',
            'phone.max' => 'Il campo "telefono" non può superare i 15 caratteri.',

            'address.required' => 'Il campo "indirizzo" è obbligatorio.',
            'address.string' => 'Il campo "indirizzo" deve essere una stringa.',
            'address.max' => 'Il campo "indirizzo" non può superare i 100 caratteri.',
        ];
    }
}
