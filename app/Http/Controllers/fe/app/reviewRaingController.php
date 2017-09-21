<?php

namespace App\Http\Controllers\fe\app;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class reviewRaingController extends Controller
{
    //----Rating(user-rating user_rating)
    public function user_rating(Request $request) {

        //dd($request->all());
        $previous_url = url()->previous();

        $rating = $request->rating;
        $id = $request->id;

        if($rating==NULL || $id==NULL){
            Session::put('msg_apply', 'Entered Invalid Information?');
            return redirect($previous_url);
        }

        $save = array();
        $save['user_rating_star'] = $rating;

        DB::table('applyings')->where('id', $id)->update($save);
        Session::put('msg_apply', 'Client Rating Successfully!!!');
        return redirect($previous_url);
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
