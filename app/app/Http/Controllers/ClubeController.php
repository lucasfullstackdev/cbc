<?php

namespace App\Http\Controllers;

use App\Dtos\ClubeDTO;
use App\Http\Requests\Clube\StoreRequest;
use App\Services\ClubeService;
use Illuminate\Http\Request;

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


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        return $this->clubeService->find($id)->delete();
    }
}
