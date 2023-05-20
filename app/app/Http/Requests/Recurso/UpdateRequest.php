<?php

namespace App\Http\Requests\Recurso;

use App\Http\Requests\Request;

class UpdateRequest extends Request
{
    public function rules()
    {
        return [
            'recurso' => 'required|min:5|max:255'
        ];
    }
}
