<form method="post" action="/reminder/new">
    <div class="form-group">
      <label>Reminder : </label>
      <textarea name="reminder" rows="8" cols="80" class="form-control"></textarea>
    </div>

    <div class="form-group">
      {{csrf_field()}}
      <input class="btn btn-success" type="submit" value="Create New Reminder">
    </div>
  </form>
