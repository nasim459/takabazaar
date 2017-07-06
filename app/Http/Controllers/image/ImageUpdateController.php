<?php

namespace App\Http\Controllers\image;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ImageUpdateController extends Controller
{
    //----Image Update(image-update  ImageUpdateController)
    public function image_update(Request $request) {

        $image = $request->file('image');
        $id = $request->id;
        //dd($request->all());
        $table_no = $request->t_id;

        //----Define Value Of Table
        switch($table_no){
            case "11":
                $table_name = 'advertises';
                $where_field_id = 'id';
                $destination_path_define = 'ap/images/advertise/';
                $updated_tbl_field_img_url = 'add_image_url';  //--change_image_url_of_table_field
                $go_to_redirect = 'advertise';
                break;
            case "22":
                $table_name = 'banks';
                $where_field_id = 'id';
                $destination_path_define = 'ap/images/banks/';
                $updated_tbl_field_img_url = 'bank_image_url';  //--change_image_url_of_table_field
                $go_to_redirect = 'bank-list';
                break;
            default:
                $previous_url = url()->previous();
                return Redirect::to($previous_url);
        }

        //------start_picture
        if (isset($image)) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $destination_path = $destination_path_define;
            $image_full_name = $image_name . '.' . $ext;
            $image_url = $destination_path . $image_full_name;
            $success = $image->move($destination_path, $image_full_name);
            if ($success) {
                DB::table($table_name)
                    ->where($where_field_id, $id)
                    ->update([$updated_tbl_field_img_url => $image_url]);
                Session::put('msg_suc', 'Data Updated Successfully!');
                return Redirect::to($go_to_redirect);
            }
        } else {
            Session::put('msg_error', 'Nothing To Updated ?');
            return Redirect::to($go_to_redirect);
        }
        //------end_picture
    }
}
