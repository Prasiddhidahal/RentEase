<title>{{ config('chatify.name') }}</title>

{{-- Meta tags --}}
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="id" content="{{ $id }}">
<meta name="messenger-color" content="{{ $messengerColor }}">
<meta name="messenger-theme" content="{{ $dark_mode }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="url" content="{{ url('').'/'.config('chatify.routes.prefix') }}" data-user="{{ Auth::user()->id }}">

{{-- scripts --}}
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/chatify/font.awesome.min.js') }}"></script>
<script src="{{ asset('js/chatify/autosize.js') }}"></script>
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
<script src='https://unpkg.com/nprogress@0.2.0/nprogress.js'></script>

{{-- styles --}}
<link rel='stylesheet' href='https://unpkg.com/nprogress@0.2.0/nprogress.css'/>
<link href="{{ asset('css/chatify/style.css') }}" rel="stylesheet" />
<link href="{{ asset('css/chatify/'.$dark_mode.'.mode.css') }}" rel="stylesheet" />
{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" /> --}}
   <!-- Favicons -->
   <link href="img/logo.png" rel="icon">
   <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
 
   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
 
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

{{-- Setting messenger primary color to css --}}
<style>
    :root {
        --primary-color: {{ $messengerColor }};
    }
</style>
