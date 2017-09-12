<?php

namespace App\Http\Controllers\fe\app;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class reviewRaingController extends Controller
{
    //----Review_&_Rating(user-rating user_rating)
    public function user_rating(Request $request) {

        dd($request->all());
        $previous_url = url()->previous();

        //------start_information_update
        $data_ud = $request->data_ud;
        if($data_ud == 'data_ud') {
            $id = $request->b_id;
            $bank_name = $request->b_name;

            DB::table('banks')->where('id', $id)->update(['bank_name' => $bank_name]);
            Session::put('msg_suc', 'Data Updated Successfully!');
            return Redirect::to($previous_url);
        }
        //------end_information_update


        //------start_information_insert
        //------start_picture
        $image = $request->file('image');
        $bank_name = $request->b_name;

        if (isset($image)) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $destination_path = 'ap/images/banks/';
            $image_full_name = $image_name . '.' . $ext;
            $image_url = $destination_path . $image_full_name;
            $success = $image->move($destination_path, $image_full_name);

            if ($success) {
                $save = array();
                $save['bank_name'] = $bank_name;
                $save['bank_image_url'] = $image_full_name;
                DB::table('banks')->insert($save);

                Session::put('msg_suc', 'Data Inserted Successfully!');
                //$url_current = Session::get('url_current');
                return Redirect::to($previous_url);
            }
        } else {
            Session::put('msg_error', 'Data Not Inserted?');
            //$url_current = Session::get('url_current');
            return Redirect::to($previous_url);
        }
        //------end_picture
        //------end_information_insert
    }
}
