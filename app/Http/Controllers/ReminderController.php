<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ReminderController extends Controller
{
    public function home() {
      $reminders = DB::table('reminder')->orderBy('id', 'dsc')->get();

      return view('home', ['reminders' => $reminders]);
    }

    public function addReminder(Request $request) {
      $body = $request->reminder;

      DB::table('Reminder')->insert(['body'=>$body, 'isFinished'=>false, 'createdUserID'=>2]);

      return back();
    }

    public function deleteReminder(Request $request) {
      $id = $request->id;

      DB::table('reminder')->where('id', $id)->delete();

      return back()->with('Are you finish this job?');
    }
}
