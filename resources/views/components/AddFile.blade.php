<h2>Upload New File</h2>
@if (session('fileUpload') != null)
  <div class="alert alert-success" role="alert">
    {{session('fileUpload')}}
  </div>
@endif
<form class="" action="/file/upload" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>FileName</label>
    <input type="text" name="name" class="form-control" required="" autofocus="">
  </div>

  <div class="form-group">
    <label>Upload File</label>
    <input type="file" name="uploadedFile" value="" required="">
  </div>

  <div class="form-grop">
    {{csrf_field()}}
    <input type="submit" name="" value="Submit" class="btn btn-success">
  </div>
</form>
