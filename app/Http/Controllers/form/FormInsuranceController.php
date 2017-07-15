<?php

namespace App\Http\Controllers\form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FormInsuranceController extends Controller
{
    //----Form investment Information(form-investment-save investment_form_save)
    public function insurance_form(Request $request) {



        //-----------nothing to define of investment insert & update date----------- must be define by you




        //dd($request->all());
        $data_insert = $request->insert;
        $previous_url = url()->previous();

        if ($data_insert == 'data_insert') {
            $rate_from = $request->invst_rate_from;
            $rate_to = $request->invst_rate_to;
            if($rate_from == NULL) {
                $rate_from = 0;
            }
            if ($rate_to == Null) {
                $rate_to = 0;
            }

            //----invst means investment
            $invst = array();
            $invst['invst_type'] = $request->invst_type;
            $invst['invst_person_type'] = $request->invst_person;
            $invst['invst_amount_upto'] = $request->invst_amount;
            $invst['invst_tenure_rate'] = $request->invst_period;
            $invst['invst_interest_rate_from'] = $rate_from;
            $invst['invst_interest_rate_to'] = $rate_to;

            $invst['invst_features_benefits'] = $request->data_fsr;
            $invst['invst_requirements'] = $request->data_req;
            $invst['invst_eligibility'] = $request->data_elig;

            $invst['bank_id'] = $request->bank_id;
            DB::table('investments')->insert($invst);

            Session::put('insert_suc', 'Data Inserted Successfully!');
            return redirect($previous_url);

        } elseif ($data_insert == 'data_update') {
            //echo 'update data';
            //exit();

            $rate_from = $request->invst_rate_from;
            $rate_to = $request->invst_rate_to;
            if($rate_from == NULL) {
                $rate_from = 0;
            }
            if ($rate_to == Null) {
                $rate_to = 0;
            }

            $invst_id = $request->i_id;
            if ($invst_id == NULL){ return redirect($previous_url); }

            //----invst means investment
            $invst = array();
            $invst['invst_type'] = $request->invst_type;
            $invst['invst_person_type'] = $request->invst_person;
            $invst['invst_amount_upto'] = $request->invst_amount;
            $invst['invst_tenure_rate'] = $request->invst_period;
            $invst['invst_interest_rate_from'] = $rate_from;
            $invst['invst_interest_rate_to'] = $rate_to;

            $invst['invst_features_benefits'] = $request->data_fsr;
            $invst['invst_requirements'] = $request->data_req;
            $invst['invst_eligibility'] = $request->data_elig;
            $invst['bank_id'] = $request->bank_id;
            DB::table('investments')->where('id', $invst_id)->update($invst);

            Session::put('msg_suc', 'Data Updated Successfully!');
            return redirect($previous_url);
        }


    }
}
