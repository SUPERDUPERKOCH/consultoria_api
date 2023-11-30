<?php

namespace App\Http\Requests;

use LaravelAux\BaseRequest;

class AlimentoRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required',
            'porcao' => 'required',
            'carboidratos' => 'required',
            'proteinas' => 'required',
            'gorduras' => 'required',
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
            'nome' => 'Alimento',
            'porcao' => 'Porção',
            'carboidratos' => 'Qntd. de carboidrato',
            'proteinas' => 'Qntd. de proteína',
            'gorduras' => 'Qntd. de gordura',
        ];
    }
}