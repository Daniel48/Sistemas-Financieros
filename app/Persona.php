<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
  protected $table = "persona";
  public $timestamps=false;
  protected $fillable = ['id','ci','nombre','apellidoP','apellidoM','fechaNac','Direccion','sexo'];
  protected $primaryKey = 'id';
}
