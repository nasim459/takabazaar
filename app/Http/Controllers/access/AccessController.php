<?php

namespace App\Http\Controllers\access;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AccessController extends Controller
{
    /**
     * do login.
     * @request param
     */
    public function postSignIn(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator);
        }
        //Auth::attempt(['email' => $request['email'], 'password' => $request['password']], true);

        Auth::loginUsingId(10, true);

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']], true))
        {
            return redirect('/dboard');
        }

        return redirect()->back()->with('message_error', 'Invalid Email and password combination!');
    }


    /**
     * logout.
     * @clear session
     */
    public function getLogout()
    {
        Auth::logout();
       //Session::flush();
        return redirect('/');
    }

}
