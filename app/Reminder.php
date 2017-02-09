<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    protected $table = "Reminder";
    public $primaryKey = "id";
    public $timestamps = true;

    public function type() {
      return $this->belongTo(ReminderType::class, 'ReminderType', 'id');
    }
}
