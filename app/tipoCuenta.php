<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoCuenta extends Model
{
  protected $table = "tipocuenta";
  public $timestamps=false;
  protected $fillable = ['id','nombre','descripcion'];
  protected $primaryKey = 'id';
}
