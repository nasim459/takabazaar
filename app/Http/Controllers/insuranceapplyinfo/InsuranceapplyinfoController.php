<?php

namespace App\Http\Controllers\insuranceapplyinfo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
use App\Model\insuranceapplyinfo\Insuranceapplyinfo;

class InsuranceapplyinfoController extends Controller
{
    //----InsuranceApplyInfo Information(insurance-apply-info insurance_apply_file_view)
    public function insurance_apply_file_view() {

        $route = Route::getFacadeRoot()->current()->uri();
        if ($route == 'insurance-apply-info'){
            $file_open = 'ap.insuranceapplyinfo.insurance_apply_info';
            $insurance_apply_view = Insuranceapplyinfo::orderBy('id', 'DESC')->get();
            //dd($insurance_apply_view);
        }

        $count = count($insurance_apply_view);
        Session::put('count', $count);

        $insurance_apply = view($file_open, compact('loan_view', 'insurance_apply_view'));
        return view('ap_master')->with('maincontent', $insurance_apply);
    }
}
