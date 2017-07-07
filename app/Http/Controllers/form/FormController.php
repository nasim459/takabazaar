<?php

namespace App\Http\Controllers\form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
use App\model\advertise\Advertise;
use App\Model\bank\Bank;

class FormController extends Controller
{
    //----Loan Information(loan-all_file loan_file_view)
    public function form_file_view($child) {

        //$route = Route::getFacadeRoot()->current()->uri();
        if ($child == 'loan'){
            $file_open = 'ap.form.form_loan';

        } elseif ($child == 'investment') {
            $file_open = 'ap.form.form_investment';

        } elseif ($child == 'insurance') {
            $file_open = 'ap.form.form_insurance';

        } elseif ($child == 'card') {
            $file_open = 'ap.form.form_card';
            //$loan_view = Investment::all()->where('invst_type', '3'); //invst_type=3 means mutual_account

        } elseif ($child == 'bank') {
            $file_open = 'ap.form.form_bank';

        } elseif ($child == 'advertise') {
            $file_open = 'ap.form.form_advertise';
        }

        $bank_view = Bank::all();
        $loan = view($file_open, compact('bank_view'));
        return view('ap_master')->with('maincontent', $loan);
    }




    //----Form Loan Information(form-loan loan_form_add)
    public function loan_form_add() {
        $bank_view = Bank::all();
        //dd($bank_view);

        $rental = view('ap.form.form_loan', compact('bank_view'));
        return view('ap_master')->with('maincontent', $rental);
    }

    //----Form Loan Information(form-loan loan_form_add)
    public function loan_form_save(Request $request) {
        $all = $request->all();
        dd($all);

        $rate_from = $request->f_rate_from;
        $rate_to = $request->f_rate_to;
        if($rate_from == NULL) {
            $rate_from = 0;
        } elseif ($rate_to == Null) {
            $rate_to = 0;
        }

        /*
        |--------------------------------------------------------------------------
        | Formula of Equated Monthly Installment
        | --------------------------------------
        | EMI = p*r*{(1+r)^n \ [(1+r)^n-1]}
        |   p = principal_amount_or_loan_amount
        |   d = duration_of_manths_or_years
        |   r = periodic interest_rate
        |--------------------------------------------------------------------------
        */

        //-------------------------------------------------------------------------
        $p = 100000; //----p means principal_amount_or_loan_amount
        $d = 1; //----d means duration_of_manths_or_years
        $i_r = 8.5; //----i_r means interest_rate
        //$year = 2;
        $n = $d*12; //----n means no_of_duration_month
        $i_r_n = $i_r/12; //----12 means 1_year_equal_is_12_month----calculate_by_month
        $r = $i_r_n/100; //----100 means rate_of_percent

        //$r = ''; //----interest_rate
        //$r_one = (1+$r)^$n;
        //----do_search_google_for_calculate_square_function----
        //1+$r);
        $f_p = $p * $r; //----$f_p means first_part_of_formula
        $s_p = $p * $r; //----$s_p means secound_part_of_formula
        //        $e_m_i = $f_p * $s_p;
        //--------------------------------------------------------------------------












        $loan = array();
        $loan['loan_type'] = $request->l_type;
        $loan['loan_person_type'] = $request->l_person;
        $loan['loan_amount'] = $request->l_amount;
        $loan['loan_period'] = $request->l_period;
        $loan['loan_interest_rate'] = $request->l_interest_rate;
        $loan['loan_monthly_interest'] = 930;
        $loan['loan_interest_payable'] = 4525;
        $loan['loan_flating_rate_form'] = $rate_from;
        $loan['loan_flating_rate_to'] = $rate_to;
        $loan['loan_features_bfenefits'] = $request->l_fsr;
        $loan['loan_requirements'] = $request->l_req;
        $loan['loan_eligibility'] = $request->l_elig;
        $loan['bank_id'] = $request->bank_id;
        DB::table('loans')->insert($loan);

        Session::put('insert_suc', 'Data Inserted Successfully!');
        return redirect('form-loan');
    }
}
