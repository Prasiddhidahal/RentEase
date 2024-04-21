<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="img/logo.png" rel="icon">
        <link rel="stylesheet" href="/css/main.css">
        <title>RentEase</title>
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
      



    </head>
    <body>
<!--/ Nav Star /-->
<x-flash-message/>
<style>
   .login-btn{
    border: 2px solid #3cce74;
background-color: #3cce74;
color:  white;
border-radius:10px;
margin-left: 2px;
margin-right: 2px;
padding: 10px;
margin-top: -2px;
font-weight: 500;
margin-bottom: 2px;
}
.post-ppt-btn{
	background-color:#3cce74;
	color: white;
	border: 2px solid #3cce74;
border-radius:10px;
margin-left: 2px;
margin-right: 2px;
padding: 10px;
margin-top: -2px;
margin-bottom: 2px;
font-weight: 500;
}
.login-btn:hover{
	background-color:white;
	color:#3cce74;
	border: 2px solid #3cce74;
	transition: 0.7s;
}
.post-ppt-btn:hover{
	background-color:white;
	color:#3cce74;
	border: 2px solid #3cce74;
	transition: 0.7s;
}
.post-ppt-btn a:hover{

	color:#3cce74;
	transition: 0.7s;
}
.user-btn{
	background-color: white;
	color:  #3cce74;
	border:2px solid #3cce74;
	border-radius:10px;
	margin-left: 2px;
	margin-right: 2px;
	padding: 10px;
	margin-top: -2px;
	margin-bottom: 2px;
    font-weight: 500;
	}
.user-btn:hover{
	background-color:#3cce74;
	color: white;
	transition: 0.7s;
}
.user-btn a:hover{
	background-color:#3cce74;
	color: white;
	transition: 0.7s;
}

.nav-item {
  position: relative;
}

.drop_down {
  display: none;
  position: absolute;
  max-height: 500px;
   height: auto;
  top: 100%;
  left: -170px;
  min-width: 390px;
  padding: 15px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
 
}
.nav-item:hover .drop_down,
.nav-item:focus-within .drop_down {
  display: block;
 
}
.nav-item:hover .bxs-bell{
  color: #3cce74;
}
.bxs-bell{
  margin-top: 8px;
}
.notify_item {
  display: flex;
  margin-bottom: 10px;
  border-bottom: 1px solid #6c757d;
  justify-content: space-between;
}
.notify_item:last-child{
  border-bottom: none;
}

.notify_img {
  margin-right: 10px;
}

.notify_info {
  display: flex;
  flex-direction: column;
}

.notify_info p {
  margin: 0;
  font-weight: bold;
}

.notify_info p span {
  color: #3cce74;
}

.notify_time {
  font-size: 12px;
  color: #6c757d;
}
.noti_delete{
  color: red;
  font-size: 15px;
  border: none;
  background: transparent;
}
  .nav-item i {
  position: relative;
}

.nav-item i span {
  position: absolute;
  top: -9px;
  right: -2px;
}




    </style>
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="/">RentEase<span class="color-b"></span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          @auth
          <li class="nav-item">
            <a class="nav-link active" id="home" href="/home">Home</a>
          </li> 
          @endauth
          @guest
          <li class="nav-item">
            <a class="nav-link active" id="home" href="/">Home</a>
          </li>
         @endguest
          <li class="nav-item">
            <a class="nav-link" id="about" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="property" href="/allproperty">Property</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="rent" href="/chatify">Chat</a>
          </li>
           @auth
            <li >
                <button type="button" class="post-ppt-btn"> <a href="/property/create/" >Post a Property</a></button>
            </li> 
            <li >
                <a href="/dashboarduser" >
                <button type="button" class="user-btn" >
                    {{auth()->user()->first_name}}
                    </button>
                </a>
            </li> 
           
            <li class="nav-item"> <i class='bx bxs-bell'  style="font-size:30px;">      
              {{-- <i class='fa fa-bell' style="font-size:30px; ">  --}}
              @if(auth()->user()->unreadNotifications->count())
              <span class="badge badge-light" style="font-size:10px; background-color:#3cce74;">{{auth()->user()->unreadNotifications->count()}}</span> 
              @endif
            {{-- </i> --}}
          </i>    
             <ul class="drop_down"style=" padding:10px; overflow: auto;
             flex: 1 1 auto;
             scrollbar-width: none; /* Firefox */
       -ms-overflow-style: none; /* Internet Explorer and Edge */">
             <style>
               .container::-webkit-scrollbar {
                display: none;
               }
               </style>
               <li style='margin-bottom:10px;'><a href="{{route('notifications.markasread')}}"style="color:#3cce74;font-size:15px">Mark All As Read</a></li>
              @forelse(auth()->user()->notifications as $notification)

              {{-- Liked --}}
              @if($notification->type == 'App\Notifications\LikeNotification')
              {{-- unread --}}
              @if ($notification->read_at==NULL)
              <li class="notify_item" style="background-color: #ccc">
                <div class="notify_img">
                  <img src="{{asset($notification->data['user_pic'])}}" alt="profile_picture" style="width: 50px">
                </div>
                <div class="notify_info" style="display: inline-block; vertical-align: top;">
                  <p><span>{{$notification->data['user_name']}} </span> liked your property {{$notification->data['property_name']}}</p>
                  @php
                  // Assuming $record is your database record
                  $createdAt = \Carbon\Carbon::parse($notification->created_at);
                  $timeElapsed = $createdAt->diffForHumans();
                  @endphp
                  <span class="notify_time"> {{$timeElapsed}}</span>
                </div>
                <div class="notification_read" style="display:inline-block; margin-left: 10px; vertical-align: top;">
                  <a href="{{route('notification.markasread', $notification->id)}}" style="color:#3cce74;font-size:10px;font-weight:1000">Mark As Read</a>
                </div>
                <div class="notify_delete" style="display:inline-block; margin-left: 10px; vertical-align: top;">
                  <form method="POST" action="{{ route('notifications.destroy', $notification->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="noti_delete"><i class="fa fa-trash"></i></button>
                  </form>
                  <div class="unread_icon" style="text-align: center;">
                    <i class="fa fa-circle" style="color:#3cce74;font-size:15px"></i>
                  </div>
                </div>
              </li>
            {{-- read --}}
              @else
              <li class="notify_item">
                <div class="notify_img">
                    <img src="{{asset($notification->data['user_pic'])}}" alt="profile_picture" style="width: 50px">
                </div>
                <div class="notify_info">
                    <p><span>{{$notification->data['user_name']}} </span> liked your property {{$notification->data['property_name']}}</p>
                    @php
                    
                    $createdAt = \Carbon\Carbon::parse($notification->created_at);
                    $timeElapsed = $createdAt->diffForHumans();
                 @endphp
                    <span class="notify_time"> {{$timeElapsed}}</span>
                   
                </div>
                <div class="notify_delete">
                  <form method="POST" action="{{ route('notifications.destroy', $notification->id) }}">
                      @csrf
                      @method('DELETE')
                     
                      <button type="submit" class="noti_delete"><i class="fa fa-trash"></i></button>
                  </form>
              </div> 
              
              @endif
                  {{-- Chat Request --}}
              @elseif($notification->type == 'App\Notifications\ChatRequestNotification')
              {{-- Unread --}}
              @if ($notification->read_at==NULL)
              <li class="notify_item">
                <div class="notify_img">
                    <img src="{{asset($notification->data['user_pic'])}}" alt="profile_picture" style="width: 50px">
                </div>
                <div class="notify_info">
                    <p><span>{{$notification->data['user_name']}} </span> sent you chat request for {{$notification->data['property_name']}}</p>
                    @php
                    // Assuming $record is your database record
                    $createdAt = \Carbon\Carbon::parse($notification->created_at);
                    $timeElapsed = $createdAt->diffForHumans();
                 @endphp
                    <span class="notify_time"> {{$timeElapsed}}</span>
                    {{-- {{$notification->markAsRead();}} --}}
                </div>
                <div class="notification_read" style="display:inline-block;">
                 <a href="{{route('notification.markasread', $notification->id)}}" style="color:#3cce74;font-size:10px;font-weight:1000">Mark As Read</a>

                </div>
                
                <div class="notify_delete" style="display:inline-block; margin-left: 10px;">
                  <form method="POST" action="{{ route('notifications.destroy', $notification->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="noti_delete"><i class="fa fa-trash"></i></button>
                  </form>
                  <div class="unread_icon" style="text-align: center;">
                    <i class="fa fa-circle" style="color:#3cce74;font-size:15px"></i>
                  </div>
                </div>
              </li>
            </li>
            {{-- Read --}}
              @else
              <li class="notify_item">
                <div class="notify_img">
                    <img src="{{asset($notification->data['user_pic'])}}" alt="profile_picture" style="width: 50px">
                </div>
                <div class="notify_info">
                    <p><span>{{$notification->data['user_name']}} </span> sent you chat request for {{$notification->data['property_name']}}</p>
                    @php
                    // Assuming $record is your database record
                    $createdAt = \Carbon\Carbon::parse($notification->created_at);
                    $timeElapsed = $createdAt->diffForHumans();
                 @endphp
                    <span class="notify_time"> {{$timeElapsed}}</span>
                    {{-- {{$notification->markAsRead();}} --}}
                </div>
                
                <div class="notify_delete">
                  <form method="POST" action="{{ route('notifications.destroy', $notification->id) }}">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="noti_delete"><i class="fa fa-trash"></i></button>
                  </form>
              </div>
            </li>
              @endif
                 {{-- Comment --}}
              @elseif($notification->type == 'App\Notifications\CommentNotification')
              {{-- Unread --}}
              @if ($notification->read_at==NULL)
              <li class="notify_item">
                <div class="notify_img">
                    <img src="{{asset($notification->data['user_pic'])}}" alt="profile_picture" style="width: 50px">
                </div>
                
                <div class="notify_info">
                    <p><span>{{$notification->data['user_name']}} </span> commented on your property {{$notification->data['property_name']}}</p>
                    @php
                    // Assuming $record is your database record
                    $createdAt = \Carbon\Carbon::parse($notification->created_at);
                    $timeElapsed = $createdAt->diffForHumans();
                 @endphp
                    <span class="notify_time"> {{$timeElapsed}}</span>
                    {{-- {{$notification->markAsRead();}} --}}
                </div>
                <div class="notification_read" style="display:inline-block;">
                 <a href="{{route('notification.markasread', $notification->id)}}" style="color:#3cce74;font-size:10px;font-weight:1000">Mark As Read</a>

                </div>
                
                <div class="notify_delete" style="display:inline-block; margin-left: 10px;">
                  <form method="POST" action="{{ route('notifications.destroy', $notification->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="noti_delete"><i class="fa fa-trash"></i></button>
                  </form>
                  <div class="unread_icon" style="text-align: center;">
                    <i class="fa fa-circle" style="color:#3cce74;font-size:15px"></i>
                  </div>
                </div>
              </li>
            </li>
            {{-- Read --}}
              @else
              <li class="notify_item">
                <div class="notify_img">
                    <img src="{{asset($notification->data['user_pic'])}}" alt="profile_picture" style="width: 50px">
                </div>
                
                <div class="notify_info">
                    <p><span>{{$notification->data['user_name']}} </span> commented on your property {{$notification->data['property_name']}}</p>
                    @php
                    // Assuming $record is your database record
                    $createdAt = \Carbon\Carbon::parse($notification->created_at);
                    $timeElapsed = $createdAt->diffForHumans();
                 @endphp
                    <span class="notify_time"> {{$timeElapsed}}</span>
                    {{-- {{$notification->markAsRead();}} --}}
                </div>
                
                <div class="notify_delete">
                  <form method="POST" action="{{ route('notifications.destroy', $notification->id) }}">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="noti_delete"><i class="fa fa-trash"></i></button>
                  </form>
              </div>
            </li>
              @endif
                  
              @endif
          @empty
              <li class="notify_item">
                  <div class="notify_info">
                      <p>No Notification Found</p>
                  </div>
              </li>
          @endforelse
             </ul>
             <script>
              $(document).ready(function() {
                  $('#mark-as-read').click(function(event) {
                      event.preventDefault();
                      var notificationId = $(this).data('notification-id');
                      $.post("{{ route('notifications.markasread') }}", {
                              id: notificationId,
                              _token: '{{ csrf_token() }}'
                          })
                          .done(function() {
                              // Success message
                              alert("Notification marked as read");
                          })
                          .fail(function() {
                              // Error message
                              alert("Error marking notification as read");
                          });
                  });
              });
              </script>
            </li>
                @else  
            <li > <a href="/property/create" >
                <button type="button" class="post-ppt-btn">  
                {{__('Post a Property')}}
                </button></a>
            </li> 
            <li >
                <a href="/login/show"><button type="button" class="login-btn">
                {{__(' Login ')}}
                </button></a>
            </li>
            @endauth
        </ul>
      </div>
    </div>

  </nav>
  <!--/ Nav End /-->
  <script> 
  var currentLocation = window.location.pathname.split('/').pop();
  if (currentLocation === 'about') {
    document.getElementById('home').classList.remove('active');
    document.getElementById('about').classList.add('active');
    activeIndex = 1;
  } else if (currentLocation === 'allproperty') {
    document.getElementById('home').classList.remove('active');
    document.getElementById('property').classList.add('active');
  } else if  (currentLocation === 'rent'){
    document.getElementById('rent').classList.add('active');
    document.getElementById('home').classList.remove('active');
  }
  else if  (currentLocation === 'buy'){
    document.getElementById('buy').classList.add('active');
    document.getElementById('home').classList.remove('active');
  }
  </script>

</body>
</html>
