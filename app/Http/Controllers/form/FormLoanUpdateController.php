<?php

namespace App\Http\Controllers\form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FormLoanUpdateController extends Controller
{
    //----Form Loan Information(form-loan loan_form_add)
    public function loan_form_update(Request $request) {
//        $all = $request->all();
//        dd($all);

        $loan = array();
        $loan['loan_type'] = $request->l_type;
        $loan['loan_person_type'] = $request->l_person;
        $loan['loan_amount'] = $request->l_amount;
        $loan['loan_period'] = $request->l_period;
        $loan['loan_interest_rate'] = $request->l_interest_rate;
        $loan['loan_monthly_interest'] = 930;
        $loan['loan_interest_payable'] = 4525;
        $loan['loan_flating_rate_form'] = $request->f_rate_from;
        $loan['loan_flating_rate_to'] = $request->f_rate_to;
        $loan['loan_features_bfenefits'] = $request->l_fsr;
        $loan['loan_requirements'] = $request->l_req;
        $loan['loan_eligibility'] = $request->l_elig;
        $loan['bank_id'] = $request->b_id;

        DB::table('loans')
            ->where('id', $request->l_id)
            ->update($loan);

        $previous_url = url()->previous();
        Session::put('insert_suc', 'Data Updated Successfully!');
        return redirect($previous_url);
    }
}
