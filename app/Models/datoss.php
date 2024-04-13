<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datoss extends Model
{
    use HasFactory;
    public $table = 'datoss'; //el nombre de la table 
    public $timestamps = false;
    protected $primarykey ='id_personas'; //el nombre de la llave primaria

    protected $fillable =[
        'id_personas',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'cedula',
        'email',
        'celular',
        'estrato',
        'ingreso_mensuales',
        'direccion',
        'ciudad',
    ];
}