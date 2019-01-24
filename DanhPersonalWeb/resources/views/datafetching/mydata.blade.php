@extends('mainlayout.layouts')


@section('content')
@if(count($datas) > 0)
  <ol>
@foreach($datas as $d)
<li> <a href="/datas/{{$d-> id}}">{{$d -> name}} </a></li>
@endforeach
{{$datas->links()}} 
 </ol>

@endif
@endsection
