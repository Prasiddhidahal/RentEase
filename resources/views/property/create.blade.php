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
        <!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

<!-- Leaflet JavaScript -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
</head>
<body style="background-color: #eee;">
@include('components.layout')

<section style="margin-top:100px" >
  <div class="container py-5 h-200">
    <div class="row justify-content-center align-items-center h-200">
      <div class="">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px; width:1200px">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" style="margin-left:450px;" >Create Property</h3>
            <form method="POST" action="/property" enctype="multipart/form-data">
              @csrf
              {{-- type of sale --}}

              <div class="row">
                <div class="col-xl mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="type_of_sale">Type of Sale <span style="color:red">*</span> </label>
                    <div class="sale_type_details">
                      <input type="radio" name="sale_type" value="Sale" id="dot-11">
                      <input type="radio" name="sale_type" value="Rent" id="dot-12">

                      <div class="category">
                        <label for="dot-11">
                        <span class="dot eleven"></span>
                        <span class="sale_type">Sale</span>
                      </label>
                      <label for="dot-12">
                        <span class="dot twelve"></span>
                        <span class="sale_type">Rent</span>
                      </label>

                      </div>
                    </div>
                    <x-input-error :messages="$errors->get('sale_type')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />


                  </div>

                </div>
              </div>
              {{-- type of property  --}}
              <div class="row">
                <div class="col-xl mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="type_of_property">Type of Property <span style="color:red">*</span> </label>
                    <div class="type_of_property_details">
                      <input type="radio" name="type_of_property" value="Residential" id="dot-9">
                      <input type="radio" name="type_of_property" value="Agriculture" id="dot-10">
                      <div class="category">
                        <label for="dot-9">
                        <span class="dot nine"></span>
                        <span class="type_of_property">Residential</span>
                      </label>
                      <label for="dot-10">
                        <span class="dot ten"></span>
                        <span class="type_of_property">Agriculture</span>
                      </label>

                      </div>
                    </div>
                    <x-input-error :messages="$errors->get('type_of_property')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />

                  </div>

                </div>
              </div>
              {{-- category of property --}}
              <div class="row">
                <div class="col-xl mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="category_of_property">Category of Property <span style="color:red">*</span> </label>


             <div class="category_of_property_details">
                    <input type="radio" name="category_of_property" value="House" id="dot-4">
                    <input type="radio" name="category_of_property" value="Land" id="dot-5">
                    <input type="radio" name="category_of_property" value="Flat" id="dot-6">
                    <input type="radio" name="category_of_property" value="Apartment" id="dot-7">
                    <input type="radio" name="category_of_property" value="Hostel" id="dot-8">

                    <div class="category">
                        <label for="dot-4">
                            <span class="dot four"></span>
                            <span class="category_of_property">House</span>
                          </label>

                      <label for="dot-5">
                        <span class="dot five"></span>
                        <span class="category_of_property">Land</span>
                      </label>
                      <label for="dot-6">
                      <span class="dot six"></span>
                      <span class="category_of_property">Flat</span>
                    </label>
                    <label for="dot-7">
                      <span class="dot seven"></span>
                      <span class="category_of_property">Apartment</span>
                    </label>
                    <label for="dot-8">
                      <span class="dot eight"></span>
                      <span class="category_of_property">Hostel</span>
                      </label>


                    </div>
                  </div>
                  <x-input-error :messages="$errors->get('category_of_property')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />

                  </div>

                </div>
              </div>
               {{-- address --}}
   <div class="row">
    <div class="col-xl mb-4">

      <div class="form-outline">
        <label class="form-label" for="address">Address <span style="color:red">*</span></label>
        {{-- street name --}}
        <input id="street_name" type="text" placeholder="Street Name" class="form-control form-control-lg @error('street_name') is-invalid @enderror" name="street_name" value="{{ old('street_name') }}" required autocomplete="street_name" autofocus/>

        <x-input-error :messages="$errors->get('street_name')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />

      </div>

    </div>
    {{-- city --}}
    <div class="col-xl mb-4">

      <div class="form-outline">
        <select class="form-control form-control-lg" name="city" id="city" style="margin-top: 30px;">
          <option selected disabled>Select City </option>
          @foreach ($cities as $city)
          <option value="{{ $city->id }}">{{ $city->city_name }}</option>
          @endforeach
      </select>



          <x-input-error :messages="$errors->get('city')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />

      </div>

    </div>
    {{-- area  --}}
    <div class="col-xl mb-4">

      <div class="form-outline">
        {{-- <select class="form-control form-control-lg" id="area" name="area" style="margin-top: 30px;"></select> --}}
        <select class="form-control form-control-lg" id="area" name="area" style="margin-top: 30px;">
          <option value="">Select area</option>
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
  </div>
              {{-- area detail --}}
              <div class="row">
                <div class="col-xl mb-4">
                {{-- Total area detail --}}
                  <div class="form-outline">
                    <label class="form-label" for="total_area">Total Area <span style="color:red">*</span> </label>
                    <input id="total_area" type="text" class="form-control form-control-lg @error('total_area') is-invalid @enderror" name="total_area" value="{{ old('total_area') }}" required autocomplete="total_area" autofocus/>
                    <x-input-error :messages="$errors->get('total_area')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />

                  </div>

                </div>
                <div class="col-xl mb-4">

                  <div class="form-outline">


                    <select class="form-control form-control-lg" name="total_area_type" style="margin-top: 30px;">

                      <option  value="Sq.Feet">Sq.Feet</option>
                      <option  value="Sq.Meter">Sq.Meter</option>
                      <option  value="Ropani">Ropani</option>
                      <option  value="Aana" selected>Aana</option>
                      <option  value="Paisa">Paisa</option>
                      <option  value="Daam">Daam</option>
                      <option  value="Bigha">Bigha</option>
                      <option  value="Kattha">Kattha</option>
                      <option  value="Dhar">Dhar</option>
                      <option  value="Haat">Haat</option>
                      <option  value="Acres">Acres</option>
                      </select>


                  </div>

                </div>
                {{-- built area detail --}}
                <div class="col-xl mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="built_area">Built Up Area </label>
                    <input id="built_area" type="text" class="form-control form-control-lg @error('built_area') is-invalid @enderror" name="built_area" value="{{ old('built_area') }}" autocomplete="built_area" autofocus/>

                    <x-input-error :messages="$errors->get('built_area')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />

                  </div>

                </div>
                <div class="col-xl mb-4">

                  <div class="form-outline">

                    <select class="form-control form-control-lg" name="built_area_type"  style="margin-top: 30px;">

                      <option  value="Sq.Feet">Sq.Feet</option>
                      <option  value="Sq.Meter">Sq.Meter</option>
                      <option  value="Ropani">Ropani</option>
                      <option  value="Aana" selected>Aana</option>
                      <option  value="Paisa">Paisa</option>
                      <option  value="Daam">Daam</option>
                      <option  value="Bigha">Bigha</option>
                      <option  value="Kattha">Kattha</option>
                      <option  value="Dhar">Dhar</option>
                      <option  value="Haat">Haat</option>
                      <option  value="Acres">Acres</option>
                      </select>



                  </div>

                </div>
              </div>
              {{-- property facing  --}}
              <div class="row">
                <div class="col-xl mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="property_facing">Property Facing <span style="color:red">*</span> </label>
                    <select class="form-control form-control-lg" name="property_facing">

                      <option  value="East " selected>East </option>
                      <option  value="West ">West </option>
                      <option  value="North ">North </option>
                      <option  value="South ">South </option>
                      <option  value="South-East">South-East</option>
                      <option  value="South-West">South-West</option>
                      <option  value="North-East">North-East</option>
                      <option  value="North-West">North-West</option>
                      </select>

                      <x-input-error :messages="$errors->get('property_facing')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />

                  </div>

                </div>


              </div>
              {{-- Road detail --}}
              <div class="row">
                <div class="col-xl mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="road_size">Road Detail <span style="color:red">*</span></label>
                    <input id="road_size" type="text" class="form-control form-control-lg @error('road_size') is-invalid @enderror" name="road_size" value="{{ old('road_size') }}"  autocomplete="road_size" autofocus/>

                    <x-input-error :messages="$errors->get('road_size')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />

                  </div>

                </div>
                <div class="col-xl mb-4">

                  <div class="form-outline">

                    <select class="form-control form-control-lg" name="road_size_type"  style="margin-top: 30px" >
                      <option value="" disabled selected hidden>Select length type</option>
                      <option  value="Feet" selected>Feet</option>
                      <option  value="Meter">Meter</option>

                      </select>
                  </div>

                </div>
                <div class="col-xl mb-4">

                  <div class="form-outline">

                    <select class="form-control form-control-lg" name="road_type" style="margin-top: 30px">
                      <option value="" disabled selected hidden>Road Type</option>
                      <option  value="Soil Stabilized">Soil Stabilized</option>
                      <option  value="Graveled">Graveled</option>
                      <option  value="Paved">Paved</option>
                      <option  value="Blacktopped">Blacktopped</option>
                      <option  value="Alley">Alley</option>

                      </select>
                      <x-input-error :messages="$errors->get('road_type')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />

                  </div>

                </div>
              </div>
              {{-- Building detail --}}
              <div class="row">
                <div class="col-xl mb-4">

                  <div class="form-outline">
                    <label class="form-label"  for="bulid_year">Building Detail </label>
                    <select class="form-control form-control-lg"id="build_year"  name="build_year">
                      <option disabled selected hidden>Built Year</option>

                      </select>
                      <script>

                        let dateDropdown = document.getElementById('build_year');

                        let currentYear = new Date().getFullYear();
                        let earliestYear = 1700;
                        while (currentYear >= earliestYear) {
                          let dateOption = document.createElement('option');
                          dateOption.text = currentYear;
                          dateOption.value = currentYear;

                          dateDropdown.add(dateOption);
                          currentYear -= 1;
                        }
                      </script>



                  </div>


                </div>
                <div class="col-xl mb-4">

                  <div class="form-outline">

                    <select class="form-control form-control-lg"name="total_floor" style="margin-top: 30px;">
                      <option value="" disabled selected hidden>Total Storey</option>
                      @for($x=1;$x<=20;$x++)
                        <option  value="{{$x}}" >{{$x}}</option>

                        @endfor
                      </select>



                  </div>

                </div>
                <div class="col-xl mb-4">

                  <div class="form-outline">

                    <select class="form-control form-control-lg" name="furnishing" style="margin-top: 30px;">
                      <option value="" disabled selected hidden>Furnishing</option>
                      <option  value="Full Furnished">Full Furnished</option>
                      <option  value="Semi Furnished">Semi Furnished</option>
                      <option   value="Unfurnished">Unfurnished</option>
                      </select>


                  </div>

                </div>
              </div>
              {{-- kitchen  --}}
              <div class="row">
                <div class="col-xl mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="kitchen">Kitchen</label>
                    <select class="form-control form-control-lg"name="kitchen" style=" width:300px">
                      <option value="" disabled selected hidden>Total kitchen</option>
                      @for($x=0;$x<=20;$x++)
                      <option  value="{{$x}}">{{$x}}</option>

                      @endfor
                      </select>

                  </div>

                </div>
              </div>
              {{-- bed room  --}}
              <div class="row">
                <div class="col-xl mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="bed_room">Bedroom</label>
                    <select class="form-control form-control-lg"name="bed_room" style=" width:300px">
                      <option value="" disabled selected hidden>Total Bedroom</option>
                      @for($x=0;$x<=20;$x++)
                      <option  value="{{$x}}">{{$x}}</option>

                      @endfor
                      </select>

                  </div>

                </div>
              </div>
              {{-- bath room  --}}
              <div class="row">
                <div class="col-xl mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="bath_room">Bathroom </label>
                    <select class="form-control form-control-lg"name="bath_room" style=" width:300px">
                      <option value="" disabled selected hidden>Total Bathroom</option>
                      @for($x=0;$x<=20;$x++)
                      <option  value="{{$x}}" >{{$x}}</option>

                      @endfor
                      </select>

                  </div>

                </div>
              </div>
              {{-- living room  --}}
              <div class="row">
                <div class="col-xl mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="living_room">Living Room </label>
                    <select class="form-control form-control-lg"name="living_room" style=" width:300px">
                      <option value="" disabled selected hidden>Total Living Room</option>
                      @for($x=0;$x<=20;$x++)
                      <option  value="{{$x}}" >{{$x}}</option>

                      @endfor
                      </select>

                  </div>

                </div>
              </div>
              {{-- parking  --}}
              <div class="row">
                <div class="col-xl mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="parking">Parking</label>
                    <select class="form-control form-control-lg" name="parking" style=" width:300px">
                      <option value="" disabled selected hidden>Total Parking</option>
                      @for($x=0;$x<=20;$x++)
                      <option  value="{{$x}}" >{{$x}}</option>

                      @endfor
                      </select>

                  </div>

                </div>
              </div>
              {{-- Amenities --}}
              <div class="row">
                <div class="col-xl mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="amenities">Amenities</label><br>

                  @foreach(['Lawn', 'Drainage', 'Jacuzzi', 'CCTV', 'Garden', 'Lift', 'Garage', 'Parking', 'Air Condition', 'Balcony', 'Deck', 'Fencing', 'Water Supply', 'Gym', 'Microwave', 'Internet', 'Wifi','Intercom','Solar Water','Well Water','Water Tank','Store room','TV Cable','Swimming pool','Modular Kitchen','Washing Machine','Sun Room','Outdoor Kitchen','Power Backup','Bar'] as $amenity)
    <div class="form-check form-check-inline">
        <input class="form-check-input" name="amenities[]" type="checkbox" id="{{ $amenity }}" value="{{ $amenity }}">
        <label class="form-check-label" id="label" for="{{ $amenity }}">{{ $amenity }}</label>
    </div>
@endforeach



                    <style>
                      input[type='checkbox']{
                        display: none;
                      }
                      #label{
                        position: relative;
                        color: #01cc65;
                        font-size: 14px;
                        line-height: 17px;
                        border: 2px solid #01cc65;
                        padding: 10px;
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        cursor: pointer;
                        font-weight: 700;
                        border-radius: 10px;
                        height: 40px;
                        width: 155px;
                        margin-bottom: 10px;
                        margin-left: 10px;
                      }

input[type="checkbox"]:checked + #label {
  background-color: #01cc65;
  color: white;
}

                      </style>



                  </div>

                </div>
              </div>
              {{-- property photo  --}}
              <div class="row">
                <div class="col-xl mb-4">

                  <div class="form-outline">
                    <label for="property_photo" class="inline-block text-lg mb-2">
                      Property Pictures <span style="color:red">*</span>
                  </label>
                  <input type="file" class="form-control form-control-lg"  name="property_photo[]" multiple >

                  <x-input-error :messages="$errors->get('property_photo')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />
                  </div>

                </div>
              </div>
              {{-- property title  --}}
              <div class="row">
                <div class="col-xl mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="title">Property Title <span style="color:red">*</span></label>
                    <input id="title" type="text" class="form-control form-control-lg @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus/>

                    <x-input-error :messages="$errors->get('title')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />
                  </div>

                </div>
              </div>
              {{-- property description  --}}
              <div class="row">
                <div class="col-xl mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="description">Property Description <span style="color:red">*</span></label>
                    <input id="description" type="text" class="form-control form-control-lg @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus/>

                    <x-input-error :messages="$errors->get('description')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />
                  </div>

                </div>
              </div>
              {{-- price --}}
              <div class="row">
                <div class="col-xl mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="price">Price <span style="color:red">*</span></label>
                    <input id="price" type="text" class="form-control form-control-lg @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus/>

                    <x-input-error :messages="$errors->get('price')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />
                  </div>

                </div>
                <div class="col-xl mb-4">

                  <div class="form-outline">

                    <select class="form-control form-control-lg" name="price_label" style="margin-top: 30px;">
                      <option value="" disabled selected hidden>Price label</option>
                      <option  value="Per Month">Per Month</option>
                      <option  value="Per Sq.Feet">Per Sq.Feet</option>
                      <option  value="Per Sq.Meter">Per Sq.Meter</option>
                      <option  value="Per Ropani">Per Ropani</option>
                      <option  value="Per Aana">Per Aana</option>
                      <option  value="Per Paisa">Per Paisa</option>
                      <option  value="Per Daam">Per Daam</option>
                      <option  value="Per Bigha">Per Bigha</option>
                      <option  value="Per Kattha">Per Kattha</option>
                      <option  value="Per Dhar">Per Dhar</option>
                      <option  value="Per Haat">Per Haat</option>
                      <option  value="Per Acres">Per Acres</option>
                      </select>

                      <x-input-error :messages="$errors->get('price_label')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />

                  </div>

                </div>
              </div>
              <hr>


              {{-- longitude&latitude --}}
              <!-- <h6 >Please enter the longitude and latitude of your property from google map  </h6><br>
              <div class="row">
                <div class="col-xl mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="latitude">Latitude <span style="color:red">*</span></label>
                    <input id="latitude" type="text" class="form-control form-control-lg @error('latitude') is-invalid @enderror" name="latitude" value="{{ old('latitude') }}" required autocomplete="latitude" autofocus/>

                    <x-input-error :messages="$errors->get('latitude')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />
                  </div>

                </div>
                <div class="col-xl mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="longitude">Longitude <span style="color:red">*</span></label>
                    <input id="longitude" type="text" class="form-control form-control-lg @error('longitude') is-invalid @enderror" name="longitude" value="{{ old('longitude') }}" required autocomplete="longitude" autofocus/>

                    <x-input-error :messages="$errors->get('longitude')" class="mt-2" style="background-color: rgb(210, 127, 127);border-radius:10px; padding:20px;" />
                  </div>

                </div> -->
                <h6>Please select your location and enter the url from Google Maps in below field to get the longitude and latitude of your property </h6>
                <br>
                <!-- Input field for Google Maps URL -->
                <div class="form-outline">
                    <label class="form-label" for="googleMapsURL">Google Maps URL</label>
                    <input id="googleMapsURL" type="text" class="form-control" placeholder="Enter Google Maps URL"/>
                </div>

                <!-- Button to extract coordinates -->
                <button id="extractCoordinatesButton" class="btn btn-primary mt-3">Extract Coordinates</button>
                <br>
                <br>
                <div class="row">
                    <div class="col-xl mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="latitude">Latitude <span style="color:red">*</span></label>
                            <input id="latitude" type="text" class="form-control form-control-lg" name="latitude" required autocomplete="latitude" autofocus/>
                        </div>
                    </div>
                    <div class="col-xl mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="longitude">Longitude <span style="color:red">*</span></label>
                            <input id="longitude" type="text" class="form-control form-control-lg" name="longitude" required autocomplete="longitude" autofocus/>
                        </div>
                    </div>
                </div>



                <!-- Script to extract coordinates from the Google Maps URL -->
                <script>
                    document.getElementById('extractCoordinatesButton').addEventListener('click', function() {
                        event.preventDefault();
                        const googleMapsURL = document.getElementById('googleMapsURL').value;

                        // Regular expression to match latitude and longitude in the URL
                        const regex = /@([-+]?\d+\.\d+),([-+]?\d+\.\d+)/;
                        const match = googleMapsURL.match(regex);

                        if (match && match.length === 3) {
                            const latitude = match[1];
                            const longitude = match[2];

                            // Populate the latitude and longitude fields
                            document.getElementById('latitude').value = latitude;
                            document.getElementById('longitude').value = longitude;
                        } else {
                            alert('Invalid URL or URL format not recognized.');
                        }
                    });
    </script>





              </div>
              <div class="text-center pt-1 mb-1 pb-1">
                <button class="btn btn-primary btn-block  fa-lg gradient-custom-2 mb-3" style="height:50px" type="submit">Create Property</button>


              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



  <!--/ footer Star /-->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Broker Free</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                Broker Free is a property rental web app that revolutionizes the rental experience by eliminating the need
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
