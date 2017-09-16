<?php

namespace App\Http\Controllers\fe\app;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ViewFilePersonController extends Controller
{
    //----Loan Information(loan-home/{person} view_file_person)
    public function view_file_person($person)
    {
        $route_url = Route::getFacadeRoot()->current()->uri();
        //echo  $route_url.'<br>'; echo $person;  exit();
        $previous_url = url()->previous();

        //----Start Loan View Part
        if($route_url == "loan-home/{person}"){
            switch($person){
                case "salaried":
                    $file_open = 'fe.loan.loan_home';
                    Session::put('person', 's_p');    //----s_p meand salaried_person
                    break;

                case "business":
                    $file_open = 'fe.loan.loan_home';
                    Session::put('person', 'b_p');    //----b_p meand business_person
                    break;

                case "others":
                    $file_open = 'fe.loan.loan_home';
                    Session::put('person', 'o_p');    //----o_p meand others_person
                    break;
                default:
                    Session::put('fe_error_msg', 'Please don\'t abuse, Try use correctly.');
                    return redirect($previous_url);
            }
        } elseif ($route_url == "loan-home/{person}") {

        }

        //----End Loan View Part

        //----start crm_module-----------------------------------------------------------

        //----end crm_module--------------------------------------------------------------

        //$count = count($data_view);
        //Session::put('count', $count);

        $open_file = view($file_open);
        //$open_file = view($file_open, compact('data_view'));
        return view('fe_master')->with('fe_maincontent', $open_file);
    }
}
