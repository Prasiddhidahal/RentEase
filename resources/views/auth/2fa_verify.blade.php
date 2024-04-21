<head>
    <link href="/css/style.css?v=2" rel="stylesheet">
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
@include('components.layout')

    <div class="container" style="margin-top:100px; ">
        <div class="row justify-content-md-center">
            <div class="col-md-8 ">
                <div class="card">
                    <div class="card-header">Two Factor Authentication</div>
                    <div class="card-body">
                        <p>Two factor authentication (2FA) strengthens access security by requiring two methods (also referred to as factors) to verify your identity. Two factor authentication protects against phishing, social engineering and password brute force attacks and secures your logins from attackers exploiting weak or stolen credentials.</p>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        Enter the pin from Google Authenticator app:<br/><br/>
                        <form  method="post" class="form-horizontal" action="{{ route('2faVerify') }}">
                            {{ csrf_field() }}
                            @method('post')
                            <div class="form-group{{ $errors->has('one_time_password-code') ? ' has-error' : '' }}">
                                <label for="one_time_password" class="control-label">One Time Password</label><br>
                                <input id="one_time_password" name="one_time_password" class="form-control col-md-4"  type="password" required/><br><br>
                                <input type="checkbox" class="show" onclick="myFunction1()" style="margin-left:-1px;margin-top:10px"/> Show Password
                                <script>
                                    function myFunction1() {
                                        var x = document.getElementById("one_time_password");
                                        if (x.type === "password") {
                                            x.type = "text";
                                        } else {
                                            x.type = "password";
                                        }
                                        }
                                    </script>
                            </div><br>
                           <div style="display: grid; justify-content:center">
                            <button class="authenticate_btn" type="submit" style="
                            width: 200px;
                            height: 60px;
                            border: 2px solid #2eca6a;
                            background: white;
                            border-radius: 20px;
                            color: #2eca6a;
                           
                            ">Authenticate</button>
                           </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
