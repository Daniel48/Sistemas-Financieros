<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privilegio extends Model
{
  protected $table = "permissions";
  public $timestamps=false;
  protected $fillable = ['id','name','slug','description','created_at','updated_at'];
  protected $primaryKey = 'id';
}
