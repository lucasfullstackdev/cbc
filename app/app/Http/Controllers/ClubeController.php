<?php

namespace App\Http\Controllers;

use App\Dtos\Clube\{ClubeDTO, UpdateDTO};
use App\Http\Requests\Clube\{StoreRequest, UpdateRequest};
use App\Services\ClubeService;

class ClubeController extends Controller
{

    public function __construct(
        private ClubeService $clubeService
    ) {
    }

    public function index()
    {
        return $this->clubeService->paginate();
    }

    public function store(StoreRequest $request)
    {
        return $this->clubeService->store(
            new ClubeDTO($request->clube, $request->saldo_disponivel)
        );
    }

    public function show(int $id)
    {
        return $this->clubeService->find($id)->show();
    }

    public function update(UpdateRequest $request, int $id)
    {
        return $this->clubeService->find($id)->update(
            new UpdateDTO($request->clube)
        );
    }

    public function destroy($id)
    {
        return $this->clubeService->find($id)->delete();
    }
}
