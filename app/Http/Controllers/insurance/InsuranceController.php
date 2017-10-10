<?php

namespace App\Http\Controllers\insurance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Model\loan\Loan;
use App\Model\bank\Bank;
use App\Model\insurance\Insurance;

class InsuranceController extends Controller
{
    //----Insurance Information(Insurance-all_file insurance_file_view)
    public function insurance_file_view($child) {

        //$route = Route::getFacadeRoot()->current()->uri();
        if ($child == 'life'){
            $file_open = 'ap.insurance.insurance_life';
            $loan_view = Insurance::orderBy('id', 'DESC')->with('bank')->where('insr_type', '1')->get();
            //dd($loan_view);

        } elseif ($child == 'motor') {
            $file_open = 'ap.insurance.insurance_motor';
            $loan_view = Insurance::orderBy('id', 'DESC')->with('bank')->where('insr_type', '2')->get();

        } elseif ($child == 'marine') {
            $file_open = 'ap.insurance.insurance_marine';
            $loan_view = Insurance::orderBy('id', 'DESC')->with('bank')->where('insr_type', '2')->get();

        } elseif ($child == 'fire') {
            $file_open = 'ap.insurance.insurance_fire';
            $loan_view = Insurance::orderBy('id', 'DESC')->with('bank')->where('insr_type', '3')->get();

        }  elseif ($child == 'accident') {
            $file_open = 'ap.insurance.insurance_accident';
            $loan_view = Insurance::orderBy('id', 'DESC')->with('bank')->where('insr_type', '4')->get();
        }  elseif ($child == 'health') {
            $file_open = 'ap.insurance.insurance_health';
            $loan_view = Insurance::orderBy('id', 'DESC')->with('bank')->where('insr_type', '7')->get();
        }

        $count = count($loan_view);
        Session::put('count', $count);
        $bank_view = Bank::all();

        $loan = view($file_open, compact('loan_view', 'bank_view'));
        return view('ap_master')->with('maincontent', $loan);
    }
}
