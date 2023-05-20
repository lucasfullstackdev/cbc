<?php

namespace App\Services;

use App\Dtos\Recurso\ConsumeDTO;
use App\Interfaces\Service as IService;
use App\Models\Clube;
use App\Models\Recurso;

class RecursoService extends Service implements IService
{
    protected string $model = Recurso::class;

    public function consume(ConsumeDTO $consume)
    {
        $clube = Clube::find($consume->clube_id);
        $recurso = Recurso::find($consume->recurso_id);

        if ($recurso->saldo_disponivel < $consume->valor_consumo) {
            return "O saldo disponível do recurso é insuficiente.";
        }

        if (($clube->saldo_disponivel - $consume->valor_consumo) < 0) {
            return "O saldo disponível do clube é insuficiente";
        }

        $this->debitClube($clube, $consume);
        $this->debitResource($recurso, $consume);
    }

    private function debitClube(Clube $clube, ConsumeDTO $consume)
    {
        $clube->saldo_disponivel -= $consume->valor_consumo;
        $clube->save();
    }

    private function debitResource(Recurso $recurso, ConsumeDTO $consume)
    {
        $recurso->saldo_disponivel -= $consume->valor_consumo;
        $recurso->save();
    }
}
