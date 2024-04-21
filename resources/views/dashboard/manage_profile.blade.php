<head>
  <link rel="stylesheet" href="/css/manage_profile.css">
  {{-- flashmessage --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<x-dashboardsidebar style=" position: fixed;">

       
        @auth
        <div class="container" style="width:100%; padding:10px; overflow: auto;
        flex: 1 1 auto;
        scrollbar-width: none; /* Firefox */
  -ms-overflow-style: none; /* Internet Explorer and Edge */">
        <style>
          .container::-webkit-scrollbar {
           display: none;
          }
          </style>
          <div class="row justify-content-center">
            <div class="col-xl">
              <div class="card" style="width: 800px;height:auto;">
                <div class="card-header">
                  <h2 class="text-2xl font-bold uppercase mb-1">
                    Profile
                  </h2>
                </div>
      
                <div class="card-body">   
                       
                  <form action="/update_profile" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="profile-pic">
                      <img id="avatar" src="{{ asset( auth()->user()->avatar) }}" alt="Avatar" class="avatar">
                      @if (auth()->user()->verification == 0)
                      <input type="file" name='avatar' id="avatar-input"  style="display: none;">
                      
                      <label for="avatar-input" class="change-avatar-button" >Change Profile Picture</label>
                      @endif
                    </div>
                    @if ($errors->any())
                        <div class="alert_d">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                          
                    <div class="form-group">
                      <label for="name" class="control-label">First Name</label>
                      <input id="name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ auth()->user()->first_name }}" required autocomplete="name" autofocus>
      
                      <x-input-error :messages="$errors->get('first_name')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />
                    </div>
                    <div class="form-group">
                      <label for="name" class="control-label">Middle Name</label>
                      <input id="name" type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ auth()->user()->middle_name ? auth()->user()->middle_name : ''}}"  autocomplete="name" autofocus>
      
                      @error('middle_name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="name" class="control-label">Last Name</label>
                      <input id="name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ auth()->user()->last_name }}" required autocomplete="name" autofocus>
      
                      <x-input-error :messages="$errors->get('last_name')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />
                    </div>
      
                    
      
                    <div class="form-group">
                      <label for="email" class="control-label">Email</label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ auth()->user()->email }}" required autocomplete="email">
      
                      <x-input-error :messages="$errors->get('email')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />
                    </div>
      
                    <div class="form-group">
                      <label for="phone_number" class="control-label">Phone Number</label>
                      <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ auth()->user()->phone_number }}" required autocomplete="phone_number">
      
                      <x-input-error :messages="$errors->get('phone_number')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />
                    </div>
                    <div class="form-group">
                      
                      <label for="date_of_birth" class="control-label">Date Of Birth</label>
                      <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ auth()->user()->date_of_birth }}" required autocomplete="date_of_birth">
                      <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />
                      @error('date_of_birth')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      <br>
                      <div class="form-group" >
                        <label for="" class="control-label">Address</label>
                        <div style="display: flex;">
                        <label for="street_name" class="control-label">Street Name</label>

                        <label for="city" class="control-label" style="margin-left:155px;">City</label>
                        <label for="area" class="control-label" style="margin-left:215px;">Area</label>
                        </div>
                        <div style="display: flex;">
                       

                        <input id="street_name" type="text" class="form-control @error('street_name') is-invalid @enderror" name="street_name" value="{{ auth()->user()->street_name }}" required autocomplete="street_name" style="margin-right: 3px;">
                         <x-input-error :messages="$errors->get('street_name')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />
                      
                          <select class="form-control form-control-lg" name="city" id="city"  style="margin-right: 3px;">
                            <option disabled>Select City</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}" @if ($city->city_name == old('city',auth()->user()->city)) selected @endif>{{ $city->city_name }}</option>
                            @endforeach
                        </select>
                        
                        <x-input-error :messages="$errors->get('city')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />
                        
                        <select class="form-control form-control-lg" id="area" name="area" style="margin-right: 3px;">
                            <option value="">Select area</option>
                            @foreach ($areas as $area)
                                <option value="{{ $area->id }}" @if ($area->area_name == old('area',auth()->user()->area)) selected @endif>{{ $area->area_name }}</option>
                            @endforeach
                        </select>
                        
                        <x-input-error :messages="$errors->get('area')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />
                        
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
                      @if (auth()->user()->verification == 0)
                      <div class="form-group">
                        <label for="document" class="form-label">Document</label>
                        <div class="file-upload">
                          <input type="file" class="file-input" name="document[]" multiple>
                          <img src="upload-icon.png" class="upload-icon">
                          <span class="file-name">Choose file(s)</span>
                        </div>
                        <x-input-error :messages="$errors->get('document')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />
                        </div> 
                          @else
                          <div class="form-group">
                            <label for="document" class="form-label">Document</label>
                           
                            <x-input-error :messages="$errors->get('document')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />
    
                          </div>
                      @endif
                      
                      
                      
                      
                        <div class="profile-field">
                          <div class="profile-document">
                              @php
                     
                              $image = explode('|',auth()->user()->document);
                              @endphp
                              @foreach ($image as $item) 
                             
                              <div class="profile-document-image"><img class="profile-document-image" src="{{ asset( URL::to($item)) }}" alt="document" class="document"></div>
              
                              @endforeach
                           
                          </div>
                      </div>
                     
                     
                    <div class="update">
                      <button type="submit" class="upbtn">Update</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <style>
                         
                    
          /* Style for the profile image */
          .profile-image {
            display: inline-block;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-color: #ccc;
            background-size: cover;
            background-position: center;
          }
    
         
    
          /* Style for the profile details */
          .profile-details {
            display: flex;
            flex-wrap: wrap;
            margin-top: 20px;
          }
    
          /* Style for the profile detail field */
          .profile-field {
            flex-basis: 50%;
            margin-bottom: 10px;
          }
    
         
    
    
          /* Style for the profile document */
          .profile-document {
            margin-top: 10px;
          }
    
          /* Style for the profile document image */
          .profile-document-image {
            display: inline-block;
            width: 100px;
            height: 100px;
            margin-right: 10px;
            background-color: #ccc;
            background-size: cover;
            background-position: center;
          }
    
          .form-group {
  margin-bottom: 20px;
}

.form-label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

.file-upload {
  position: relative;
  overflow: hidden;
  display: inline-block;
  width: 200px;
  height: 40px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.file-input {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  cursor: pointer;
}

.upload-icon {
  position: absolute;
  top: 10px;
  right: 10px;
  width: 20px;
  height: 20px;
}

.file-name {
  position: absolute;
  top: 10px;
  left: 10px;
  right: 40px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
        </style>
    @endauth
    <script>
      const avatarInput = document.getElementById('avatar-input');
const avatarImg = document.getElementById('avatar');

avatarInput.addEventListener('change', (event) => {
  const file = event.target.files[0];
  const reader = new FileReader();
  reader.onload = (e) => {
    avatarImg.src = e.target.result;
  };
  reader.readAsDataURL(file);
});
const fileInput = document.querySelector('.file-input');
const fileName = document.querySelector('.file-name');
fileInput.addEventListener('change', () => {
  fileName.textContent = fileInput.files.length > 1 ? `${fileInput.files.length} files selected` : fileInput.files[0].name;
});
    </script>
         <script>
          document.addEventListener("DOMContentLoaded", function(event) { 
              var scrollpos = localStorage.getItem('scrollpos');
              if (scrollpos) window.scrollTo(0, scrollpos);
          });
      
          window.onbeforeunload = function(e) {
              localStorage.setItem('scrollpos', window.scrollY);
          };
      </script>
</x-dashboardsidebar>
