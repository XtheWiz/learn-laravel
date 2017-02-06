<div class="row">
  <h2>Your Reminders</h2>

  <div class="row">
    @foreach ($reminders as $reminder)
      <div class="well">{{$reminder}}<a class="btn btn-success pull-right">Finish</a></div>
    @endforeach
  </div>

</div>
