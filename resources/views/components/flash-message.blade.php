{{-- @if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show=false, 4000)" x-show="show" class="fixed top-0 left-1/2 transform-translate-x-1/2 bg-laravel text-white px-4 py-2 rounded-md z-50">
    <p>{{session('message')}}</p>
</div>
@endif

@if ($message = Session::get('success'))
<div x-data="{show: true}" x-init="setTimeout(() => show=false, 4000)" x-show="show" class="fixed top-0 left-1/2 transform-translate-x-1/2 bg-green-500 text-white px-4 py-2 rounded-md z-50">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
  
@if ($message = Session::get('error'))
<div x-data="{show: true}" x-init="setTimeout(() => show=false, 4000)" x-show="show" class="fixed top-0 left-1/2 transform-translate-x-1/2 bg-red-500 text-white px-4 py-2 rounded-md z-50">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
   
@if ($message = Session::get('warning'))
<div x-data="{show: true}" x-init="setTimeout(() => show=false, 4000)" x-show="show" class="fixed top-0 left-1/2 transform-translate-x-1/2 bg-yellow-500 text-white px-4 py-2 rounded-md z-50">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
   
@if ($message = Session::get('info'))
<div x-data="{show: true}" x-init="setTimeout(() => show=false, 4000)" x-show="show" class="fixed top-0 left-1/2 transform-translate-x-1/2 bg-blue-500 text-white px-4 py-2 rounded-md z-50">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
  
@if ($errors->any())
<div x-data="{show: true}" x-init="setTimeout(() => show=false, 4000)" x-show="show" class="fixed top-0 left-1/2 transform-translate-x-1/2 bg-red-500 text-white px-4 py-2 rounded-md z-50">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    Please check the form below for errors
</div>
@endif --}}
{{-- @if ($message = Session::get('success'))
<div class="alert alert-success" id="success">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger" id="error">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning" id="warning">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info" id="info">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($errors->any())
<div class="alert alert-danger" id="any">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	Please check the form below for errors
</div>
@endif --}}

@if(Session::has('message'))
<script>

  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
    </script>
  @endif

  @if(Session::has('error'))
<script>

  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
    </script>
  @endif

  @if(Session::has('info'))
<script>

  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
    </script>
  @endif

  @if(Session::has('warning'))
<script>

  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
    </script>
  @endif