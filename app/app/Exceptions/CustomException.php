<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;

class CustomException extends Exception
{

    protected string $origin;

    public function render()
    {
        return response()->json([
            'success' => false,
            'message' => $this->message,
            'data'    => []
        ], $this->code);
    }

    public function report()
    {
        Log::error(
            $this->message,
            [
                'origin' => $this->origin,
                'code' => $this->code
            ]
        );
    }
}
