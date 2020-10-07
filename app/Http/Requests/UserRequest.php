<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'nombre'            => "required|string|min:3|regex:/^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+[\s])+([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])+[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])?$/i",
            'apellido'          => "required|string|min:3|regex:/^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+[\s])+([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])+[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])?$/i",
            'carnet_id'         => "required|min:7|max:9|unique:personas,carnet_id,".$this->route('id_persona'),
            'fecha_nacimiento'  => "required|date_format:Y-m-d".Carbon::now()->diff('fecha_nacimiento')>=18,
            'email_personal'    => "required|unique:personas,email_personal,".$this->route('id_persona'),
            'celular'           => "required|alpha_num",
            'direccion'         => "required|string|min:5",
            'email'             => "required|unique:users,email,".$this->route('id_admin'),
            'password'          => "required|min:6|confirmed"
        ];
    }
}
