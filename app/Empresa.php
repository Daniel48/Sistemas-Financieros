<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
  protected $table = "empresa";
  public $timestamps=false;
  protected $fillable = ['id','nit','razonSocial','Telefono','paginaWeb','ubicacion'];
  protected $primaryKey = 'id';
}
