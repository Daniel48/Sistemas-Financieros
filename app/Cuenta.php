<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
  protected $table = "cuenta";
  public $timestamps=false;
  protected $fillable = ['nroCuenta','tipoCuentaID','monedaID','nroCliente',	'passwd','fechaApertura','Monto'];
  protected $primaryKey = 'nroCuenta';
}
