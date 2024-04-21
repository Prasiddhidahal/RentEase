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


<section class="vh-200 gradient-custom">
    <div class="container py-5 h-200">
      <div class="row justify-content-center align-items-center h-200">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px; width:800px;margin-top:100px">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" style="margin-left: 175px;" >Register</h3>
              @if($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
              <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-xl mb-4">
                   
                    <div class="form-outline">
                      <label class="form-label" for="first_name">First Name</label>
                      <input id="first_name" type="text" class="form-control form-control-lg @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus/>

                    </div>
  
                  </div>
                  <div class="col-xl mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="middle_name">Middle Name</label>
                      <input type="text" id="middle_name" class="form-control form-control-lg @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}" autocomplete="middle_name" autofocus/>
                      
                    </div>
  
                  </div>
                  <div class="col-xl mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="last_name">Last Name</label>
                      <input type="text" id="last_name" class="form-control form-control-lg @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus/>

                    </div>
  
                  </div>
                </div>
             
  
                <div class="row">
                  <div class="col-xl mb-4 d-flex align-items-center">
  
                    <div class="form-outline datepicker w-100">
                      <label for="date_of_birth" class="form-label">Date Of Birth</label>
                      <input type="date" class="form-control form-control-lg @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth" autofocus id="date_of_birth" />
                    </div>
                    
  
                  </div>
                  
                  <div class="col-xl mb-4">
  
                    <h6 class="mb-2 pb-1">Gender: </h6>
  
                    <select class="form-control form-control-lg" name="gender">
                      <option  value="Male">Male</option>
                      <option  value="Female">Female</option>
                      <option  value="Other">Other</option>
                     
                      </select>
  
                  </div>
                  <div class="col-xl mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="user_name">User Name</label>
                      <input type="text" id="user_name" class="form-control form-control-lg @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" required autocomplete="user_name" autofocus/>

                    </div>
  
                  </div>
                </div>
   {{-- address --}}
   <div class="row">
    <div class="col-xl mb-4">

      <div class="form-outline">
        <label class="form-label" for="address">Address </label>
        {{-- street name --}}
        <input id="street_name" type="text" placeholder="Street Name" class="form-control form-control-lg @error('street_name') is-invalid @enderror" name="street_name" value="{{ old('street_name') }}" required autocomplete="street_name" autofocus/>


      </div>

    </div>
    {{-- city --}}
    <div class="col-xl mb-4">

      <div class="form-outline">
      
        <select class="form-control form-control-lg" name="city" id="city" style="margin-top: 30px;">
          <option selected disabled>Select City</option>
          @foreach ($cities as $city)
          <option value="{{ $city->id }}">{{ $city->city_name }}</option>
          @endforeach
      </select>



      </div>

    </div>
    {{-- area  --}}
    <div class="col-xl mb-4">

      <div class="form-outline">
        
        <select class="form-control form-control-lg" id="area" name="area" style="margin-top: 30px;">
          <option value="">Select area</option>
      </select>



      </div>
      <script type="text/javascript">
        $(document).ready(function () {
            $('#city').on('change', function () {
                var cityId = this.value;
                $('#area').html('<option value="">Loading...</option>'); // Add a loading message while waiting for response
                $.ajax({
                    url: '{{ route('getAreas') }}',
                    type: 'GET',
                    data: { city_id: cityId }, // Pass city_id as query parameter
                    success: function (res) {
                        $('#area').html('<option value="">Select area</option>');
                        if (res.length > 0) { // Check if any areas were returned
                            $.each(res, function (key, value) {
                                $('#area').append('<option value="' + value.id + '">' + value.area_name + '</option>');
                            });
                        } else {
                            $('#area').html('<option value="">No areas found</option>'); // Display a message if no areas were found
                        }
                    },
                    error: function () {
                        $('#area').html('<option value="">Error loading areas</option>'); // Display an error message if there was an error
                    }
                });
            });
        });
    </script>
    </div>
  </div>
                <div class="row">
                  <div class="col-xl mb-4 pb-2">
  
                    <div class="form-outline">
                      <label class="form-label" for="email">Email</label>

                      <input type="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"/>
                     

                    </div>
  
                  </div>
                 
                <div class="col-xl mb-4 pb-2">
                  <div class="form-outline">
                    <label class="form-label" for="password">Password</label>
                    
                    <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
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
                </div>
              
                <div class="col-xl mb-4 pb-2">
                  <div class="form-outline">
                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                   
                    <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
                 <input type="checkbox" onclick="myFunction1()">Show Password

                    <script> function myFunction1() {
  var x = document.getElementById("password-confirm");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
   </script> 
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-xl mb-4 pb-2">
  
                    <div class="form-outline">
                      <label class="form-label" for="phone_number">Phone Number</label>

                      <input type="tel" id="phone_number" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" />
                    

                    </div>
  
                  </div>
                  <div class="col-xl mb-4 pb-2">
  
                    <div class="form-outline">
                      <label class="form-label" for="avatar">Profile Picture</label>

                      <input type="file" id="avatar" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}"  autocomplete="avatar" />

                    </div>
  
                  </div>
                  <div class="col-xl mb-4 pb-2">
  
                    <div class="form-outline">
                      <label class="form-label" for="document">Document</label>

                      <input type="file"  class="form-control  " name="document[]" multiple/>

                    </div>
  
                  </div>
                  
                 
                </div>
  
              
                <div class="text-center pt-1 mb-1 pb-1">
                  <button class="btn btn-primary btn-block  fa-lg gradient-custom-2 mb-3" style="height:50px" type="submit">Register</button>
                    
             
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 </body>
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