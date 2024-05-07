<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>RentEase</title>
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

    <div class="click-closed"></div>

    @include('components.admin_nav')
    <style>
        .searchouter{

            position:relative;
            border:2px gray 100;
            margin-top: 150px;
            border-radius: 10px
        }
        .search_icon_container{
            position:absolute;
            display: inline-block;
             margin-top:14;
             margin-left:3;
        }
        .search_icon_container i{
            margin-top: 27px;
            margin-left: 240px
        }
        .search_btn{

            height:50px;
            width:100px;
            color:white;
            border-radius: 10px;
            background:#3cce74;
            border:2px solid #3cce74;
        }
        .search_btn:hover{
            background:#2d9b57;
        }
        .search_btn_container{
            display: inline-block;
            position:absolute;
            margin-top:10px;
            margin-right:2px;
            margin-left: -110px
        }
        .search_text_area{
            height:70px;
            width:65%;
             padding-left:50px;
             padding-right:50px;
             border-radius: 10px;
             margin-left: 225px;


        }

        </style>

    <form action="">
        <div class="searchouter" >
            <div class="search_icon_container">
                <i class="fa fa-search "></i>
            </div>
            <input type="text" name="search" class="search_text_area" placeholder="Search Property..."/>
            <div class="search_btn_container">
                <button type="submit" class="search_btn">
                    Search
                </button>
            </div>
        </div>
    </form>
  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Our Amazing Properties</h1>
            <span class="color-text-a">Grid Properties</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                All Properties
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Grid Star /-->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="grid-option">
            <form>
              <select class="custom-select" onchange="sort_by()" name="category" id="category">
                <option  value="" selected>All</option>
                <option value="1"  {{ $sort_txt == "1" ? 'selected' : '' }}>Old to New </option>
                <option value="2"  {{ $sort_txt == "2" ? 'selected' : '' }}>For Rent</option>
                <option value="3"  {{ $sort_txt == "3" ? 'selected' : '' }}>For Sale</option>
              </select>
              {{-- {{$sort_txt}} --}}
            </form>
          </div>
        </div>



            @unless(count($property_details)==0)
            <div id="card">

            @foreach($property_details as $property_detail)
            <div class="col-md-4">
            <div class="card-box-a card-shadow"  style="width: 350px; height:250px; border-radius:10px; margin-right: 200px">
            <x-admin_all_property_card :property_detail="$property_detail"/>
          </div>
      </div>
              @endforeach
            </div>

              @else
                  <p> No property found</p>
              @endunless


          </div>
        </div>


      </div>

    </div>
  </section>
  <form id="categoryFilter"action="">
    <input type="hidden" id="sort" name="sort" value="{{$sort_txt}}"/>
  </form>
  <script>
    function sort_by(){
      var category = document.getElementById('category').value;
      $('#sort').val(category);
      $('#categoryFilter').submit();

    }
  </script>


  <!--/ Property Grid End /-->

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
                  <span class="color-text-a">Email .</span> rentease@gmail.com</li>
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
