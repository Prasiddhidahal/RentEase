<head>
  <link href="images/logo.png" rel="icon">
  {{-- flashmessage --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<x-dashboardsidebar>
    <ul>
      <li class="inside_dashboard">
        <a href="/dashboarduser" class="iconcontainer">
          <div class="icon-container">
            <i class='bx bxs-tachometer icons'></i>
            <span class="text"> Dashboard</span>
          </div>
        </a>
      </li>
      <li class="inside_dashboard">
        <a href="/allproperty" class="iconcontainer">
          <div class="icon-container">
            <i class='bx bxs-institution icons'></i>
            <span class="text"> All Property</span>
          </div>
        </a>
      </li>
      <li class="inside_dashboard">
        <a href="fav" class="iconcontainer">
          <div class="icon-container">
            <i class='bx bxs-heart icons'></i>
            <span class="text"> Favourites</span>
          </div>
        </a>
      </li>
      <li class="inside_dashboard">
        <a href="/property_manage" class="iconcontainer">
          <div class="icon-container">
            <i class='bx bxs-institution icons'></i>
            <span class="text"> Manage Property</span>
          </div>
        </a>
      </li>
      <li class="inside_dashboard">
        <a href="/request" class="iconcontainer">
          <div class="icon-container">
            <i class='bx bx-message-rounded icons'></i>
            <span class="text"> Request</span>
          </div>
        </a>
      </li>
      <li class="inside_dashboard">
        <a href="/2fa" class="iconcontainer">
          <div class="icon-container">
            <i class='bx bxl-google icons'></i>
            <span class="text"> Google Authentication</span>
          </div>
        </a>
      </li>
      <li class="inside_dashboard">
        <a href="/manage_profile" class="iconcontainer">
          <div class="icon-container">
            <i class='bx bx-user icons'></i>
            <span class="text"> Account</span>
          </div>
        </a>
      </li>
    </ul>
  </x-dashboardsidebar>
  
  <style>
    .inside_dashboard {
      display: inline-block;
      border: 2px solid #2eca6a;
      width: 300px;
      height: 150px;
      margin-bottom: 20px;
      margin-right: 20px;
      border-radius: 20px;
    }
  
    .inside_dashboard .iconcontainer {
      display: flex;
      height: 100%;
      justify-content: center;
      align-items: center;
      text-align: center;
      text-decoration: none;
      color: #2eca6a;
      border-radius:20px 
      
    }
  
    .icon-container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
  
    .icons {
      font-size: 2em;
      margin-bottom: 10px;
    }
  
    .icons .text {
      font-size: 25px;
    }
    .inside_dashboard:hover {
  background-color: #2eca6a;
}

.inside_dashboard:hover .iconcontainer {
  color: #fff;
}

.inside_dashboard:hover .iconcontainer .icons {
  color: #fff;
}

.inside_dashboard:hover .iconcontainer span {
  color: #fff;
}
    
  </style>
  