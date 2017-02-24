<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
  protected $table = "File";
  public $primaryKey = "id";
  public $timestamps = false;
}
