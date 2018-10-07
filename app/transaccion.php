<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaccion extends Model
{

  protected $table = "transaccion";
  public $timestamps=false;
  protected $fillable = ['id','fechaHora','nroCuentaOr','nroCuentaDest',	'monedaID','monto'];
  protected $primaryKey = 'id';
}
