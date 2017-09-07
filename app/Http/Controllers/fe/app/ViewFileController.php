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
            case "loan-car":
                $file_open = 'fe.loan.loan_car';
                //dd($loan_view);
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            case "loan-personal":
                $file_open = 'fe.loan.loan_personal';
                //dd($loan_view);
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            case "loan-sme":
                $file_open = 'fe.loan.loan_sme';
                //dd($loan_view);
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            case "loan-working-capital":
                $file_open = 'fe.loan.loan_working_capital';
                //dd($loan_view);
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            case "loan-others":
                $file_open = 'fe.loan.loan_others';
                //dd($loan_view);
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            case "investment-saving":
                $file_open = 'fe.investment.investment_saving';
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            case "investment-fixed":
                $file_open = 'fe.investment.investment_fixed';
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            case "investment-mutual":
                $file_open = 'fe.investment.investment_mutual';
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            case "insurance-life":
                $file_open = 'fe.insurance.insurance_life';
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            case "insurance-motor-bike":
                $file_open = 'fe.insurance.insurance_motor_bike';
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            case "insurance-motor-car":
                $file_open = 'fe.insurance.insurance_motor_car';
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            case "insurance-marine":
                $file_open = 'fe.insurance.insurance_marine';
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            case "insurance-fire":
                $file_open = 'fe.insurance.insurance_fire';
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            case "insurance-accident":
                $file_open = 'fe.insurance.insurance_accident';
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            case "card-credit":
                $file_open = 'fe.card.card_credit';
                //$data_view = Client::all();
                //$rough_view = Packageitemdefault::all();

                break;
            case "card-debit":
                $file_open = 'fe.card.card_debit';
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

        //----start fe_blog_module-----------------------------------------------------------
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
        //----end fe_blog_module---------------------------------------------------------------

        //$count = count($data_view);
        //Session::put('count', $count);

        $open_file = view($file_open);
        //$open_file = view($file_open, compact('data_view'));
        return view('fe_master')->with('fe_maincontent', $open_file);
    }
}
