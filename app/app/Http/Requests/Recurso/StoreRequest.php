<?php

namespace App\Http\Requests\Recurso;

use App\Http\Requests\Request;

class StoreRequest extends Request
{
    public function rules()
    {
        return [
            'recurso' => 'required|min:5|max:255|unique:recursos,recurso',
            'saldo_disponivel' => 'required|gt:0'
        ];
    }
}
