<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        
        return view('login.login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $check=$request->all();
        if (Auth::attempt($credentials)) {
            $user = User::where('email',$request->input('email'))->first();
            // Authentication passed...
          
                if($user->status==2){
                    Auth::logout();

                    $request->session()->invalidate();
            
                    return redirect('/login/show')->with('error', 'Your Account is suspended, please contact Admin.');
                }
                else{
            // echo "<pre>"; print_r($check); die;

                    if(isset($check['remember']) && !empty($check['remember'])){
                        setcookie("email",$check['email'],time()+3600);
                        setcookie("password",$check['password'],time()+3600);
        
                    }
                    else{
                        setcookie("email","");
                        setcookie("password","");
                    }
                    return redirect()->intended('/home')->with('message', 'Login Successful');
                }
            }
            
            
        
        else {
            return redirect()->back()->with('message', 'Invalid credentials.');
        }
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}

