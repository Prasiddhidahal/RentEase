<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RentEase</title>
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="/css/dashboardsidebar.css">

  <link href="images/logo.png" rel="icon">
</head>

<body>
  <x-flash-message/>
  
  {{-- @include('components.navbar') --}}
  <nav class="navbar">
    <div class="sidebar-top">
      <span class="shrink-btn">
        <i class='bx bx-chevron-left'></i>
      </span>
      <a href="/home"><img src="/images/logo.png" class="logo" alt="" ></a>
      <a href="/home"> <h3 id='broker'class="hide">RentEase</h3></a>
    </div>

    <div class="search" hidden>
      <i class='bx bx-search'></i>
      <input type="text" class="hide" placeholder="Quick Search ..." >
    </div>

    <div class="sidebar-links">
      <ul>
        <div class="active-tab"></div>
        <li class="tooltip-element" data-tooltip="0">
          <a href="/dashboarduser" id='dashboard'class="active" data-active="0">
            <div class="icon">
              <i class='bx bx-tachometer'></i>
              <i class='bx bxs-tachometer'></i>
            </div>
            <span class="link hide">Dashboard</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="1">
          <a href="/2fa" id='2fa' data-active="1" >
            <div class="icon">
                <i class='bx bxl-google'></i>
                <i class='bx bxl-google'></i>
            </div>
            <span class="link hide">Google Authentication</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="2">
          <a href="/property_manage" id='property_manage' data-active="2">
            <div class="icon">
                <i class='bx bxs-institution'></i>
                <i class='bx bxs-institution'></i>
            </div>
            <span class="link hide">Manage Property</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="3">
          <a href="fav" id="fav" data-active="3">
            <div class="icon">
              <i class='bx bx-heart'></i>
              <i class='bx bxs-heart'></i>
            </div>
            <span class="link hide">Favourites</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="4">
          <a href="/request" id='message_request' data-active="4">
            <div class="icon">
              <i class='bx bx-message-rounded'></i>
              <i class='bx bx-message-rounded'></i>
            </div>
            <span class="link hide">Message Request</span>
          </a>
        </li>
        <div class="tooltip">
          <span class="show">Dashboard</span>
          <span>Google Authentication</span>
          <span>Manage Property</span>
          <span>Favourites</span>
          <span>>Message Request</span>

        </div>
      </ul>

      <h4 class="hide">Shortcuts</h4>

      <ul>
        <li class="tooltip-element" data-tooltip="0">
          <a href="/profile" id='profile' data-active="4">
            <div class="icon">
              <i class='bx bxs-user-detail'></i>
              <i class='bx bxs-user-detail'></i>
            </div>
            <span class="link hide">Profile</span>
          </a>
        </li>
       
        <li class="tooltip-element" data-tooltip="2">
          <a href="/manage_profile" id='account' data-active="6">
            <div class="icon">
                <i class='bx bx-user' ></i>
                <i class='bx bx-user' ></i>
            </div>
            <span class="link hide">Account</span>
          </a>
        </li>
        <div class="tooltip">
          <span class="show">Profile</span>
          
          <span>Account</span>
        </div>
      </ul>
    </div>

    <div class="sidebar-footer">
      <a href="#" class="account tooltip-element" data-tooltip="0">
        <i class='bx bx-user'></i>
      </a>
      <div class="user-user tooltip-element" data-tooltip="1">
        <div class="user-profile hide">
          {{-- <img src="./img/face-1.png" alt=""> --}}
          <div class="user-info">
            <h3>{{auth()->user()->name}}</h3>
            <h5>User</h5>
          </div>
        </div>
        <form class="inline" method="POST" action="/logout/user">
            @csrf
            <button type="submit" class="log-out">
                <i class='bx bx-log-out'></i>
            </button>
            </form>
  <x-flash-message/>
       
      </div>
      <div class="tooltip">
        <span class="show">John Doe</span>
        <span>Logout</span>
      </div>
    </div>
  </nav>
 
  <main>
    {{$slot}}
  </main>

  <script src="js/dashboardsidebar.js"></script>
</body>

</html>