<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rules\MatchOldPassword;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
/*    
    public function index()
    {
        return view('admin.home');
    }

    public function create()
    {
        return view('admin.product.create');
    }*/
    public function login(Request $request)
    {
        if ($request -> isMethod('post')){
            $data = $request -> input();
            if(Auth::attempt( ['email' => $data['email'], 'password' => $data['password'], 'admin' => '1'] )){
                Session::put('adminSession',$data['email']);
                return redirect()->route('adminDashboard');
            }
            else{
                return redirect()->route('adminLogin')->with('login_error','Wrong input, please check email or password');
            }
        }
        return view ('admin.admin_login');
    }
    public function dashboard()
    {
        if(Session::has('adminSession')){

        }
        else{
            return redirect()->route('adminLogin')->with('middleware_error','Please login first');
        }
        return view ('admin.dashboard');
    }
    public function logout()
    {
        Session::flush();
        return redirect()->route('adminLogin');
    }
    public function settings()
    {
        return view ('admin.settings');
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required','min:8'],
            'confirm_password' => ['same:new_password','min:8'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        return redirect()->route('adminSettings')->with('passowrd_success','Password updated successfully');
    }
    public function forgotPassword()
    {
        return view ('admin.reset_password');
    }
    public function resetPassword(Type $var = null)
    {
        # code...
    }
}
