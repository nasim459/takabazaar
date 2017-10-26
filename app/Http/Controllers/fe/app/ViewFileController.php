<?php

namespace App\Http\Controllers\fe\app;

use App\model\advertise\Advertise;
use App\Model\bank\Bank;
use App\Model\banner\Banner;
use App\Model\blog\Blog;
use App\Model\blog\Categories;
use App\Model\blog\Comment;
use App\Model\card\Card;
use App\Model\cardcategorie\Cardcategorie;
use App\Model\carddebit\Carddebit;
use App\Model\fe\app\About;
use App\Model\headerimage\Headerimage;
use App\Model\headerimage\Sliderimage;
use App\Model\insurance\Insurance;
use App\Model\investment\Investment;
use App\Model\loan\Loan;
use App\Model\video\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
                $blog_view_4 = Blog::orderBy('blog_hit_count', 'desc')->where('blog_control', 1)->limit(4)->get();
                $blog_view_8 = Blog::orderBy('blog_hit_count', 'desc')->where('blog_control', 1)->limit(4)->offset(4)->get();
                $video_view = Video::where('v_status', 1)->where('v_p_location', 1)->get();    //----v_p_location = 1 means home_page
                $header_image = Headerimage::where('header_image_type', 20)->get();    //----header_image_type = 20 means background_image_of_i_am_searching_area
                $banner_image = Banner::where('add_status', 1)->orderBy('id', 'DESC')->get();    //----add_status = 1 means publish
                $banner_value = count($banner_image); Session::put('banner_value', $banner_value);
                $slider_image = Sliderimage::where('status', 1)->limit(6)->get();    //----uhkuhkh = 1 means uhkjhk
                //dd($slider_image);
                break;

            case "loan":
                $file_open = 'fe.app.loan';
                $video_view = Video::where('v_status', 1)->where('v_p_location', 2)->get();    //----v_p_location = 1 means loan_page
                break;

            case "investment":
                $file_open = 'fe.app.investment';
                $video_view = Video::where('v_status', 1)->where('v_p_location', 3)->get();    //----v_p_location = 1 means investment_page
                break;

            case "insurance":
                $file_open = 'fe.app.insurance';
                $video_view = Video::where('v_status', 1)->where('v_p_location', 4)->get();    //----v_p_location = 1 means insurance_page
                break;

            case "card":
                $file_open = 'fe.app.card';
                $video_view = Video::where('v_status', 1)->where('v_p_location', 5)->get();    //----v_p_location = 1 means card_page
                break;

            case "loan-home-api":
                $loan_view = Loan::with(['bank', 'reviews'])->get();
                return $loan_view;

                break;
            case "investment-api":
                $loan_view = Investment::with(['bank', 'reviews'])->get();
                return $loan_view;

                break;
            case "insurance-api":
                $loan_view = Insurance::with(['bank'], 'reviews')->get();
                return $loan_view;

                break;
            case "card-credit-api":
                $loan_view = Card::with(['bank', 'cardcategorie', 'reviews'])->where('c_status', '1')->get();
                return $loan_view;

                break;
            case "card-debit-api":
                $loan_view = Carddebit::with(['bank', 'cardcategorie', 'reviews'])->where('c_status', '1')->get();
                return $loan_view;

                break;
            case "loan-home":
                $file_open = 'fe.loan.loan_home';
                //Session::put('person', 'S_p');    //----s_p meand Salaried_Person
                $header_image = Headerimage::where('header_image_type', 1)->get();    //----header_image_type = 1 means home_loan
                $advertise_image = Advertise::where('add_type', 1)->where('add_status', 1)->limit(1)->get();    //----add_type = 1 means home_loan

                break;
            case "loan-car":
                $file_open = 'fe.loan.loan_car';
                $header_image = Headerimage::where('header_image_type', 2)->get();    //----header_image_type = 2 means car_loan
                $advertise_image = Advertise::where('add_type', 2)->where('add_status', 1)->get();    //----add_type = 1 means car_loan

                break;
            case "loan-personal":
                $file_open = 'fe.loan.loan_personal';
                $header_image = Headerimage::where('header_image_type', 3)->get();    //----header_image_type = 3 means person_loan
                $advertise_image = Advertise::where('add_type', 3)->where('add_status', 1)->get();    //----add_type = 1 means person_loan

                break;
            case "loan-sme":
                $file_open = 'fe.loan.loan_sme';
                $header_image = Headerimage::where('header_image_type', 4)->get();    //----header_image_type = 4 means sme_loan
                $advertise_image = Advertise::where('add_type', 4)->where('add_status', 1)->get();    //----add_type = 1 means sme_loan

                break;
            case "loan-working-capital":
                $file_open = 'fe.loan.loan_working_capital';
                $header_image = Headerimage::where('header_image_type', 5)->get();    //----header_image_type = 5 means working_capital_loan
                $advertise_image = Advertise::where('add_type', 5)->where('add_status', 1)->get();    //----add_type = 1 means working_capital_loan

                break;
            case "loan-others":
                $file_open = 'fe.loan.loan_others';
                $header_image = Headerimage::where('header_image_type', 6)->get();    //----header_image_type = 6 means others_loan
                $advertise_image = Advertise::where('add_type', 6)->where('add_status', 1)->get();    //----add_type = 1 means others_loan

                break;
            case "investment-saving":
                $file_open = 'fe.investment.investment_saving';
                $header_image = Headerimage::where('header_image_type', 7)->get();    //----header_image_type = 7 means investment_saving
                $advertise_image = Advertise::where('add_type', 7)->where('add_status', 1)->get();    //----add_type = 1 means investment_saving

                break;
            case "investment-fixed":
                $file_open = 'fe.investment.investment_fixed';
                $header_image = Headerimage::where('header_image_type', 8)->get();    //----header_image_type = 8 means investment_fixed
                $advertise_image = Advertise::where('add_type', 8)->where('add_status', 1)->get();    //----add_type = 1 means investment_fixed

                break;
            case "investment-mutual":
                $file_open = 'fe.investment.investment_mutual';
                $header_image = Headerimage::where('header_image_type', 9)->get();    //----header_image_type = 9 means investment_mutual
                $advertise_image = Advertise::where('add_type', 9)->where('add_status', 1)->get();    //----add_type = 1 means investment_mutual

                break;
            case "insurance-life":
                $file_open = 'fe.insurance.insurance_life';
                $header_image = Headerimage::where('header_image_type', 10)->get();    //----header_image_type = 10 means sme_loan
                $advertise_image = Advertise::where('add_type', 10)->where('add_status', 1)->get();    //----add_type = 1 means sme_loan

                break;
            case "insurance-motor-bike":
                $file_open = 'fe.insurance.insurance_motor_bike';
                $header_image = Headerimage::where('header_image_type', 11)->get();    //----header_image_type = 11 means insurance_motor_bike
                $advertise_image = Advertise::where('add_type', 11)->where('add_status', 1)->get();    //----add_type = 1 means insurance_motor_bike

                break;
            case "insurance-motor-car":
                $file_open = 'fe.insurance.insurance_motor_car';
                $header_image = Headerimage::where('header_image_type', 12)->get();    //----header_image_type = 12 means insurance_motor_car
                $advertise_image = Advertise::where('add_type', 12)->where('add_status', 1)->get();    //----add_type = 1 means insurance_motor_car

                break;
            case "insurance-marine":
                $file_open = 'fe.insurance.insurance_marine';
                $header_image = Headerimage::where('header_image_type', 13)->get();    //----header_image_type = 13 means insurance_marine
                $advertise_image = Advertise::where('add_type', 13)->where('add_status', 1)->get();    //----add_type = 1 means insurance_marine

                break;
            case "insurance-fire":
                $file_open = 'fe.insurance.insurance_fire';
                $header_image = Headerimage::where('header_image_type', 14)->get();    //----header_image_type = 14 means insurance_fire
                $advertise_image = Advertise::where('add_type', 14)->where('add_status', 1)->get();    //----add_type = 1 means insurance_fire

                break;
            case "insurance-accident":
                $file_open = 'fe.insurance.insurance_accident';
                $header_image = Headerimage::where('header_image_type', 15)->get();    //----header_image_type = 15 means insurance_accident
                $advertise_image = Advertise::where('add_type', 15)->where('add_status', 1)->get();    //----add_type = 1 means insurance_accident

                break;
            case "insurance-health":
                $file_open = 'fe.insurance.insurance_health';
                $header_image = Headerimage::where('header_image_type', 15)->get();    //----header_image_type = 15 means insurance_accident
                $advertise_image = Advertise::where('add_type', 15)->where('add_status', 1)->get();    //----add_type = 1 means insurance_accident

                break;
            case "card-credit":
                $file_open = 'fe.card.card_credit';
                $header_image = Headerimage::where('header_image_type', 16)->get();    //----header_image_type = 16 means card_credit
                $advertise_image = Advertise::where('add_type', 16)->where('add_status', 1)->get();    //----add_type = 1 means card_credit
                $cardcategory =  Cardcategorie::all();

                break;
            case "card-debit":
                $file_open = 'fe.card.card_debit';
                $header_image = Headerimage::where('header_image_type', 17)->get();    //----header_image_type = 17 means card_debit
                $advertise_image = Advertise::where('add_type', 17)->where('add_status', 1)->get();    //----add_type = 1 means card_debit

                break;
            default:
                Session::put('fe_error_msg', 'Using Wrong Information???');
                return redirect($previous_url);
        }
        //----end crm_module--------------------------------------------------------------

        //$count = count($data_view);
        //Session::put('count', $count);

        //$open_file = view($file_open);
        $open_file = view($file_open, compact('blog_view_4', 'blog_view_8', 'video_view', 'header_image', 'advertise_image', 'cardcategory', 'banner_image', 'slider_image'));
        return view('fe_master')->with('fe_maincontent', $open_file);
    }


    //----Blog-User-Profile (blog-user-profile view_file_blog)
    public function view_file_blog() {

        $child= Route::getFacadeRoot()->current()->uri();
        //echo  $child;  exit();
        $previous_url = url()->previous();

        //----start fe_blog_module-----------------------------------------------------------
        switch($child){
            case "blog":
                $file_open = 'fe.blog.blog_public';
                $data_view = Blog::orderBy('blog_hit_count', 'DESC')->where('blog_status', 1)->where('blog_control', 1)->limit(9)->get();
                $data_view_one = Blog::orderBy('id', 'DESC')->where('blog_status', 1)->where('blog_control', 1)->limit(1)->get();
                $blog_category = Categories::orderBy('id', 'DESC')->limit(10)->get();
                $blog_category_all = Categories::all();
                //dd($data_view_one);

                break;
            case "blog-user-profile":
                $file_open = 'fe.blog.blog_user_profile';
                $data_view = Blog::orderBy('id', 'DESC')->where('user_id', Auth::user()->id)->get();
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
                $header_image = Headerimage::where('header_image_type', 18)->get();    //----header_image_type = 18 means about_us
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
        $open_file = view($file_open, compact('data_view', 'data_view_one', 'blog_category', 'blog_category_all', 'header_image'));
        return view('fe_master')->with('fe_maincontent', $open_file);
    }

    //----Blog Details (blog-details/{id}/{blog_title} view_file_details)
    public function view_file_details($id, $blog_title) {

        $child= Route::getFacadeRoot()->current()->uri();
        //echo  $child;  exit();
        $previous_url = url()->previous();

        $file_open = 'fe.blog.blog_public_details';
        $data_view = Blog::orderBy('blog_hit_count', 'DESC')->where('blog_status', 1)->where('blog_control', 1)->limit(9)->get();
        $data_view_one = Blog::with(['user', 'category', 'comments'])->where('id', $id)->where('blog_status', 1)->get();
        $data_comment = Comment::all();

        //dd($data_rough);

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
        $data_view_one = Blog::orderBy('id', 'DESC')->where('blog_status', 1)->where('blog_control', 1)->limit(1)->get();
        $blog_category = Categories::orderBy('id', 'DESC')->limit(10)->get();
        $blog_category_all = Categories::all();

        $count = count($data_view);
        Session::put('count', $count);

        $open_file = view($file_open);
        $open_file = view($file_open, compact('data_view', 'data_view_one', 'blog_category', 'blog_category_all'));
        return view('fe_master')->with('fe_maincontent', $open_file);
    }
}
