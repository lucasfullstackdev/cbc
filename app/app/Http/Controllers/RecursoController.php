<?php

namespace App\Http\Controllers;

use App\Dtos\Recurso\{ConsumeDTO, RecursoDTO, UpdateDTO};
use App\Http\Requests\Recurso\{ConsumeRequest, StoreRequest, UpdateRequest};
use App\Services\RecursoService;

class RecursoController extends Controller
{

    public function __construct(
        private RecursoService $recursoService
    ) {
    }

    public function index()
    {
        return $this->recursoService->paginate();
    }

    public function store(StoreRequest $request)
    {
        return $this->recursoService->store(
            new RecursoDTO($request->recurso, $request->saldo_disponivel)
        );
    }

    public function show($id)
    {
        return $this->recursoService->find($id)->show();
    }

    public function update(UpdateRequest $request, int $id)
    {
        return $this->recursoService->find($id)->update(
            new UpdateDTO($request->recurso)
        );
    }

    public function destroy($id)
    {
        return $this->recursoService->find($id)->delete();
    }

    public function consume(ConsumeRequest $request)
    {
        return $this->recursoService->consume(
            new ConsumeDTO(
                $request->clube_id,
                $request->recurso_id,
                $request->valor_consumo
            )
        );
    }
}
