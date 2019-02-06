@extends ('mainlayout.layouts')

@section('content')
<h1 class="text-center text-white h1 border rounded-pill font-weight-bold "> Summary </h1>
<hr>
<p class=" text-white  animated rollIn " style="font-size:20px;">
  <strong>
    Seeking for  an internship opportunity/part-time, or full-time in the field of Computer Science that will utilize relevant experience, technical expertise and problem solving skills. Proficient at designing database, utilizing open source frameworks, writing code invarious languages, and creating feature implementations. Specialize in web back-end and front-end engineering for enterprise application.

  </strong> </p>
</hr>


<h1 class="text-center text-white h1 border rounded-pill font-weight-bold "> Education Accomplishments </h1>
<!--Grid row-->
<div class="row my-4">

    <!--Grid column-->
    <div class="col-lg-4 col-md-12">
      <a href="{{asset('css/logo/dilopma.jpg')}}" data-size="1200x1200">

        <img src="{{asset('css/logo/dilopma.jpg')}}" class="img-fluid  animated rollIn z-depth-2 rounded" alt="First sample image">
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6">
      <a href="{{asset('css/logo/college.jpg')}}" data-size="1200x1200">

        <img src="{{asset('css/logo/college.jpg')}}" class="img-fluid  animated rollIn z-depth-3 rounded" alt="First sample image">
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6">
      <a href="{{asset('css/logo/1.png')}}" data-size="1200x1200">

        <img src="{{asset('css/logo/1.png')}}" class="img-fluid z-depth-4   animated rollIn rounded" alt="First sample image">
    </div>
    <!--Grid column-->

</div>

<h1 class="text-center text-white h1 border rounded-pill font-weight-bold "> Education Honor </h1>
<!--Grid row-->
<div class="row my-4">

    <!--Grid column-->
    <div class="col-lg-4 col-md-12">
      <a href="{{asset('css/logo/honor.jpg')}}" data-size="1200x1200">

        <img src="{{asset('css/logo/honor.jpg')}}" class="img-fluid z-depth-2   animated rollIn rounded" alt="First sample image">
    </div>
  </div>
<!--Grid row-->
@if(count($Coursestaken) > 0)
<h1 class="text-center text-white h1 border rounded-pill font-weight-bold ">Computer Science Courses Taken</h1>
<div class="table-wrapper-scroll-y">

  <table class="table bg-primary table-bordered table-striped">
    <thead>
      <tr class="text-dark animated fadeInDown delay-1s">
        <th scope="col">#</th>
        <th scope="col">CRN</th>
        <th scope="col"> COURSES TITLE </th>
      </tr>
    </thead>
    <tbody>
@foreach($Coursestaken as $c)

      <tr class="text-white animated fadeInDown delay-2s">

        <th scope="row">{{$c->id}}</th>
        <td >{{$c->CNUM}} </td>
        <td>{{$c->Title}}</td>
      </tr>
  @endforeach

    </tbody>
  </table>

</div>
@endif

<h1 class="text-center text-white h1 border rounded-pill font-weight-bold "> Additional Information </h1>
  <ul class=" text-white " style="font-size:20px;">
    <li>Self-confidence and hardworking Willing to learn and adapt to new opportunities and challenge. </li>
    <li>Speaking fluently in Vietnamese, and  English.</li>
    <li>Able to cope under pressure Can work independently or as a part of team. </li>

  </ul>
  <hr>

<!-- Default form login -->
@endsection
