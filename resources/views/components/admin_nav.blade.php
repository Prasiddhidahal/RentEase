<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      

        <link href="img/logo.png" rel="icon">
        <link rel="stylesheet" href="/css/main.css">


      
        <title>RentEase</title>
    </head>
    
    <body>
 
<!--/ Nav Star /-->
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
          <li class="nav-item">
            <a class="nav-link active" id="home" href="/admin/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="user_home" href="/admin/user_home">User Home</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" id="property" href="/admin/allproperty">Property</a>
          </li>
            
              
        </ul>
      </div>
   
    </div>
  </nav>
  <x-flash-message/>

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
} else if  (currentLocation === 'user_home'){
  document.getElementById('user_home').classList.add('active');
  document.getElementById('home').classList.remove('active');
}

    </script>
</body>
</html>
