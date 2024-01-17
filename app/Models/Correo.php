<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Correo extends Model
{
    use HasFactory;

    protected $table =  "correo";
    protected $primarykey = "id";

    protected $fillable = [
        'id',
        'nombre',
        'email',
        'mensaje',
    ];

    public $timestamps = false;
}
