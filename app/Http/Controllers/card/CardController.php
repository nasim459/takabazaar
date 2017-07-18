<?php

namespace App\Http\Controllers\card;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Session;
use DB;
use App\Model\bank\Bank;
use App\Model\card\Card;
use App\Model\cardcategorie\Cardcategorie;
use App\Model\carddebit\Carddebit;

class CardController extends Controller
{
    //----Loan Information(loan-all_file loan_file_view)
    public function card_file_view($child) {

        //$route = Route::getFacadeRoot()->current()->uri();
        if ($child == 'credit'){
            $file_open = 'ap.card.card_credit';
            $card_view = Card::all();

        } elseif ($child == 'debit') {
            $file_open = 'ap.card.card_debit';
            $card_view = Carddebit::all();
        }

        $count = count($card_view);
        Session::put('count', $count);
        $bank_view = Bank::all();
        $cardcategorie_view = Cardcategorie::all();

        $loan = view($file_open, compact('card_view', 'bank_view', 'cardcategorie_view'));
        return view('ap_master')->with('maincontent', $loan);
    }
}
