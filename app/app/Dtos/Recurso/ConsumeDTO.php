<?php

namespace App\Dtos\Recurso;

use App\Dtos\DTO;

class ConsumeDTO extends DTO
{
    /**
     * Neste contexto em particular iremos adotar snake_case pois facilitará quuando 
     * formos inserir os dados
     */
    public function __construct(public int $clube_id, public int $recurso_id, public float $valor_consumo)
    {
    }
}
