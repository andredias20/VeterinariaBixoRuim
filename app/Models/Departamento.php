<?php

namespace App\Models;

use Illuminate\Console\Concerns\HasParameters;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Departamento extends Model
{
    use HasFactory;
    protected $table = 'departamentos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = ['nome'];




}
