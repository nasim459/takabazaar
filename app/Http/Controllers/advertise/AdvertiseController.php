<?php

namespace App\Http\Controllers\advertise;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\advertise\Advertise;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Model\loan\Loan;
use App\Model\bank\Bank;

class AdvertiseController extends Controller
{
    //----Loan Information(loan-all_file loan_file_view)
    public function advertise_file_view() {

        $route = Route::getFacadeRoot()->current()->uri();
        if ($route == 'advertise'){
            $file_open = 'ap.advertise.advertise_info';
            $loan_view = Advertise::orderBy('add_type', 'ASC')->get();
            //$loan_view = Loan::all()->where('loan_type', '1');

        } elseif ($route == 'advertise-car') {
            $file_open = 'ap.loan.loan_car';
            $loan_view = Loan::all()->where('loan_type', '2');

        }

        $count = count($loan_view);
        Session::put('count', $count);
        $bank_view = Bank::all();

        $loan = view($file_open, compact('loan_view', 'bank_view'));
        return view('ap_master')->with('maincontent', $loan);
    }
}
