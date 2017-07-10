<?php

namespace App\Http\Controllers\investment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Model\investment\Investment;
use App\Model\bank\Bank;

class InvestmentController extends Controller
{
    //----Loan Information(loan-all_file loan_file_view)
    public function investment_file_view() {

        $route = Route::getFacadeRoot()->current()->uri();
        if ($route == 'investment-saving'){
            $file_open = 'ap.investment.investment_saving';
            $invst_view = Investment::get()->where('invst_type', '1'); //invst_type=1 means Saving_account
            dd($invst_view);

        } elseif ($route == 'investment-fixed') {
            $file_open = 'ap.investment.investment_fixed';
            $loan_view = Investment::all()->where('invst_type', '2'); //invst_type=2 means fixed_ccount

        } elseif ($route == 'investment-mutual') {
            $file_open = 'ap.investment.investment_mutual';
            $loan_view = Investment::all()->where('invst_type', '3'); //invst_type=3 means mutual_account
        }

        $count = count($invst_view);
        Session::put('count', $count);
        $bank_view = Bank::all();
        $bank_view_all = Bank::all();
        $loan = view($file_open, compact('invst_view', 'bank_view', 'bank_view_all'));
        return view('ap_master')->with('maincontent', $loan);
    } 
}
