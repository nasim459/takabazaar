<?php

namespace App\Http\Controllers\card;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Model\loan\Loan;
use App\Model\bank\Bank;

class CardController extends Controller
{
    //----Loan Information(loan-all_file loan_file_view)
    public function card_file_view($child) {

        //$route = Route::getFacadeRoot()->current()->uri();
        if ($child == 'debit'){
            $file_open = 'ap.card.card_debit';
            $loan_view = Loan::all()->where('loan_type', '1');

        } elseif ($child == 'credit') {
            $file_open = 'ap.card.card_credit';
            $loan_view = Loan::all()->where('loan_type', '2');

        }

        $count = count($loan_view);
        Session::put('count', $count);
        $bank_view = Bank::all();

        $loan = view($file_open, compact('loan_view', 'bank_view'));
        return view('ap_master')->with('maincontent', $loan);
    }
}
