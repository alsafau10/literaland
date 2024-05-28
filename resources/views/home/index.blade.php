<!DOCTYPE html>
<html lang="en">

 @include('home.css')

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

  <!-- header -->
    @include('home.header')
    <!-- main banner -->
    @include('home.main-banner')
  
  <!-- cat-banner -->
  @include('home.cat-banner')
  

 <!-- items-banner -->
@include('home.item-banner')
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2024 <a target="_blank" href="https://www.youtube.com/channel/UCeNYDojo4nU2sbHz1sMsBXw">Web Tech Knowledge
          &nbsp;&nbsp;
          Designed by <a title="HTML CSS Templates" rel="sponsored" href="https://www.youtube.com/channel/UCeNYDojo4nU2sbHz1sMsBXw" target="_blank">Web Tech Knowledge</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  @include('home.script')

  </body>
</html>