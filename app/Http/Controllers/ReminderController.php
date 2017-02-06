<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReminderController extends Controller
{
    function home() {
      $reminders = [
        'Buy Milk',
        'Go to bank',
        'Move things out'
      ];

      return view('home', ['reminders' => $reminders]);
    }
}
