<?php

namespace App\Http\Controllers\fe\app;

use App\Model\bank\Bank;
use App\Model\blog\Blog;
use App\Model\blog\Categories;
use App\Model\fe\app\About;
use App\Model\loan\Loan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

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
                $loan_view = Loan::with(['bank'])->get();
//                $loan_view = Loan::with(['bank'])->where('loan_type', '3')->get();
//                $loan_view = Bank::all()->get();
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
                $file_open = 'fe.blog.blog_public';
                $data_view = Blog::orderBy('blog_hit_count', 'desc')->where('blog_control', 1)->limit(9)->get();
                $data_view_one = Blog::orderBy('id', 'DESC')->limit(1)->get();
                $blog_category = Categories::orderBy('id', 'DESC')->limit(10)->get();
                $blog_category_all = Categories::all();
                //dd($data_view_one);

                break;
            case "blog-user-profile":
                $file_open = 'fe.blog.blog_user_profile';
                $data_view = Blog::orderBy('id', 'DESC')->get();
                $blog_category = Categories::all();
                //dd($data_view);

                break;
            case "contact-us":
                $file_open = 'fe.info.contact_us';
                $data_view = Blog::orderBy('id', 'DESC')->get();
                //dd($data_view);

                break;
            case "about-us":
                $file_open = 'fe.info.about_us';
                $data_view = About::where('status', 1)->get();
                //dd($data_view);

                break;
            default:
                Session::put('msg_error', 'Using Wrong Information???');
                return redirect($previous_url);
        }
        //----end fe_blog_module---------------------------------------------------------------

        $count = count($data_view);
        Session::put('count', $count);

        $open_file = view($file_open);
        $open_file = view($file_open, compact('data_view', 'data_view_one', 'blog_category', 'blog_category_all'));
        return view('fe_master')->with('fe_maincontent', $open_file);
    }

    //----Blog (blog view_file_blog)
    public function view_file_details($id, $blog_title) {

        $child= Route::getFacadeRoot()->current()->uri();
        //echo  $child;  exit();
        $previous_url = url()->previous();

        $file_open = 'fe.blog.blog_public_details';
        $data_view = Blog::orderBy('blog_hit_count', 'desc')->where('blog_control', 1)->limit(9)->get();
        $data_view_one = Blog::where('id', $id)->get();
        //dd($data_view_one);
        $blog_category = Categories::orderBy('id', 'DESC')->limit(10)->get();
        $blog_category_all = Categories::all();

        //----Start Update Blog Hit_Count
        //echo $data_view[0]->blog_hit_count;exit();
        DB::table('blogs')
            ->where('id', $id)
            ->update(['blog_hit_count' => $data_view_one[0]->blog_hit_count +1]);
        //----End Update Blog Hit_Count

        $count = count($data_view);
        Session::put('count', $count);

        $open_file = view($file_open);
        $open_file = view($file_open, compact('data_view', 'data_view_one', 'blog_category', 'blog_category_all'));
        return view('fe_master')->with('fe_maincontent', $open_file);
    }

    //----Blog (blog view_file_blog)
    public function view_file_category($id) {

        $child= Route::getFacadeRoot()->current()->uri();
        //echo  $child;  exit();
        $previous_url = url()->previous();

        $file_open = 'fe.blog.blog_category';
        //$data_view = Blog::orderBy('blog_hit_count', 'desc')->limit(9)->get();
        $data_view = Blog::where('category_id', $id)->get();
        $data_view_one = Blog::orderBy('id', 'DESC')->limit(1)->get();
        $blog_category = Categories::orderBy('id', 'DESC')->limit(10)->get();
        $blog_category_all = Categories::all();

        $count = count($data_view);
        Session::put('count', $count);

        $open_file = view($file_open);
        $open_file = view($file_open, compact('data_view', 'data_view_one', 'blog_category', 'blog_category_all'));
        return view('fe_master')->with('fe_maincontent', $open_file);
    }
}
