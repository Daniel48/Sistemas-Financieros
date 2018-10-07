<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCliente extends Model
{

  protected $table = "tipocliente";
  public $timestamps=false;
  protected $fillable = ['id','Categoria','descripcion'];
  protected $primaryKey = 'id';
}
