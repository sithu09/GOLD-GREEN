@extends('layouts.app')



@section('content')

<div class="container">
<form method="POST" action="/admin" enctype="multipart/form-data">
    @csrf
 <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Title</label>
      <input type="text" class="form-control"  name="title">
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Description</label>
      <input type="text" class="form-control"  name="description">
    </div>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="validatedCustomFile" name="image">
    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
  </div>
  <button class="btn btn-primary mt-5" type="submit">Submit form</button>
</form>

</div>

@endsection
