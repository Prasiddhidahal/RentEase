<head>
    {{-- flashmessage --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<x-adminDashboard>
  {{-- <x-flash-message/> --}}

    <ul>
        <li class="inside_dashboard">
          <a href="/admin/home" class="iconcontainer">
            <div class="icon-container">
              <i class='bx bxs-tachometer icons'></i>
              <span class="text"> Dashboard</span>
            </div>
          </a>
        </li>
        <li class="inside_dashboard">
          <a href="/admin/allproperty" class="iconcontainer">
            <div class="icon-container">
              <i class='bx bxs-institution icons'></i>
              <span class="text"> All Property</span>
            </div>
          </a>
        </li>
        
        <li class="inside_dashboard">
          <a href="/admin/property_manage" class="iconcontainer">
            <div class="icon-container">
              <i class='bx bxs-institution icons'></i>
              <span class="text"> Manage Property</span>
            </div>
          </a>
        </li>
        <li class="inside_dashboard">
          <a href="/admin/verify" class="iconcontainer">
            <div class="icon-container">
              <i class='bx bx-user-check icons'></i>
              <span class="text"> Verify User</span>
            </div>
          </a>
        </li>
        
        <li class="inside_dashboard">
          <a href="/admin/user_manage" class="iconcontainer">
            <div class="icon-container">
              <i class='bx bx-user icons'></i>
              <span class="text"> Manage User</span>
            </div>
          </a>
        </li>
        <li class="inside_dashboard">
          <a href="/admin/user_home" class="iconcontainer">
            <div class="icon-container">
              <i class='bx bxs-home icons'></i>
              <span class="text"> User Home</span>
            </div>
          </a>
        </li>
      </ul>
 
    
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
    <script>
      @if(Session::has('message'))
        toaster.success('{{session('success')}}')
      @endif
    </script>
</x-adminDashboard>