<?php

namespace App\Services;

use App\Dtos\BaseDTO;
use App\Dtos\DTO;
use Illuminate\Database\Eloquent\Model;

abstract class Service
{
    protected string $model;

    protected Model $result;

    protected $limitPerPage = 20;

    public final function paginate()
    {
        return $this->model::paginate($this->limitPerPage);
    }

    public final function find(int $id): self
    {
        $this->result = $this->model::find($id);

        if (empty($clube)) {
            // Adicionar custom Exception (notFound)
        }

        return $this;
    }

    public final function store(DTO $dto)
    {
        try {
            $this->model::create((array) $dto);
        } catch (\Throwable $th) {
            // Adicionar custom Exception (NotInserted)
        }
    }

    public function update(DTO $dto)
    {
        try {
            $this->result->update((array) $dto);
        } catch (\Throwable $th) {
            // Adicionar custom Exception (NotUpdated)
        }
    }

    public final function show(): Model
    {
        return $this->result;
    }

    public final function delete()
    {
        return $this->result->delete();
    }
}
