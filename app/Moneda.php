<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
  protected $table = "moneda";
  public $timestamps=false;
  protected $fillable = ['id','nombre','Abreviatura','valor'];
  protected $primaryKey = 'id';
}
