@extends('template')

@section('content')
  <div class="container">

    @include('components.ReminderList', ['reminders' => $reminders])

    @include('components.NewReminder', ['types' => $types])

  </div>
@endsection
