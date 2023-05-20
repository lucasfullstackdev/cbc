<?php

namespace App\Exceptions;

use Illuminate\Http\Response;

class NotFound extends CustomException
{
    protected $message = 'Registro não encontrado';
    protected $code = Response::HTTP_NOT_FOUND;

    public function __construct(protected string $origin)
    {
    }
}
