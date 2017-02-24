<h2>Files</h2>
@if (count($files) == 0)
  <h3>There is no file right now</h3>
@else
  <table class="table table-bordered">
    <tr>
      <th>File name</th>
      <th>Download</th>
    </tr>

    @foreach ($files as $file)
      <tr>
        <td>{{$file->FileName}}</td>
        <td><a href="/file/{{$file->FileName}}.{{$file->FileExtension}}">Download This File</a></td>
      </tr>
    @endforeach
  </table>
@endif
