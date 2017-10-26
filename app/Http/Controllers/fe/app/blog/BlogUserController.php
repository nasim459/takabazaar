<?php

namespace App\Http\Controllers\fe\app\blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BlogUserController extends Controller
{
    //Blog Category Save
    public function blog_user_insert(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:64',
            'email' => 'required|email|Between:3,64|unique:users',
            'pass' => 'required|min:6',
        ]);
        if ($validator->fails()) {
            Session::put('fe_error_msg', 'Incorrect email or password, Please try again.');
            return redirect('/');//->with('fe_error_msg', 'Pre-required failed please try again.');
        }

        $insert_save = $request->insert_save;

        //----start ap_blog_module-----------------------------------------------------------
        switch($insert_save){
            case "insert_save":
                $save = array();

                $save['name'] = $request->name;
                $save['email'] = $request->email;
                $save['role_id'] = 2;   //----2 means user_profile
                $save['password'] = bcrypt($request->pass);
                DB::table('users')->insert($save);

                Session::put('fe_error_msg', 'Registration completed Successfully.');
                return redirect('/');

                break;
            default:
                return back();
        }
        //----end ap_blog_module---------------------------------------------------------------
    }

    //Blog user_profile_update
    public function blog_user_profile_update(Request $request)
    {
        //dd($request->all());
//        $validator = Validator::make($request->all(), [
//            'name' => 'required|max:64',
//            'email' => 'required|email|Between:3,64|unique:users',
//            //'pass' => 'required',
//        ]);
//        if ($validator->fails()) {
//            Session::put('fe_error_msg', 'Pre-required failed please try again.');
//            return back();//->with('fe_error_msg', 'Pre-required failed please try again.');
//        }

        $insert_update = $request->insert;

        //----start insert_update-----------------------------------------------------------
        switch($insert_update){
            case "insert_update":
                $save = array();
                $save['name'] = $request->name;
                $save['email'] = $request->email;
                DB::table('users')->where('id', $request->id)->update($save);
                Session::put('fe_error_msg', 'Information Updated Successfully!!!');
                return back();

                break;
            case "insert_pass":

                $validator = Validator::make($request->all(), [
                    'pass1' => 'required|min:6',
                    'pass2' => 'required|min:6',
                ]);

                if ($validator->fails()) {
                    Session::put('fe_error_msg', 'Password minimum 6 characters? Please try again.');
                    return back();
                }

                if($request->pass1 == $request->pass2){ $password = bcrypt($request->pass2); }

                DB::table('users')->where('id', $request->id)->update(['password' => $password]);
                return back();

                break;
            default:
                return back();
        }
        //----end insert_update---------------------------------------------------------------
    }
}
