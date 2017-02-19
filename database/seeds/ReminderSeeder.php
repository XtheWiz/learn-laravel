<?php

use Illuminate\Database\Seeder;

use App\Reminder;
use App\ReminderType;

class ReminderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reminder::create([
          'body' => 'Hello Seeder',
          'isFinished' => false,
          'createdUserID' => 1
        ]);
    }
}
