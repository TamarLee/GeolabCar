<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Italianno|Lato:400,700|Raleway:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/mainstyles.css">
    
    <title>CARS</title>
  </head>
  <body>
        <img src="img/circle.png"  id="c1" class="rellax" data-rellax-speed="5" data-rellax-zindex="1080">
        <img src="img/circle2.png" id="c2"  class="rellax" data-rellax-speed="-6" data-rellax-zindex="1080">
        <img src="img/circle3.png" id="c3"  class="rellax" data-rellax-speed="-2" data-rellax-zindex="1080">
        <img src="img/circle4.png" id="c4"  class="rellax" data-rellax-speed="-1" data-rellax-zindex="1080">
        <img src="img/circle4.png" id="c5"  class="rellax" data-rellax-speed="-5" data-rellax-zindex="1080">
    <a id="menu-toggle" href="" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
    <div id="sidebar-wrapper">
            <a id="menu-close" href="" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <ul class="sidebar-nav">
            {{ menu('main_menu', 'bootstrap') }}
        </ul>
    </div>
            <a class="navbar-brand" href="#home">AUṪO</a>
    <!-- carousel -->
    <div class="" id="home">
      <div id="main-slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            @foreach ($slider as  $value)
            <img src="{{$value->image}}" class="d-block img-fluid" alt="wq">

            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-uppercase">{{$value->date}}</h3>
              <p class="">{{$value->description}}</p>
            </div>
            @endforeach
          </div>

        </div>
        <a href="#main-slider" class="carousel-control-prev" data-slide="prev">
          <span class="arrow"><img src="img/leftt.png"></span>
        </a>
        <a href="#main-slider" class="carousel-control-next" data-slide="next">
          <span class="arrow"><img src="img/rightt.png"></span>
        </a>

      </div>
    </div>
    <!-- endCarousel -->
    <!-- imgs-->
    <div class="container pb-5" id="services">
    <section class="new-website py-5 mt-5">
      <h2 class="text-center text-uppercase">the corner garage for collector cars</h2>
    </section>

      <div class="row">
        @foreach($service as $value)
        <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
          <div class="image-links">
            <a href="{{ $value->link }}">
            <img src="{{ $value->image }}" class="image-fluid">
            </a>
            <p class="image-info text-uppercase">{{ $value->title }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
        <img src="img/road.png" alt="" width="100%">
        <img src="img/lamborghini.png" alt="" id="car">
    <!-- imgs end -->
    <!-- map -->
  <div class="container mb-5" id="contact">
    <section class="map-section">
      <div class="container map-height reset-padding">
        <iframe class="margin-top-bottom" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2978.1362824355556!2d44.78283021484294!3d41.71757797923522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472d4fa5b02d7%3A0xced15c2c7992ceb5!2sGeoLab!5e0!3m2!1sen!2sge!4v1508590724822" width="100%" height="800px" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </section>
    <div class="row">
      <div class="col-8 offset-2 col-md-10 offset-md-1 map-info">
        <div class="row">
          <div class="col-md-4 lmao">
            <h3 class="text-uppercase jk pt-5">contact information</h3>
            <div class="socials text-center">
            <h3 class="jk text-center">click to <section class="d-block">view</section></h3>
              <ul class="">
                @foreach($social as $value)
                  <li><a href="{{ $value->link }}" class="{{ $value->title }}">
                  </a></li>
                @endforeach
            </ul>
            </div>
          </div>
          <div class="col-md-8">
            <h2 class="text-uppercase jk pt-5">get in touch</h2>
          <form class="p-5" action="{{ url('/') }}" method="POST">
            <div class="row">
              <div class="col-md-6">

                @foreach($form as $value)
                  <div class="form-group">
                    <input type="{{ $value->type }}" class="form-control" placeholder="{{ $value->placeholder }}">
                  </div>
                @endforeach

                  <div class="form-group">
                    <textarea class="form-control textarea" rows="4" placeholder="Text" name="textarea" style="overflow:hidden;"></textarea>
                  </div>

              </div>
              <div class="col-md-6">
          <div class="d-inline pr-4">
            <input type="radio" id="radio" name="optradio">
            <label for="radio" class="px-2">&nbsp;&nbsp;male</label>
          </div>
          <div class="d-inline pr-4">
            <input type="radio" id="radio2" name="optradio">
          <label for="radio2" class="px-2">&nbsp;&nbsp;female</label>
          </div>

          <div class="xbox">
            <p class="jk">Sign up for newsletter:</p>
              @foreach($animal as $value)
                <input type="checkbox" id="checkbox{{ $value->id }}" name="smh">
                <label for="checkbox{{ $value->id }}" class="d-block">{{ $value->title }}</label>
              @endforeach


          </div>
          
              </div>
            </div>
            <inut type="submit" class="btn btn-primary btn-black float-right mb-4">send</input>
        </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- mapEnd -->

    <!-- foooter -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <hr class="w-100">
          <div class="col-8 offset-2 col-md-10 offset-md-1">
            <p class="d-inline">&copy; copyright 2017</p>
            <p class="d-inline float-right">created by: Temo chkhaidze <span>&amp; Tamar mekhrishvili</span></p>
          </div>
        </div>
      </div>
    </footer>


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script src="js/rellax-master/rellax.min.js"></script>
    <script>
  // Accepts any class name
  var rellax = new Rellax('.rellax');
    </script>
  </body>
</html>