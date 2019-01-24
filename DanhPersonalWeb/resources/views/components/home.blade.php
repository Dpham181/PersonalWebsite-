@extends ('mainlayout.layouts')


@section('content')

  <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
    <div class="text-white text-center py-5 px-4 my-5">
      <div>
        <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong> {{$h1}}</strong></h2>
        <p class="mx-5 mb-5">Give a man a program, frustrate him for a day.
Teach a man to program, frustrate him for a lifetime.
        </p>
        <a class="btn btn-outline-white btn-md"><i class="fas fa-clone left"></i> View project</a>
      </div>
    </div>
  </div>


@endsection
