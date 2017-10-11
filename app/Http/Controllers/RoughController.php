<?php

namespace App\Http\Controllers;

use App\Http\Controllers\fe\app\reviewRaingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RoughController extends Controller
{
    //----Person Information(loan-all_file view_file)
    public function person($offering, $select_psn) {

        //$child= Route::getFacadeRoot()->current()->uri();
        //echo  $child;  exit();
        //$previous_url = url()->previous();

        //----start select_person
        if($select_psn == 'salaried') {
            Session::put('person', '1');

        } elseif ($select_psn == 'business') {
            Session::put('person', '2');

        } elseif ($select_psn == 'others') {
            Session::put('person', '3');

        } else{
            return back();
        }
        //----end select_person

        //----start crm_module-----------------------------------------------------------
        switch($offering){
            case "loan-home":
                return redirect('loan-home');
                break;

            case "loan-car":
                return redirect('loan-car');
                break;

            case "loan-personal":
                return redirect('loan-personal');
                break;

            case "loan-sme":
                return redirect('loan-sme');
                break;

            case "loan-working-capital":
                return redirect('loan-working-capital');
                break;

            case "loan-others":
                return redirect('loan-others');
                break;

            case "investment-saving":
                return redirect('investment-saving');
                break;

            case "investment-fixed":
                return redirect('investment-fixed');
                break;

            case "investment-mutual":
                return redirect('investment-mutual');
                break;

            case "insurance-life":
                return redirect('insurance-life');
                break;

            case "insurance-motor-bike":
                return redirect('insurance-motor-bike');
                break;

            case "insurance-motor-car":
                return redirect('insurance-motor-car');
                break;

            case "insurance-marine":
                return redirect('insurance-marine');
                break;

            case "insurance-fire":
                return redirect('insurance-fire');
                break;

            case "insurance-accident":
                return redirect('insurance-accident');
                break;

            case "insurance-health":
                return redirect('insurance-health');
                break;

            default:
                return back();
        }
        //----end crm_module--------------------------------------------------------------
    }
}
