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

    //----User_Review(user-review  user_review)
    public function user_review(Request $request){

        //dd($request->all());
        $previous_url = url()->previous();

        $name = $request->name;
        $email = $request->email;
        $r_message = $request->message;

        $id = $request->id;
        $table = $request->table;

        if($name==NULL || $email==NULL || $r_message==NULL || $id==NULL || $table==NULL){
            Session::put('fe_error_msg', 'Give valid information?');
            return redirect($previous_url);
        }

        $save = array();
        $save['r_name'] = $name;
        $save['r_email'] = $email;
        $save['r_message'] = $r_message;

        switch($table){
            case "33":
                //----33 means loans table
                $save['loan_id'] = $id;
                DB::table('reviews')->insert($save);
                return redirect($previous_url);
                break;
            case "44":
                //----44 means investments table
                $save['investment_id'] = $id;
                DB::table('reviews')->insert($save);
                return redirect($previous_url);
                break;
            case "55":
                //----55 means insurances table
                $save['insurance_id'] = $id;
                DB::table('reviews')->insert($save);
                return redirect($previous_url);
                break;
            case "77":
                //----77 means cards table
                $save['card_id'] = $id;
                DB::table('reviews')->insert($save);
                return redirect($previous_url);
                break;
            case "99":
                //----99 means carddebits table
                $save['carddebit_id'] = $id;
                DB::table('reviews')->insert($save);
                return redirect($previous_url);
                break;
            default:
                return Redirect::to($previous_url);
        }

    }
}
