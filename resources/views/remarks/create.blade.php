<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Elections Forum | Add Remark</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
<style>
  body{
    background-color: #eef2f5;
}
</style>
</head>
<body>
@include('includes.navbar', ['user' => $user])

@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif

<div class="container my-5 py-5 text-dark">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-6">
        <div class="card">
          <div class="card-body p-4">
            <div class="d-flex flex-start w-100">
              <div class="rounded-circle shadow-1-strong me-3"
               width="65"
                height="65" ></div>
              <div class="w-100">
                <h5>Add a comment</h5>
                <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-outline">
                  <textarea class="form-control" id="textAreaExample" rows="4" name="comment"></textarea>
                  <label class="form-label" for="textAreaExample">What is your view?</label>
                        @error('comment')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                </div>
                <div class="d-flex justify-content-between mt-3">
                  <a type="button" class="btn btn-danger" href="{{ route('dashboard') }}">Cancel</a>
                  <button type="submit" class="btn btn-success">
                    Send <i class="fas fa-long-arrow-alt-right ms-1"></i>
                  </button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>