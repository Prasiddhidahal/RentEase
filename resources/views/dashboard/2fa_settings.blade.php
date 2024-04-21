{{-- flashmessage --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<x-dashboardsidebar style=" position: fixed;" >
    <div class="container" style="width:100%;padding:10px; overflow: auto;
    flex: 1 1 auto;
    scrollbar-width: none; /* Firefox */
-ms-overflow-style: none; /* Internet Explorer and Edge */">
    <style>
      .container::-webkit-scrollbar {
       display: none;
      }
      </style>
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="card" style="width: 800px; height:auto">
                    <div class="card-header"style=" padding:10px;"><strong>Two Factor Authentication</strong></div>
                    <div class="card-body" style=" padding:10px;">
                        <p>Two factor authentication (2FA) strengthens access security by requiring two methods (also referred to as factors) to verify your identity. Two factor authentication protects against phishing, social engineering and password brute force attacks and secures your logins from attackers exploiting weak or stolen credentials.</p>
    <br>
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
    
                        @if($data['user']->loginSecurity == null)
                            <form class="form-horizontal" method="POST" action="{{ route('generate2faSecret') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <button type="submit" class="genetrate">
                                        Generate Secret Key to Enable 2FA
                                    </button>
                                </div>
                            </form>
                        @elseif(!$data['user']->loginSecurity->google2fa_enable)
                            1. Scan this QR code with your Google Authenticator App. Alternatively, you can use the code:<div style="display: grid; justify-content:center"> <code>{{ $data['secret'] }}</code><br/>
                            {!! $data['google2fa_url'] !!}
                            </div>
                            <br/><br/>
                            2. Enter the pin from Google Authenticator app:<br/><br/>
                            
                            <form class="form-horizontal" method="POST" action="{{ route('enable2fa') }}">
                                {{ csrf_field() }}
                                <div style="margin-left: 50px;">
                                <div class="form-group  {{ $errors->has('verify-code') ? ' has-error' : '' }}">
                                    <label for="secret" class="control-label">Authenticator Code:</label><br>
                                    <input id="secret" type="password" class="form-control col-md-4 in" name="secret" required style="color:black; font-size:20px;"/><br><br>
                                    <input type="checkbox" class="show" onclick="myFunction1()" style="margin-left:-1px;margin-top:10px"/> Show Password
                                    <script>
                                        function myFunction1() {
                                            var x = document.getElementById("secret");
                                            if (x.type === "password") {
                                                x.type = "text";
                                            } else {
                                                x.type = "password";
                                            }
                                            }
                                        </script>
                                         </div>
                                    @if ($errors->has('verify-code'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('verify-code') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <br>
                                <div style="display: grid; justify-content:center">
                                <button type="submit" class="genetrate">
                                    Enable 2FA
                                </button>
                            </div>
                            </form>
                           
                        @elseif($data['user']->loginSecurity->google2fa_enable)
                            <div class="alert alert-success">
                                2FA is currently <strong>enabled</strong> on your account.
                            </div>
                            <p>If you are looking to disable Two Factor Authentication. Please confirm your password and Click Disable 2FA Button.</p><br><br>
                            <form class="form-horizontal" method="POST" action="{{ route('disable2fa') }}">
                                {{ csrf_field() }}
                                <div class="form-group {{ $errors->has('current-password') ? ' has-error' : '' }}">
                                    <label for="change-password"  class="control-label">Current Password:</label><br>
                                   
                                        <input id="current-password" type="password" class="form-control col-md-4 ins" name="current-password" required><br><br>
                                        <input type="checkbox" class="show" style="margin-left:-1px;margin-top:10px" onclick="myFunction()">Show Password
                                        <script>
                                            function myFunction() {
                                                var x = document.getElementById("current-password");
                                                if (x.type === "password") {
                                                    x.type = "text";
                                                } else {
                                                    x.type = "password";
                                                }
                                                }
                                            </script>
                                        @if ($errors->has('current-password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                        </span>
                                        @endif
                                </div>
                                <button type="submit" class="disable">Disable 2FA</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
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