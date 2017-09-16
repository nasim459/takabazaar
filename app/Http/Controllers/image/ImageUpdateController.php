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
        $previous_url = url()->previous();

        //----Define Value Of Table
        switch($table_no){
            case "11":
                $table_name = 'advertises';
                $where_field_id = 'id';
                $destination_path_define = 'ap/images/advertise/';
                $updated_tbl_field_img_url = 'add_image_url';  //--change_image_url_of_table_field
                break;
            case "22":
                $table_name = 'banks';
                $where_field_id = 'id';
                $destination_path_define = 'ap/images/banks/';
                $updated_tbl_field_img_url = 'bank_image_url';  //--change_image_url_of_table_field
                break;
            case "88":
                $table_name = 'cardcategories';
                $where_field_id = 'id';
                $destination_path_define = 'ap/images/card_category/';
                $updated_tbl_field_img_url = 'cc_image_url';  //--change_image_url_of_table_field
                break;
            case "444":
                $table_name = 'blogs';
                $where_field_id = 'id';
                $destination_path_define = 'fe/img/blog_pic/';
                $updated_tbl_field_img_url = 'blog_image';  //--change_image_url_of_table_field
                break;
            default:
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
                    ->update([$updated_tbl_field_img_url => $image_full_name]);
                Session::put('msg_suc', 'Data Updated Successfully!');
                return Redirect::to($previous_url);
            }
        } else {
            Session::put('msg_error', 'Nothing To Updated ?');
            return Redirect::to($previous_url);
        }
        //------end_picture
    }

    //----Image Update Child(image-update-child  child_image_update)
    public function child_image_update(Request $request) {

        $id = $request->id;
        $bank_id = $request->bank_id;
        $table_no = $request->t_id;
        $previous_url = url()->previous();
        //dd($request);

        //----Define Value Of Table
        switch($table_no){
            case "33":
                $table_name = 'loans';
                $where_field_id = 'id';
                $updated_tbl_field = 'bank_id';
                break;
            case "44":
                $table_name = 'investments';
                $where_field_id = 'id';
                $updated_tbl_field = 'bank_id';
                break;
            case "77":
                $table_name = 'cards';
                $where_field_id = 'id';
                $updated_tbl_field = 'bank_id';
                break;
            case "99":
                $table_name = 'carddebits';
                $where_field_id = 'id';
                $updated_tbl_field = 'bank_id';
                break;
            default:
                return Redirect::to($previous_url);
        }

        //------start_picture_update
        if ($bank_id != NULL) {
            DB::table($table_name)->where($where_field_id, $id)->update([$updated_tbl_field => $bank_id]);
            Session::put('msg_suc', 'Data Updated Successfully!');
            return Redirect::to($previous_url);

        } else {
            Session::put('msg_error', 'Nothing To Updated ?');
            return Redirect::to($previous_url);
        }
        //------end_picture_update
    }
}
