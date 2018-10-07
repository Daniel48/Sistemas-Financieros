<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = "solicitud";
    public $timestamps = false;
    protected $fillable = ['id', 'nroCliente', 'motivo', 'tipoSID', 'fecha', 'estado'];
    protected $primaryKey = 'id';
}
