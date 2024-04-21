<head>
   <!-- Favicons -->
   <link href="img/logo.png" rel="icon">
   <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
 
   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
 
   <!-- Bootstrap CSS File -->
   <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

   {{-- flashmessage --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
   <!-- Libraries CSS Files -->
   <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
   <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
   <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
   <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
 
   <!-- Main Stylesheet File -->
   <link href="/css/style.css" rel="stylesheet">
     <link rel="stylesheet" href="/css/main.css">

   
    
   </head>
<body  style="background-color: #eee;">

@include('components.layout')

<x-auth-session-status class="mb-4" :status="session('status')" />  

    <section class=" gradient-form" style="background-color: #eee;margin-top:100px; ">
      <div class="container">
      
            </div>
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
                        <h4 class="mt-1 mb-5 pb-1">Broker Free</h4>
                      </div>
      
                      <form method="POST" action="{{route('admin.login')}}" enctype="multipart/form-data">
                        @csrf
                        <p>Please login to your account</p>
      
                        <div class="form-outline mb-4">
                          <label class="form-label" for="email">Username</label>

                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" @if(@isset($_COOKIE["email"]))
                               value="{{$_COOKIE["email"] }}"
                          @endif value="{{ old('email') }}" required autocomplete="email" autofocus />
                          <x-input-error :messages="$errors->get('email')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />
                        </div>
      
                        <div class="form-outline mb-4">
                          <label class="form-label" for="password">Password</label>

                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" @if(@isset($_COOKIE["password"]))
                          value="{{$_COOKIE["password"] }}"
                     @endif name="password" required autocomplete="current-password">
                          <input type="checkbox" onclick="myFunction1()">Show Password

                          <script> function myFunction1() {
        var x = document.getElementById("password");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
         </script> 
                           <x-input-error :messages="$errors->get('password')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />
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
                           
                        </div>
      

      
                      </form>
                     

                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">We are more than just a company</h4>
                      <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
  {{-- <script>
    $("document").ready(function(){
        setTimeout(function(){
            $("div.error").close();
        },3000);
    });
</script> --}}


 </body>
 
