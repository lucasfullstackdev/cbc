<?php

namespace App\Dtos\Clube;

use App\Dtos\DTO;

class ClubeDTO extends DTO
{
    /**
     * Neste contexto em particular iremos adotar snake_case pois facilitará quuando 
     * formos inserir os dados
     */
    public function __construct(public string $clube, public float $saldo_disponivel)
    {
    }
}
