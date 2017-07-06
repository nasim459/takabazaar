<?php

namespace App\Http\Controllers\delete;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use phpDocumentor\Reflection\Types\Null_;

class DeleteController extends Controller
{
    //----Delete Information(publication/{id}/{status}  publication)
    public function delete(Request $request) {

        //----Define Value Of Table
        $previous_url = url()->previous();
        $id = $request->id;
        $table = $request->t_id;
        $where_field_id = 'id';

        switch($table){
            case "11":
                $table_name = 'advertises';
                break;
            case "22":
                $table_name = 'banks';
                break;
            case "33":
                $table_name = 'loans';
                break;
            case "44":
                $table_name = 'investments';
                break;
            case "55":
                $table_name = 'insurances';
                break;
            default:
                return Redirect::to($previous_url);
        }

        //----Delete selected_id_from_targeted_table
        if ($id != NULL || $table_name != NULL) {
            DB::table($table_name)->where($where_field_id, $id)->delete();
            Session::put('msg_delete', 'Data Deleted Successfully!');
            return Redirect::to($previous_url);
        } else {
            return Redirect::to($previous_url);
        }

    }
}
