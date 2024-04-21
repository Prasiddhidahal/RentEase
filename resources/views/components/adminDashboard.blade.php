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

      
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>

<body>
  <x-flash-message/>
 
  {{-- @include('flash-message') --}}
  <nav class=navbar>
    <div class="sidebar-top">
      <span class="shrink-btn">
        <i class='bx bx-chevron-left'></i>
      </span>
      <a href="/admin/home"><img src="/images/logo.png" class="logo" alt="" ></a>
      <a href="/admin/home"> <h3 id='broker'class="hide">RentEase</h3></a>
    </div>

    <div class="search" hidden>
      <i class='bx bx-search'></i>
      <input type="text" class="hide" placeholder="Quick Search ..." >
    </div>

    <div class="sidebar-links">
      <ul>
        <div class="active-tab"></div>
        <li class="tooltip-element" data-tooltip="0">
          <a href="/admin/home" id='dashboard'class="active" data-active="0">
            <div class="icon">
              <i class='bx bx-tachometer'></i>
              <i class='bx bxs-tachometer'></i>
            </div>
            <span class="link hide">Dashboard</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="1">
          <a href="/admin/user_manage" id='user_manage' data-active="1" >
            <div class="icon">
              <i class='bx bx-user'></i>
              <i class='bx bxs-user'></i>
            </div>
            <span class="link hide">Manage Users</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="2">
          <a href="/admin/property_manage" id='property_manage' data-active="2">
            <div class="icon">
                <i class='bx bxs-institution'></i>
                <i class='bx bxs-institution'></i>
            </div>
            <span class="link hide">Manage Properties</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="3">
          <a href="/admin/verify" id="verify" data-active="3">
            <div class="icon">
              <i class='bx bx-user-check'></i>
              <i class='bx bxs-user-check'></i>
              
            </div>
            <span class="link hide">Verify User</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="4">
          <a  id="user_home" href="/admin/user_home">
            <div class="icon">
              <i class='bx bx-home'></i>
              <i class='bx bxs-home'></i>
              
            </div>
            <span class="link hide">User Home</span>
          </a>
        </li>
       
        <div class="tooltip">
          <span class="show">Dashboard</span>
          <span>Manage Users</span>
          <span>Manage Property</span>
          <span>Verify User</span>
          <span>User Home</span>

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
            <h3>{{Auth::guard('admin')->user()->name}}</h3>
            <h5>Admin</h5>
          </div>
        </div>
        <form class="inline" method="POST" action="/logout/user">
            @csrf
            <button type="submit" class="log-out">
                <i class='bx bx-log-out'></i>
            </button>
            </form>
       
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

  <script src="\js\admin\adminDashboard.js"></script>
</body>

</html>