<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class MyAuthController extends Controller
{
    //

    public function login()
    {
        return view("auth.login");
    }

    public function registration()
    {
        return view("auth.registration");
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            /* 'password' => 'required|min:4|max:20|regex:/[0-9]/' */
            'password' => [
                'required',
                'string',
                'min:4',             // must be at least 4 characters in length
                'max:20',             
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ]
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if ($res) {
            return back()->with('success', 'You have registered succesufuly.');
        } else {
            return back()->with('fail', 'Something wrong.');
        }
    }

    public function loginUser(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4|max:20'
        ]);

        $user = User::where('email', '=', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');

            } else {
                return back()->with('fail', 'Password not machted.');
            }
        } else {
            return back()->with('fail', 'Email is not registered.');
        }
    }

    public function dashboard()
    {
        $data = array();
        if (Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('pages.dashboard', compact('data'));

    }

    public function logout() {
        if (Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }


    public function present()
    {
        return view("pages.present");
    }

}