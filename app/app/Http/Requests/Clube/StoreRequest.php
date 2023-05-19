<?php

namespace App\Http\Requests\Clube;

use App\Http\Requests\Request;

class StoreRequest extends Request
{
    public function rules()
    {
        return [
            'clube' => 'required|min:5|max:255',
            'saldo_disponivel' => 'required|gt:0'
        ];
    }
}
