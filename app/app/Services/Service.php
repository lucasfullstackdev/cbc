<?php

namespace App\Services;

use App\Dtos\BaseDTO;
use App\Dtos\DTO;
use App\Exceptions\NotFound;
use Illuminate\Database\Eloquent\Collection;

abstract class Service
{
    protected string $model;

    protected Collection $result;

    protected $limitPerPage = 20;

    public final function paginate()
    {
        return $this->model::paginate($this->limitPerPage);
    }

    public final function find(int $id): self
    {
        $this->result = $this->model::where('id', $id)->get();

        if (empty($this->result->count())) {
            throw new NotFound($this->model);
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

    public final function show(): Collection
    {
        return $this->result;
    }

    public final function delete()
    {
        return $this->result->delete();
    }
}
