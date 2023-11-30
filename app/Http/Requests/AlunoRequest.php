<?php

namespace App\Http\Requests;

use LaravelAux\BaseRequest;

class AlunoRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nome" => 'required',
            "email" => 'required',
            "sexo" => 'required',
            "idade" => 'required',
            "altura" => 'required',
            "peso" => 'required',
            "tmb" => 'required',
        ];
    }

    /**
     * Validation messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => ':attribute é obrigatório',
        ];
    }

    /**
     * Attributes Name
     *
     * @return array
     */
    public function attributes()
    {
        return [
            "nome" => 'Nome',
            "email" => 'E-mail',
            "sexo" => 'Sexo',
            "idade" => 'Idade',
            "altura" => 'Altura',
            "peso" => 'Peso',
            "tmb" => 'Taxa de Metabolismo Basal',
        ];
    }
}