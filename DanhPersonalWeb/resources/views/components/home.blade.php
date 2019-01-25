@extends ('mainlayout.layouts')


@section('content')

  <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
    <div class="text-white text-center py-5 px-4 my-5">
      <div>
  <img  height="200" width="200" src="{{asset('css/logo/danh.jpg')}}" class="rounded-circle" alt="woman avatar">
        <h2 class="card-title animated bounceInDown slow h1-responsive pt-3 mb-5 font-bold"><strong> {{$h1}}</strong></h2>
        <p class="mx-5 animated bounceInRight slow mb-5">Give a man a program, frustrate him for a day.
Teach a man to program, frustrate him for a lifetime.
<div class="spinner-grow text-primary" role="status">
<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-secondary" role="status">
<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-success" role="status">
<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-danger" role="status">
<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-warning" role="status">
<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-info" role="status">
<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-light" role="status">
<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-dark" role="status">
<span class="sr-only">Loading...</span>
</div>
        </p>
        <a class="btn btn-outline-white btn-md"><i class="fas fa-clone left"></i> View project</a>
      </div>
    </div>
  </div>


@endsection
