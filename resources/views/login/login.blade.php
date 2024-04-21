<head>
   <!-- Favicons -->
   <link href="img/logo.png" rel="icon">
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
   <link href="/css/style.css" rel="stylesheet">
     <link rel="stylesheet" href="/css/main.css">
{{-- flashmessage --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
   
    
   </head>
<body  style="background-color: #eee;">

@include('components.layout')
{{-- <x-flash-message/> --}}
{{-- @include('components.flash-message') --}}
<x-auth-session-status class="mb-4" :status="session('status')" />  
    <section class=" gradient-form" style="background-color: #eee;margin-top:100px; ">
        <div class="container py-5" >
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="{{asset('images/logo.png')}}"
                          style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">RentEase</h4>
                      </div>
      
                      <form method="POST" action="{{route('login_store')}}" enctype="multipart/form-data">
                        @csrf
                        <p>Please login to your account</p>
                     
                        <div class="form-outline mb-4">
                          <label class="form-label" for="email">Username</label>

                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" @if(@isset($_COOKIE["email"]))
                          value="{{$_COOKIE["email"] }}" @endif  value="{{ old('email') }}" required autocomplete="email" autofocus />
                          <x-input-error :messages="$errors->get('email')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />
                        </div>
      
                        <div class="form-outline mb-4">
                          <label class="form-label" for="password">Password</label>

                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" @if(@isset($_COOKIE["password"]))
                          value="{{$_COOKIE["password"] }}"
                     @endif name="password" required autocomplete="current-password">
                     <x-input-error :messages="$errors->get('password')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />
                          <br>
                          <input type="checkbox" onclick="myFunction()">Show Password

                          <script> function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
         </script> 
                         
                        </div>
     
       <div class="block mt-4">
          <label for="remember_me" class="inline-flex items-center">
              <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
              <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
          </label>
      </div>
                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="btn btn-primary btn-block  fa-lg gradient-custom-2 mb-3" style="height:50px" type="submit">Log
                            in</button>
                            @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        </div>
      
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">Don't have an account?</p>
                          
 
                          <a href="{{route('register')}}"><button type="button" class="btn btn-outline-danger">Create new</button> </a>
                        </div>
      
                      </form>
                     

                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">We are more than just a company</h4>
                      <p class="small mb-0"> RentEase is a property rental web app that revolutionizes the rental experience by eliminating the need 
                        for brokers. With a user-friendly interface, it connects landlords directly with tenants, offering a hassle-free platform for renting properties without any middlemen, saving time and money.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>

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
 
