@extends ('mainlayout.layouts')

@section('content')




@if(count($Courses || $Level) > 0)

<h1> {{$CoursesT}}</h1>
<ul>
  @foreach($Courses as $c)
  <li> {{$c}}  </li>
@endforeach
</ul>
<h1> {{$EducationLevel}}</h1>

<ul>
    @foreach($Level as $e)
  <li> {{$e}}  </li>
@endforeach
</ul>


@endif

@endsection
