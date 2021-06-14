<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table='genero';
    public $timestamps=false;
    protected $fillable=[
        'id_genero', 'genero'
    ];

    protected $primaryKey='id_genero';
}
