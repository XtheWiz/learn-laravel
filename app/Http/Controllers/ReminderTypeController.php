<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

use App\ReminderType;

class ReminderTypeController extends Controller
{
    public function addReminderType(Request $request) {

      $this->validate($request, [
        'name' => 'required|unique:ReminderType,typename'
      ]);

      $typeName = $request->name;

      $reminderType = new ReminderType();
      $reminderType->typename = $typeName;

      $reminderType->save();

      return back()->with(['ReminderTypeStatus' => 'Add new reminder type successfully']);
    }

    public function listReminderType() {
      return response()->json([
        'Name' : 'Wiruj',
        'Greet' : 'Hi !!',
      ]);
    }
}
