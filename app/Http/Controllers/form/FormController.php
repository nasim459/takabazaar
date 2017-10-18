<?php

namespace App\Http\Controllers\form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\bank\Bank;
use App\Model\cardcategorie\Cardcategorie;

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

        } elseif ($child == 'card-debit') {
            $file_open = 'ap.form.form_card_debit';

        } elseif ($child == 'bank') {
            $file_open = 'ap.form.form_bank';

        } elseif ($child == 'advertise') {
            $file_open = 'ap.form.form_advertise';
        } elseif ($child == 'banner') {
            $file_open = 'ap.form.form_banner';
        }

        $bank_view = Bank::all();
        $cardcategorie_view = Cardcategorie::all();
        $loan = view($file_open, compact('bank_view', 'cardcategorie_view'));
        return view('ap_master')->with('maincontent', $loan);
    }
}
