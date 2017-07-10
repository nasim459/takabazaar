<?php

namespace App\Http\Controllers\form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FormInvestmentController extends Controller
{
    //----Form investment Information(form-investment-save investment_form_save)
    public function investment_form_save(Request $request) {
        //$all = $request->all(); dd($all);

        $rate_from = $request->invst_rate_from;
        $rate_to = $request->invst_rate_to;
        if($rate_from == NULL) {
            $rate_from = 0;
        }
        if ($rate_to == Null) {
            $rate_to = 0;
        }

        $previous_url = url()->previous();
        //----invst means investment
        $invst = array();
        $invst['invst_type'] = $request->invst_type;
        $invst['invst_person_type'] = $request->invst_person;
        $invst['invst_amount_range'] = $request->invst_amount;
        $invst['invst_tenure_rate'] = $request->invst_period;
        //$invst['loan_interest_rate'] = $request->invst_amount;
        //$invst['loan_monthly_interest'] = 930;
        //$invst['loan_interest_payable'] = 4525;
        $invst['invst_interest_rate_from'] = $rate_from;
        $invst['invst_interest_rate_to'] = $rate_to;

        $invst['invst_features_benefits'] = $request->data_fsr;
        $invst['invst_requirements'] = $request->data_req;
        $invst['invst_eligibility'] = $request->data_elig;
        $invst['bank_id'] = $request->bank_id;
        DB::table('investments')->insert($invst);

        Session::put('insert_suc', 'Data Inserted Successfully!');
        return redirect($previous_url);
    }
}
