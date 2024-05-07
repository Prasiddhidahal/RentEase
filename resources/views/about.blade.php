<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="/css/propertycreate.css">
        <!-- Favicons -->
        <link href="images/logo.png" rel="icon">
        {{-- <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        {{-- For dropdown --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap CSS File -->
        <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="/css/style.css" rel="stylesheet">
          <link rel="stylesheet" href="/css/main.css">
        {{-- flashmessage --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
              {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
      </head>
      <body style="background-color: #eee;">
      @include('components.layout')

  <div class="click-closed"></div>

  <!--/ Intro Single star /-->
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <!--/ Intro Single End /-->

  <!--/ About Star /-->
  <section class="section-about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <br/>
          <div class="sinse-box">
            <h3 class="sinse-title">RentEase

              <br> Since 2024</h3>
            <p>Property Rental Website</p>
          </div>
        </div>
        <div class="col-md-12 section-t8">
          <div class="row">
            <div class="col-md-6 col-lg-5">
              <img src="images/logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-2  d-none d-lg-block">
              <div class="title-vertical d-flex justify-content-start">
                <span>RentEase</span>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 section-md-t3">
              <div class="title-box-d">
                <h3 class="title-d">About
                  <span class="color-d">Us</span>

              </div>
              <p class="color-text-a">
                RentEase is a reliable property rental web app that prioritizes user verification and authentication to ensure
                a secure and trustworthy rental experience. With robust authentication measures in place, it significantly reduces
                the chances of fraud, giving peace of mind to both landlords and tenants. The platform offers convenient features to
                effortlessly post, manage, and search properties, making it easy for landlords to showcase their listings and tenants
                to find their ideal rental. With a user-friendly interface and intuitive search filters, users can efficiently browse
                through a wide range of properties based on their preferences. Whether you're a landlord looking to list your property
                or a tenant in search of a rental, RentEase provides a streamlined and trustworthy solution, fostering a transparent
                and efficient rental marketplace
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ About End /-->
 <!--/ footer Star /-->
 <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">RentEase</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                RentEase is a property rental web app that revolutionizes the rental experience by eliminating the need
                for brokers. With a user-friendly interface, it connects landlords directly with tenants, offering a hassle-free platform for renting properties without any middlemen, saving time and money.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Email .</span> contact@example.com</li>
                <li class="color-a">
                  <span class="color-text-a"> Phone.</span> +977 9864404745</li>
              </ul>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>
  @include('components.footer')



  <!-- JavaScript Libraries -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('lib/popper/popper.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('lib/scrollreveal/scrollreveal.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('js/main.js')}}"></script>

</body>
</html>
