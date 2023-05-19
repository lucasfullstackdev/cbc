<?php

namespace App\Services;

use App\Interfaces\Service as IService;
use App\Models\Clube;

class ClubeService extends Service implements IService
{
    protected string $model = Clube::class;

    public function update()
    {
    }
}
