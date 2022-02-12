<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>MRAPS</title>

  <link rel="stylesheet" href="{{ asset('admin/css/maicons.css') }}">

  <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.css') }}">

  <link rel="stylesheet" href="{{ asset('admin/vendor/owl-carousel/css/owl.carousel.css') }}">

  <link rel="stylesheet" href="{{ asset('admin/vendor/animate/animate.css') }}">

  <link rel="stylesheet" href="{{ asset('admin/css/theme.css') }}">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">MyMeal Record & </span> Appointment System</a>

        <div class="collapse navbar-collapse" id="navbarSupport">
        @if (Route::has('login'))
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
            @if (Route::has('register'))
              <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
            @endif
            </li>
            </ul>
        @endif
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-hero bg-image overlay-dark" style="background-image: url(/uploads/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">MyMeal Record & Appointment System </span>
        <h1 class="display-4">Department of Dietary, Klinik Kesihatan Sitiawan</h1>
      </div>
    </div>
  </div>

<script src="{{ asset('admin/js/jquery-3.5.1.min.js') }}"></script>

<script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('admin/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('admin/vendor/wow/wow.min.js') }}"></script>

<script src="{{ asset('admin/js/theme.js') }}"></script>
  
</body>
</html>
