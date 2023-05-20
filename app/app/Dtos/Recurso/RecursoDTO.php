<?php

namespace App\Dtos\Recurso;

use App\Dtos\DTO;

class RecursoDTO extends DTO
{
    /**
     * Neste contexto em particular iremos adotar snake_case pois facilitará quuando 
     * formos inserir os dados
     */
    public function __construct(public string $recurso, public float $saldo_disponivel)
    {
    }
}
