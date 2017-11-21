<?php

namespace App\Http\Controllers\insuranceapplyinfo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FormInsuranceapplyinfoController extends Controller
{
    //----InsuranceApplyInfo Information(insurance-health-apply-save insurance_apply_form_save)
    public function insurance_apply_form_save(Request $request)
    {
        //dd($request->all());
        $name = $request->name;
        $occupation = $request->occupation;
        $age = $request->age;
        $gender = $request->gender;
        $smoking = $request->smoking;

        $type = $request->type;
        $mobile = $request->mobile;

        $number = $request->number;
        $model = $request->model;
        $regi_no = $request->regi_no;
        $exp_date = $request->exp_date;


        //----start mobile_number_validate_check
        $mob_len = strlen($mobile);
        $error_msg = 'Your mobile number is incorrect? '.$mobile;
        if($mob_len == 11){
            if (preg_match('/^[0-9]*$/', $mobile)) {
                $a = str_limit($mobile, 2);$b = str_limit($mobile, 3);

                if($a != '01...'){
                    Session::put('fe_error_msg', $error_msg);return redirect()->back();
                } else{
                    $check = array("019...", "018...", "017...", "016...", "015...", "011...");
                    if (in_array($b, $check))
                    {
                        $mobile_number = $mobile;
                    } else {Session::put('fe_error_msg', $error_msg);return redirect()->back();}
                }

            } else{Session::put('fe_error_msg', $error_msg);return redirect()->back();}
        } else{Session::put('fe_error_msg', $error_msg);return redirect()->back();}
        //----end mobile_number_validate_check

        //------start_insert_date
        $insurance = $request->insurance;
        if(($insurance == 'insr_health') || ($insurance == 'insr_life')) {

            //----start age_validate_check
            $age_len = strlen($age);
            if($age_len <= 3) {
                if (!preg_match('/^[0-9]*$/', $age)) {
                    Session::put('fe_error_msg', 'Enter your correct age?');return redirect()->back();
                }
            } else{Session::put('fe_error_msg', 'Enter your correct age');return redirect()->back();}
            //----end age_validate_check

            $save = array();
            $save['p_name'] = $name;
            $save['p_occupation'] = $occupation;
            $save['p_age'] = $age;
            $save['p_gender'] = $gender;
            $save['p_smoking_habit'] = $smoking;
            $save['type'] = $type;
            $save['p_mobile_number'] = $mobile_number;
            DB::table('insuranceapplyinfos')->insert($save);

            //----start redirect
            switch($insurance){
                case "insr_health":
                    return redirect('insurance-health');
                    break;

                case "insr_life":
                    return redirect('insurance-life');
                    break;

                default:
                    Session::put('fe_suc_msg', 'Use carefully otherwise you will face some problem?');
                    return back();
            }
            //----end redirect
        } elseif (($insurance == 'insr_bike') || ($insurance == 'insr_car')){

            //----start age_validate_check
            //----end age_validate_check

            $save = array();
            $save['v_number'] = $number;
            $save['v_model'] = $model;
            $save['v_regi_number'] = $regi_no;
            $save['v_expire_date'] = $exp_date;
            $save['type'] = $type;
            $save['p_mobile_number'] = $mobile_number;
            DB::table('insuranceapplyinfos')->insert($save);

            //----start redirect
            switch($insurance){
                case "insr_bike":
                    return redirect('insurance-motor-bike');
                    break;

                case "insr_car":
                    return redirect('insurance-motor-car');
                    break;

                default:
                    Session::put('fe_suc_msg', 'Use carefully otherwise you will face some problem?');
                    return back();
            }
            //----end redirect
        }
        //------end_insert_date


        return redirect()->back();
    }
}
