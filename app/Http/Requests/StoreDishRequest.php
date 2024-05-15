<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDishRequest extends FormRequest
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
            'name' => 'required|max:255',
            'description' => 'nullable|max:2000',
            'price' => 'required',
            // 'viewable' => 'boolean|required',
            'image' => 'nullable|max:255',

            'restaurant_id' => 'nullable|exists:restaurant,id',
        ];
    }
    public function messages(): array
    {
        return [
            'required' => 'Il campo: :attribute deve essere inserito per proseguire.',
            'max' => 'Il campo: :attribute deve contenere massimo :max caratteri.',
        ];
    }
    public function attributes(): array
    {
        return [
            'name' => 'Nome',
            'description' => 'Descrizione',
            'price' => 'Prezzo',
            'viewable' => 'Disponibilità',
            'image' => 'Immagine',
        ];
    }
}
