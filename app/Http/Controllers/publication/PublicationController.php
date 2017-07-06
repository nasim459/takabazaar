<?php

namespace App\Http\Controllers\publication;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
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
            default:
                return Redirect::to($previous_url);
        }

        //----Change Publication_Status_here Of Table
        if ($status == 0) {
            DB::table($table_name)
                ->where($where_field_id, $id)
                ->update([$publication_status => '0']);
            return Redirect::to($redirect);
        } else {
            DB::table($table_name)
                ->where($where_field_id, $id)
                ->update([$publication_status => '1']);
            return Redirect::to($redirect);
        }
    }
}
