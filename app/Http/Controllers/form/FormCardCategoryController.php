<?php

namespace App\Http\Controllers\form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class FormCardCategoryController extends Controller
{
    //----Form Information(form-bank-save bank_form_save)
    public function cardcategory_form_save(Request $request) {

        //return 'hello';
        //$url_current = Session::get('url_current');
        //echo $url_current;
//        $all = $request->all();
//        dd($all);

        //------start_picture
        $image = $request->file('image');
        $bank_name = $request->cc_name;

        if (isset($image)) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $destination_path = 'ap/images/card_category/';
            $image_full_name = $image_name . '.' . $ext;
            $image_url = $destination_path . $image_full_name;
            $success = $image->move($destination_path, $image_full_name);

            if ($success) {
                $save = array();
                $save['cc_name'] = $bank_name;
                $save['cc_image_url'] = $image_url;
                DB::table('cardcategories')->insert($save);

                Session::put('msg_suc', 'Data Inserted Successfully!');
                //$url_current = Session::get('url_current');
                return Redirect::to(url()->previous());
            }
        } else {
            Session::put('msg_error', 'Data Not Inserted?');
            //$url_current = Session::get('url_current');
            return Redirect::to(url()->previous());
        }
        //------end_picture
    }

    //----Form Information(form-bank-update  bank_form_update)
    public function cardcategory_form_update(Request $request) {

        $id = $request->cc_id;
        $cardcategory_name = $request->cc_name;
        $previous_url = url()->previous();

        DB::table('cardcategories')
            ->where('id', $id)
            ->update(['cc_name' => $cardcategory_name]);
        Session::put('msg_suc', 'Data Updated Successfully!');
        return Redirect::to($previous_url);
    }
}
