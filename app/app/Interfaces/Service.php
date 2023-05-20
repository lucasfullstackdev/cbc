<?php

namespace App\Interfaces;

use App\Dtos\DTO;
use Illuminate\Database\Eloquent\Collection;

interface Service
{
    public function paginate();

    public function find(int $id);

    public function show(): Collection;

    public function store(DTO $dto);

    public function update(DTO $dto);
    
    public function delete();
}
