@extends ('mainlayout.layouts')

@section('content')

@if(count($Coursestaken) > 0)

<h1>CSUF Courses Taken</h1>
<ul>
  @foreach($Coursestaken as $c)
  <li>  {{$c->CNUM}} || {{$c->Title}}  </li>
@endforeach
</ul>
<h1> Education Accomplishments </h1>


@endif



<!-- Default form login -->
@endsection
