<?php

namespace App\Http\Controllers\fe\app;

use App\Model\loan\Loan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

class ViewFileController extends Controller
{
    //----Loan Information(loan-all_file view_file)
    public function view_file() {

        $child= Route::getFacadeRoot()->current()->uri();
        //echo  $child;  exit();
        $previous_url = url()->previous();

        //----start crm_module-----------------------------------------------------------
        switch($child){
            case "/":
                $file_open = 'fe.app.home';
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            case "loan-home-api":
                $file_open = 'fe.loan.loan_home';
                $loan_view = Loan::all()->where('loan_type', '3');
                return $loan_view;
                //dd($loan_view);
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            case "loan-home":
                $file_open = 'fe.loan.loan_home';
                //dd($loan_view);
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            case "investment-saving":
                $file_open = 'fe.investment.investment_saving_account';
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            case "insurance-life":
                $file_open = 'fe.insurance.insurance_life';
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            case "card-credit":
                $file_open = 'fe.card.card_credit';
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            default:
                Session::put('msg_error', 'Using Wrong Information???');
                return redirect($previous_url);
        }
        //----end crm_module--------------------------------------------------------------

        //$count = count($data_view);
        //Session::put('count', $count);

        $open_file = view($file_open);
        //$open_file = view($file_open, compact('data_view'));
        return view('fe_master')->with('fe_maincontent', $open_file);
    }


    //----Blog (blog view_file_blog)
    public function view_file_blog() {

        $child= Route::getFacadeRoot()->current()->uri();
        //echo  $child;  exit();
        $previous_url = url()->previous();

        //----start crm_module-----------------------------------------------------------
        switch($child){
            case "blog":
                $file_open = 'fe.blog.blog';
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            case "contact-us":
                $file_open = 'fe.info.contact_us';
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            case "about-us":
                $file_open = 'fe.info.about_us';
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            default:
                Session::put('msg_error', 'Using Wrong Information???');
                return redirect($previous_url);
        }
        //----end crm_module--------------------------------------------------------------

        //$count = count($data_view);
        //Session::put('count', $count);

        $open_file = view($file_open);
        //$open_file = view($file_open, compact('data_view'));
        return view('fe_master')->with('fe_maincontent', $open_file);
    }
}
