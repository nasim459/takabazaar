<?php

namespace App\Http\Controllers\fe\app;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ApplyInfoController extends Controller
{
    //
    public function user_apply(Request $request)
    {
        //dd($request->all());
        $previous_url = url()->previous();

        $aply_name = $request->name;
        $aply_position = $request->ocpn;
        $aply_company_name = $request->org;
        $aply_monthly_income = $request->salary;
        $aply_mobile = $request->mobile;
        $aply_email = $request->email;
        $aply_location = $request->location;

        $id = $request->id;
        $table = $request->table;
        $bank_id = $request->bank_id;

        //----Start form validation
        if($aply_name==NULL || $aply_mobile==NULL || $aply_email==NULL || $id==NULL || $table==NULL){
            Session::put('fe_error_msg', 'Give valid information?');
            return redirect($previous_url);
        } else {
            if(strlen($aply_mobile) != 11){
                Session::put('fe_error_msg', 'Enter Correct phone Number?');
                return redirect($previous_url);
            }
        }
        //----End form validation

        $save = array();
        $save['aply_name'] = $aply_name;
        $save['aply_mobile'] = $aply_mobile;
        $save['aply_email'] = $aply_email;
        $save['aply_location'] = $aply_location;
        $save['aply_company_name'] = $aply_company_name;
        $save['aply_position'] = $aply_position;
        $save['aply_monthly_income'] = $aply_monthly_income;
        $save['aply_offering_type'] = $table;    //----aply_offering_type measn 33=loans, 44=investments, 55=insurances, 77=cards
        $save['bank_id'] = $bank_id;

        switch($table){
            case "33":
                //----33 means loans table
                $save['loan_id'] = $id;
                break;
            case "44":
                //----44 means investments table
                $save['investment_id'] = $id;
                break;
            case "55":
                //----55 means insurances table
                $save['insurance_id'] = $id;
                break;
            case "77":
                //----77 means cards table
                $save['card_id'] = $id;
                break;
            default:
                return Redirect::to($previous_url);
        }

        DB::table('applyings')->insert($save);
        Session::put('fe_msg', 'Apply Successfully!!!');
        return redirect($previous_url);

    }
}
