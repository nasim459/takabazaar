<?php

namespace App\Http\Controllers\bank;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Model\bank\Bank;

class BankController extends Controller
{
    //----Loan Information(loan-all_file loan_file_view)
    public function bank_file_view($child) {

        //$route = Route::getFacadeRoot()->current()->uri();
        if ($child == 'list'){
            $file_open = 'ap.bank.bank_list';
            $bank_view = Bank::orderBy('id', 'DESC')->get();

        } elseif ($child == 'gride') {
            $file_open = 'ap.bank.bank_gride';
            $bank_view = Bank::orderBy('id', 'DESC')->get();
        }

        $count = count($bank_view);
        Session::put('count', $count);

        $bank = view($file_open, compact('bank_view'));
        return view('ap_master')->with('maincontent', $bank);
    }
}
