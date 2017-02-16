<div class="row">
  <h2>Your Reminder(s) </h2>

  <div class="row">
    <a href="/finished">Show Finished Reminder</a>
  </div>

  <div class="row">
    @foreach ($reminders as $reminder)
      <div class="well">
        {{$reminder->body}} <b>({{$reminder->type->typename}})</b>
        <form method="post" action="/reminder/delete">
          {{csrf_field()}}
          <input type="hidden" name="_method" value="delete">
          <input type="hidden" name="id" value="{{$reminder->id}}">
          <input type="submit" class="btn btn-success" value="Finish">
        </form>
      </div>
    @endforeach
  </div>

</div>
