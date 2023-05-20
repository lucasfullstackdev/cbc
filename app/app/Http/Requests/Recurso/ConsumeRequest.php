<?php

namespace App\Http\Requests\Recurso;

use App\Http\Requests\Request;

class ConsumeRequest extends Request
{
    public function rules()
    {
        return [
            'clube_id' => 'required|exists:clubes,id',
            'recurso_id' => 'required|exists:recursos,id',
            'valor_consumo' => 'required|gt:0'
        ];
    }
}
