<?php

namespace App\Http\Controllers\form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FormAdvertiseController extends Controller
{
    //----Form Update Advertise(form-advertise-save  save_advertise_form)
    public function save_advertise_form(Request $request) {
        //return 'Yes';
        //dd($request->all());
        $previous_url = url()->previous();

        //------start_date_update
        $data_ud = $request->data_ud;
        if($data_ud == 'data_ud_date') {
            $id = $request->l_id;
            $change = array();
            $change['add_start_date'] = $request->s_date;
            $change['add_end_date'] = $request->e_date;
            DB::table('advertises')->where('id', $id)->update($change);

            Session::put('msg_suc', 'Date Updated Successfully!');
            return redirect('advertise');
        }
        //------end_date_update


        //------start_information_update
        $data_ud = $request->data_ud;
        if($data_ud == 'data_ud') {
            $id = $request->l_id;
            $change = array();
            $change['add_name'] = $request->a_name;
            $change['add_type'] = $request->a_type;
            $change['add_link'] = $request->a_link;
            $change['add_company_name'] = $request->a_company_name;
            $change['add_desc'] = $request->a_desc;
            DB::table('advertises')->where('id', $id)->update($change);

            Session::put('msg_suc', 'Data Updated Successfully!');
            return redirect('advertise');
        }
        //------end_information_update


        //------start_information_insert
        //------start_picture
        $image = $request->file('image');

        if (isset($image)) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $destination_path = 'ap/images/advertise/';
            $image_full_name = $image_name . '.' . $ext;
            $image_url = $destination_path . $image_full_name;
            $success = $image->move($destination_path, $image_full_name);

            if ($success) {
                $save = array();
                $save['add_name'] = $request->a_name;
                $save['add_type'] = $request->a_type;
                $save['add_desc'] = $request->a_desc;
                $save['add_image_url'] = $image_full_name;
                $save['add_link'] = $request->a_link;
                $save['add_company_name'] = $request->a_company_name;
                DB::table('advertises')->insert($save);

                Session::put('msg_suc', 'Data Inserted Successfully!');
                return redirect($previous_url);
            }
        } else {
            Session::put('msg_error', 'Nothing To Inserted ?');
            return redirect($previous_url);
        }
        //------end_picture
        //------end_information_insert

    }
}
