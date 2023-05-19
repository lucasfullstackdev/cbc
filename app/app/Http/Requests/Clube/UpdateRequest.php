<?php

namespace App\Http\Requests\Clube;

use App\Http\Requests\Request;

class UpdateRequest extends Request
{
    public function rules()
    {
        return [
            'clube' => 'required|min:5|max:255'
        ];
    }
}
