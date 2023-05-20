<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clube extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'clubes';
    protected $fillable = [
        'clube',
        'saldo_disponivel'
    ];
}
