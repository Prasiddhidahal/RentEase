
        <!DOCTYPE html>
        <meta charset="utf-8">
    <title>RentEase </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="images/logo.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="/css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/comment.css">
    {{-- flashmessage --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        </head>

        <body>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
          <div class="click-closed"></div>

          @include('components.admin_nav')
          <!--/ Carousel Star /-->
          <div class="intro intro-carousel">
            <div id="carousel" class="owl-carousel owl-theme">

          @unless(count($designs)==0)

              @foreach($designs as $design)
              <x-carousel :property_detail="$design"/>
                @endforeach

                @else
                    <p> No property found</p>
                @endunless
              </div>
            </div>
            <script>
              $('.owl-carousel').owlCarousel({

      loop:true,
      margin:10,
      nav:true,
      responsive:{
          0:{
              items:1
          },
      }
      })
              </script>

           {{-- @include('partials._search') --}}

           @include('components.ourService')
          <!--/ Property Star /-->
          <section class="section-property section-t8">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                      <h2 class="title-a">Latest Properties</h2>
                    </div>
                    <div class="title-link">
                      <a href="/allproperty">All Property
                        <span class="ion-ios-arrow-forward"></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div id="property-carousel" class="owl-carousel owl-theme">
                @unless(count($property_details)==0)

              @foreach($property_details as $property_detail)
                <div class="carousel-item-b">

                    <x-admin_property_detail_card :property_detail="$property_detail"/>

                </div>

                @endforeach

              </div>


              @else
                  <p> No property found</p>
              @endunless
            </div>
          </section>
          <script>
            $('.owl-carousel').owlCarousel({

    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
            </script>

          <!--/ Property End /-->
          <!--/ Property Star /-->
          <section class="section-property section-t8">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                      <h2 class="title-a">Most Liked Properties</h2>
                    </div>
                    <div class="title-link">
                      <a href="/allproperty">All Property
                        <span class="ion-ios-arrow-forward"></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div id="property-carousel" class="owl-carousel owl-theme">
              @unless(count($most_liked)==0)

              @foreach($most_liked as $most_like)


                <div class="carousel-item-b">
                    <x-admin_property_detail_card :property_detail="$most_like"/>
                </div>
              @endforeach
            </div>

              @else
                  <p> No property found</p>
              @endunless
            </div>
          </section>
          <script>
            $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
            </script>
          <!--/ Property End /-->
               <!--/ Property Star /-->
          <section class="section-property section-t8">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                      <h2 class="title-a">Most Viewed Properties</h2>
                    </div>
                    <div class="title-link">
                      <a href="/allproperty">All Property
                        <span class="ion-ios-arrow-forward"></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div id="property-carousel" class="owl-carousel owl-theme">
              @unless(count($most_viewed)==0)

              @foreach($most_viewed as $most_view)

                <div class="carousel-item-b">

                    <x-admin_property_detail_card :property_detail="$most_view"/>

                </div>



              @endforeach
            </div>

              @else
                  <p> No property found</p>
              @endunless
            </div>
          </section>
          <script>
            $('.owl-carousel').owlCarousel({

    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
            </script>




          <!--/ footer Star /-->
          <section class="section-footer">
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-4">
                  <div class="widget-a">
                    <div class="w-header-a">
                      <h3 class="w-title-a text-brand">RentEase </h3>
                    </div>
                    <div class="w-body-a">
                      <p class="w-text-a color-text-a">
                      RentEase  is a property rental web app that revolutionizes the rental experience by eliminating the need
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

          <script>
            document.addEventListener("DOMContentLoaded", function(event) {
                var scrollpos = localStorage.getItem('scrollpos');
                if (scrollpos) window.scrollTo(0, scrollpos);
            });

            window.onbeforeunload = function(e) {
                localStorage.setItem('scrollpos', window.scrollY);
            };
        </script>
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

          <!--/ Property End /-->

