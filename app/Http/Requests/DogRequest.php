<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DogRequest extends FormRequest
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
            "nombre" => "required|string|nullable",
            "raza" => "required|string",
            "isVacunado" => "boolean",
            "fecha_nacimiento" => "required|date",
            "edad" => "required|integer|between:0,16",
            "price" => "required|min:0|max:300",
            "tamanyo" => "required|in:little,big",
            "descripcion" => "required",
        ];
    }
}
