<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
    ];

    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'departamentos';
}
