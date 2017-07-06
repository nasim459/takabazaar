<?php

namespace App\Http\Controllers\blog;

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

        $route = Route::getFacadeRoot()->current()->uri();
        if ($route == 'blog-posting'){
            $file_open = 'ap.blog.blog_post';
            $loan_view = Investment::all()->where('invst_type', '1'); //invst_type=1 means Saving_account

        } elseif ($route == 'blog-subscribers') {
            $file_open = 'ap.blog.blog_subscribers';
            $loan_view = Investment::all()->where('invst_type', '2'); //invst_type=2 means fixed_ccount

        } elseif ($route == 'blog-settings') {
            $file_open = 'ap.blog.blog_settings';
            $loan_view = Investment::all()->where('invst_type', '3'); //invst_type=3 means mutual_account

        }

        $count = count($loan_view);
        Session::put('count', $count);
        $bank_view = Bank::all();
        $loan = view($file_open, compact('loan_view', 'bank_view'));
        return view('ap_master')->with('maincontent', $loan);
    }
}
