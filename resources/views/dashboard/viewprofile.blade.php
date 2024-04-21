{{-- flashmessage --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<x-dashboardsidebar>
    @auth
    <style>
        /* Style for the profile container */
        .profile-container {
          margin: 20px auto;
          max-width: 800px;
          background-color: #fff;
          border-radius: 20px;
          padding: 20px;
        }
  
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
  
        /* Style for the profile name */
        .profile-name {
          font-size: 2em;
          margin: 10px 0;
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
  
        /* Style for the profile label */
        .profile-label {
          font-weight: bold;
          display: block;
        }
  
        /* Style for the profile value */
        .profile-value {
          margin-left: 10px;
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
  
        /* Style for the profile phone */
        .profile-phone {
          display: flex;
          align-items: center;
        }
  
        /* Style for the profile phone icon */
        .profile-phone i {
          margin-right: 10px;
        }
      </style>
    </head>
    <body>
      <div class="profile-container">
        <div > <img class="profile-image" src="{{ asset( auth()->user()->avatar) }}" alt="Avatar" class="avatar"></div>
        <div class="profile-name">{{ auth()->user()->first_name }} {{ auth()->user()->middle_name }} {{ auth()->user()->last_name }}</div>
        <div class="profile-details">
          <div class="profile-field">
            <label class="profile-label">First Name:</label>
            <span class="profile-value">{{ auth()->user()->first_name }}</span>
          </div>
          <div class="profile-field">
            <label class="profile-label">Middle Name:</label>
            <span class="profile-value">{{ auth()->user()->middle_name ? auth()->user()->middle_name : '-'  }}</span>
          </div>
          <div class="profile-field">
            <label class="profile-label">Last Name:</label>
            <span class="profile-value">{{ auth()->user()->last_name }}</span>
          </div>
          <div class="profile-field">
            <label class="profile-label">User name:</label>
            <span class="profile-value">{{ auth()->user()->user_name }}</span>
          </div>
          
          <div class="profile-field">
            <label class="profile-label">Document:</label>
            <div class="profile-document">
                @php
       
                $image = explode('|',auth()->user()->document);
                @endphp
                @foreach ($image as $item) 
               
                <div class="profile-document-image"><img class="profile-document-image" src="{{ asset( URL::to($item)) }}" alt="document" class="document"></div>

                @endforeach
              {{-- <div class="profile-document-image">{{ auth()->user()->document[1] }}</div> --}}
            </div>
          </div>
          <div class="profile-field">
            <label class="profile-label">Date of Birth:</label>
            <span class="profile-value">{{ auth()->user()->date_of_birth }}</span>
          </div>
          <div class="profile-field">
            <label class="profile-label">Address:</label>
            <span class="profile-value">{{ auth()->user()->street_name }},{{ auth()->user()->city }},{{ auth()->user()->area }}</span>
          </div>
          <div class="profile-field">
            <label class="profile-label">Phone:</label>
            <div class="profile-phone">
              <i class="fas fa-phone"></i>
              <span class="profile-value">{{ auth()->user()->phone_number }}</span>
            </div>
          </div>
          <div class="profile-field">
            <label class="profile-label">Email:</label>
            <span class="profile-value">{{ auth()->user()->email }}</span>
          </div>
        
          <div class="profile-field">
            <label class="profile-label">Total Property:</label>
            <span class="profile-value">{{ App\Models\Property_detail::where('user_id',auth()->user()->id)->count() }}</span>
          </div>
          <div class="profile-field">
            <label class="profile-label">Total Liked Property:</label>
            <span class="profile-value">{{  App\Models\Customer_property_fav::where('user_id',auth()->user()->id)->count() }}</span>
          </div>
          <div class="profile-field">
            <label class="profile-label">Verification:</label>
            <span class="profile-value">@if(auth()->user()->verification==0)
              <span style="color:rgb(244, 168, 27)"><i class='bx bx-question-mark'  style="font-size: 20px; ">Pending</i> <span>
          @elseif(auth()->user()->verification==1)
          <span style="color:rgb(54, 209, 2)"><i class='bx bxs-user-check' style="font-size: 20px; "> Verified</i> <span>
          @elseif(auth()->user()->verification==2)
          <span style="color:rgb(244, 27, 27)"><i class='bx bx-error-circle' style="font-size: 18px; "> Not Verified</i> <span>
          @endif</span>
          </div>
        </div>
      </div>
@endauth
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