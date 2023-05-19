<?php

namespace App\Services;

use App\Interfaces\Service as IService;
use App\Models\Recurso;

class RecursoService extends Service implements IService
{
    protected string $model = Recurso::class;
}
