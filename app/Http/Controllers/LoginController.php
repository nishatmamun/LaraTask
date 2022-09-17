<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Session;
use Hash;

class LoginController extends Controller
{
    public function signIn(Request $request){

        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);
        $user = Admin::where('username','=',$request->username)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('/dashboard');
            }else{
                return back()->with('fail','Password not matches');
            }
        } else {
            return back()->with('fail', 'This user is not registered');
        }
    }

    public function signOut(Request $request){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/');
        }
    }
}