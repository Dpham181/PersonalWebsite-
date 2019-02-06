@extends ('mainlayout.layouts')


@section('content')



  <h1 class="text-center  text-white h1 border rounded-pill font-weight-bold  animeted bounceIn"> All My Pictures  </h1>
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view WOW">
        <img class="d-block w-100" src="{{asset('css/logo/b.jpg')}}" alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>

    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="{{asset('css/logo/friends2.jpg')}}" alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>

    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="{{asset('css/logo/friends.jpg')}}" alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>

    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<h1 class="text-center  text-white h1 border rounded-pill font-weight-bold  animeted bounceIn"> All My Clips  </h1>

<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fdanh.pham.940641%2Fvideos%2F1281446125213829%2F&show_text=0&width=560" width="1100" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>


@endsection
