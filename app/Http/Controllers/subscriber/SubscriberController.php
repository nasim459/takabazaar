<?php

namespace App\Http\Controllers\subscriber;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SubscriberController extends Controller
{
    //Subscriber Data Insert
    public function subscriber_insert(Request $request)
    {
        //dd($request->all());
        $sub_email = $request->sub_email;
        $previous_url = url()->previous();

        if(isset($sub_email)) {
            $save = array();
            $save['subscriber_eamil'] = $sub_email;
            DB::table('blogsubscribers')->insert($save);

            Session::put('fe_msg', 'Successfully Subscribed!!!');
            return redirect($previous_url);
        } else {

            Session::put('msg_error', 'Something went Wrong? Please, Try Again.');
            return redirect($previous_url);
        }

    }
}
