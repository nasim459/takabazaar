<?php

namespace App\Http\Controllers\form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class FormBankController extends Controller
{
    //----Form Information(form-bank-save bank_form_save)
    public function bank_form_save(Request $request) {

        //return 'hello';
        //$url_current = Session::get('url_current');
        //echo $url_current;
//        $all = $request->all();
//        dd($all);

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
                $save['bank_image_url'] = $image_url;
                DB::table('banks')->insert($save);

                Session::put('msg_suc', 'Data Inserted Successfully!');
                //$url_current = Session::get('url_current');
                return Redirect::to('form-bank');
            }
        } else {
            Session::put('msg_error', 'Data Not Inserted?');
            //$url_current = Session::get('url_current');
            return Redirect::to('form-bank');
        }
        //------end_picture
    }

    //----Form Information(form-bank-update  bank_form_update)
    public function bank_form_update(Request $request) {

        $id = $request->b_id;
        $bank_name = $request->b_name;
        $previous_url = url()->previous();

        DB::table('banks')
            ->where('id', $id)
            ->update(['bank_name' => $bank_name]);
        Session::put('msg_suc', 'Data Updated Successfully!');
        return Redirect::to($previous_url);
    }
}
