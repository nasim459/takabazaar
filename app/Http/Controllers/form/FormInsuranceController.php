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
            $insr_claim_ration = $request->insr_claim_ration;
            if($insr_claim_ration == NULL) {
                $rate_from = 0;
            }

            //----invst means investment
            $invst = array();
            $invst['insr_type'] = $request->insr_type;
            $invst['insr_person_type'] = $request->insr_person;
            $invst['insr_sum_insured'] = $request->insr_sum;
            $invst['insr_period'] = $request->insr_period;
            $invst['insr_cover_type'] = $request->insr_cover;
            $invst['insr_monthly_payout'] = $request->insr_monthly_payout;

            $invst['insr_lump_sum_payout'] = $request->insr_lum_sum_payout;
            $invst['insr_claim_ratio'] = $request->insr_claim_ration;
            $invst['insr_premium'] = $request->insr_premium_;

            $invst['insr_features_benefits'] = $request->data_fsr;
            $invst['insr_eligibility'] = $request->data_elig;
            $invst['insr_requirements'] = $request->data_req;

            $invst['bank_id'] = $request->bank_id;
            DB::table('insurances')->insert($invst);

            Session::put('insert_suc', 'Data Inserted Successfully!');
            return redirect($previous_url);

        } elseif ($data_insert == 'data_update') {
            //echo 'update data';
            //exit();

            $insr_claim_ration = $request->insr_claim_ration;
            if($insr_claim_ration == NULL) {
                $rate_from = 0;
            }

            $invst_id = $request->id;
            if ($invst_id == NULL){ return redirect($previous_url); }

            //----invst means investment
            $invst = array();
            $invst['insr_type'] = $request->insr_type;
            $invst['insr_person_type'] = $request->insr_person;
            $invst['insr_sum_insured'] = $request->insr_sum;
            $invst['insr_period'] = $request->insr_period;
            $invst['insr_cover_type'] = $request->insr_cover;
            $invst['insr_monthly_payout'] = $request->insr_monthly_payout;

            $invst['insr_lump_sum_payout'] = $request->insr_lum_sum_payout;
            $invst['insr_claim_ratio'] = $request->insr_claim_ration;
            $invst['insr_premium'] = $request->insr_premium;

            $invst['insr_features_benefits'] = $request->data_fsr;
            $invst['insr_eligibility'] = $request->data_elig;
            $invst['insr_requirements'] = $request->data_req;

            $invst['bank_id'] = $request->bank_id;
            DB::table('insurances')->where('id', $invst_id)->update($invst);

            Session::put('msg_suc', 'Data Updated Successfully!');
            return redirect($previous_url);
        }


    }
}
