<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="author" content="templatemo">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">

  <title>LiteraLand (Literature Land) - Details</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/templatemo-liberty-market.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <style type="text/css">
    .left-image img{}

  </style>
  <!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  @include('home.header')
  <!-- ***** Header Area End ***** -->


  <div class="item-details-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>View Details <em>For Item</em> Here.</h2>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="left-image">
            <img src="/book/{{$book->book_img}}" alt="" style="border-radius: 20px;">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h4>{{$book->title}}</h4>
          <span class="author">
            <img src="/author/{{$book->author_img}}" alt="" style="max-width: 50px; border-radius: 50%;">
            <h6>{{$book->author_name}}</h6>
          </span>
          <p>{{$book->description}}</p>
          <div class="row">
            <div class="col-5">
              <span class="ends">
                Total Quantity<br><strong>{{$book->quantity}}</strong><br>
              </span>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2024
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

  <script src="{{asset('assets/js/isotope.min.js')}}"></script>
  <script src="{{asset('assets/js/owl-carousel.js')}}"></script>

  <script src="{{asset('assets/js/tabs.js')}}"></script>
  <script src="{{asset('assets/js/popup.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>