<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>My Profile</title>
  <link rel="stylesheet" href="/css/app.css">
</head>

<body>
  <div class="contrainer">
    <div class="col-md-6">
      <img class="img-responsive" src="/images/prayut.jpg" alt="">
    </div>

    <div class="col-md-6">
      @foreach ($profiles as $profile)
        <p>{{$loop->iteration}}</p>

        @if ($loop->iteration == 2)
          <p>This is second iteration.</p>
        @else
          <p>This is the FIRST.</p>
        @endif

        <p>Name : {{$profile['name']}}</p>
        <p>Occupation : {{$profile['occupation']}}</p>
        <p>Website : {{$profile['website']}}</p>
        <p>Skills : </p>
        <ul>
        @foreach ($profile['skills'] as $skill)
            <li>{{$skill}}</li>
        @endforeach
        </ul>
        <hr>
      @endforeach
    </div>
  </div>
</body>
</html>
