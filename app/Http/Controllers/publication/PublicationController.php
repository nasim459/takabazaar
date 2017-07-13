<?php

namespace App\Http\Controllers\publication;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class PublicationController extends Controller
{
    //----Publication Information(publication/{id}/{status}  publication)
    public function publication($id, $status, $table) {
        //----Define Value Of Table
        $previous_url = url()->previous();
        $where_field_id = 'id';
        switch($table){
            case "11":
                $table_name = 'advertises';
                $publication_status = 'add_status';
                $redirect = $previous_url;
                break;
            case "22":
                $table_name = 'banks';
                $publication_status = 'bank_status';
                $redirect = $previous_url;
                break;
            case "33":
                $table_name = 'loans';
                $publication_status = 'loan_status';
                $redirect = $previous_url;
                break;
            case "44":
                $table_name = 'investments';
                $publication_status = 'invst_status';
                $redirect = $previous_url;
                break;
            case "55":
                $table_name = 'insurances';
                $publication_status = 'insr_status';
                $redirect = $previous_url;
                break;
            case "66":
                $table_name = 'applyings';
                $publication_status = 'aply_status';
                $redirect = $previous_url;
                break;
            case "77":
                $table_name = 'cards';
                $publication_status = 'c_status';
                $redirect = $previous_url;
                break;
            case "88":
                $table_name = 'cardcategories';
                $publication_status = 'cc_status';
                $redirect = $previous_url;
                break;
            default:
                return Redirect::to($previous_url);
        }

        //----Change Publication_Status_here Of Table
        if ($status == 0) {
            DB::table($table_name)->where($where_field_id, $id)->update([$publication_status => '0']);
            return Redirect::to($redirect);
        } else {
            DB::table($table_name)->where($where_field_id, $id)->update([$publication_status => '1']);
            return Redirect::to($redirect);
        }
    }

    //----Publication Information(publication/{id}/{status}  publication)
    public function publication_alert($id, $status, $table) {
        //----Define Value Of Table
        $previous_url = url()->previous();
        $where_field_id = 'id';
        switch($table){
            case "66":
                $table_name = 'applyings';
                $publication_status = 'aply_status';
                $redirect = $previous_url;
                break;
            default:
                return Redirect::to($previous_url);
        }

        //----Change Publication_Status_here Of Table
        if ($status == 1) {
            DB::table($table_name)->where($where_field_id, $id)->update([$publication_status => '2']);
            Session::put('msg_apply', 'Successfully change your applying request!!!');
            return Redirect::to($redirect);

        } elseif ($status == 2) {
            DB::table($table_name)->where($where_field_id, $id)->update([$publication_status => '0']);
            Session::put('msg_apply', 'Successfully completed your applying process!!!');
            return Redirect::to($redirect);

        } else {
            //DB::table($table_name)->where($where_field_id, $id)->update([$publication_status => '1']);
            //Session::put('msg_apply', 'Again define your request completed!!!');
            return Redirect::to($redirect);
        }
    }
}
