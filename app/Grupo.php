<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
  protected $table = "grupo";
  public $timestamps=false;
  protected $fillable = ['id','usuarioID'];
  protected $primaryKey = 'id';
}
