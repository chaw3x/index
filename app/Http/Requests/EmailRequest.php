<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'  => 'required|max:255',
            'mensaje' => 'required|max:255',
            'email'   => 'required|email:rfc,dns,strict',
            'telefono'=> 'required|numeric',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nombre.required'   => 'El nombre es requerido',
            'nombre.max'        => 'Nombre excede los caracteres máximos',
            'mensaje.required'  => 'El Mensaje es requerido',
            'mensaje.max'       => 'Mensaje excede los caracteres máximos',
            'email.required'    => 'El correo es requerido',
            'email.email'       => 'El correo no es correcto',
            'telefono.required' => 'El teléfono es requerido',
            'telefono.numeric'  => 'El teléfono no es un número',
        ];
    }
}