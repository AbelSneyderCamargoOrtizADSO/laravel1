<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|min:5|max:255',
            'slug' => 'required|unique:post',
            'content' => 'required',
        ];
    }

    // CAMBIAR MENSAJES
    /*
    public function messages()
    {
        return [
            'title.required' => 'EL TITULO ES REQUERIDO BRO',

            // COMBINARLO CON ATRIBUTO EDITADO
            'title.required' => 'EL :Attribute ES REQUERIDO BRO',
        ];
    }
    */

    // CAMBIAR NOMBRE DEL ATRIBUTO

    public function attributes()
    {
        return [
            'title' => 'name',
        ];
    }
}
