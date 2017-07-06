<?php

namespace App\Http\Controllers\loan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Model\loan\Loan;
use App\Model\bank\Bank;

class LoanController extends Controller
{
    //----Loan Information(loan-all_file loan_file_view)
    public function loan_file_view($child) {

        //$route = Route::getFacadeRoot()->current()->uri();
        if ($child == 'sme'){
            $file_open = 'ap.loan.loan_sme';
            $loan_view = Loan::all()->where('loan_type', '1');

        } elseif ($child == 'car') {
            $file_open = 'ap.loan.loan_car';
            $loan_view = Loan::all()->where('loan_type', '2');

        } elseif ($child == 'home') {
            $file_open = 'ap.loan.loan_home';
            $loan_view = Loan::all()->where('loan_type', '3');

        } elseif ($child == 'personal') {
            $file_open = 'ap.loan.loan_personal';
            $loan_view = Loan::all()->where('loan_type', '4');

        }  elseif ($child == 'others') {
            $file_open = 'ap.loan.loan_others';
            $loan_view = Loan::all()->where('loan_type', '5');

        }  elseif ($child == 'working-capital') {
            $file_open = 'ap.loan.loan_working_capital';
            $loan_view = Loan::all()->where('loan_type', '6');
        }

        $count = count($loan_view);
        Session::put('count', $count);
        $bank_view = Bank::all();

        $loan = view($file_open, compact('loan_view', 'bank_view'));
        return view('ap_master')->with('maincontent', $loan);
    }
}
