<?php

namespace App\Http\Controllers\insuranceapplyinfo;

use App\Model\banner\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
use App\Model\bank\Bank;

class InsuranceapplyinfoController extends Controller
{
    //----Banner Information(banner banner_file_view)
    public function insurance_apply_file_view() {

        $route = Route::getFacadeRoot()->current()->uri();
        if ($route == 'insurance-apply-info'){
            $file_open = 'ap.insuranceapplyinfo.insurance_apply_info';
            $loan_view = Banner::orderBy('id', 'DESC')->get();
            //$loan_view = Loan::all()->where('loan_type', '1');

        }

        $count = count($loan_view);
        Session::put('count', $count);
        $bank_view = Bank::all();

        $loan = view($file_open, compact('loan_view', 'bank_view'));
        return view('ap_master')->with('maincontent', $loan);
    }
}
