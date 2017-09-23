<?php

namespace App\Http\Controllers\blog;

use App\Model\blog\Blog;
use App\Model\blog\Blogsubscriber;
use App\Model\blog\Bloguser;
use App\Model\blog\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Session;
use DB;
use Illuminate\Support\Facades\Route;
use App\Model\investment\Investment;
use App\Model\bank\Bank;

class BlogController extends Controller
{
    //----Loan Information(loan-all_file loan_file_view)
    public function blog_file_view() {

        $child= Route::getFacadeRoot()->current()->uri();
        //echo  $child;  exit();
        $previous_url = url()->previous();

        //----start ap_blog_module-----------------------------------------------------------
        switch($child){
            case "blog-view":
                $file_open = 'ap.blog.blog_view';
                $data_view = Blog::orderBy('id', 'desc')->get();
                //dd($data_view);

                break;
            case "blog-subscriber":
                $file_open = 'fe.info.contact_us';
                $file_open = 'ap.blog.blog_subscriber';
                $data_view = Blogsubscriber::orderBy('id', 'DESC')->get();

                break;
            case "blog-settings":
                $file_open = 'ap.blog.blog_settings';
                $data_view = Investment::all()->where('invst_type', '3'); //invst_type=3 means mutual_account

                break;
            case "blog-category":
                $file_open = 'ap.blog.blog_category';
                $data_view = Categories::all();
                //dd($data_view);

                break;
            case "blog-user":
                $file_open = 'ap.blog.blog_user';
                $data_view = Bloguser::all();
                //dd($data_view);

                break;
            default:
                Session::put('msg_error', 'Using Wrong Information???');
                return redirect($previous_url);
        }
        //----end ap_blog_module---------------------------------------------------------------

        $count = count($data_view);
        Session::put('count', $count);
        $bank_view = Bank::all();
        $loan = view($file_open, compact('data_view', 'bank_view'));
        return view('ap_master')->with('maincontent', $loan);
    }
}
