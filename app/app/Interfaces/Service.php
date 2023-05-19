<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface Service
{
    public function paginate();

    public function find(int $id);

    public function show(): Model;

    public function delete();

    public function update();
}
