<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
  protected $redirectTo = '/admin/login';

  public function __construct(){
    $this->middleware('guest:admin');
  }

  public function showLoginForm(){
    return view('auth.admin-login');
  }

  public function login(Request $request){
    // validate form data
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required|min:6'
    ]);

    // attempt to log the user in
    if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
      return redirect()->intended(route('admin.dashboard'));
    }

    // if unsuccessful, then redirect back to login page with form data
    return redirect()->back()->withInput($request->only('email', 'remember'));
  }

  public function logout () {
    //logout user
    auth()->logout();
    // redirect to homepage
    return redirect('/resume');
  }
}
