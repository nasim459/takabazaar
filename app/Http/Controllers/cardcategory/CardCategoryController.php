<?php

namespace App\Http\Controllers\cardcategory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Model\bank\Bank;
use App\Model\cardcategorie\Cardcategorie;

class CardCategoryController extends Controller
{
    //----Loan Information(loan-all_file loan_file_view)
    public function cardcategory_file_view($child) {

        //$route = Route::getFacadeRoot()->current()->uri();
        if ($child == 'list'){
            $file_open = 'ap.cardcategory.cardcategory_list';

        } elseif ($child == 'gride') {
            $file_open = 'ap.cardcategory.cardcategory_gride';
        }

        $cardcategory_view = Cardcategorie::all();
        $count = count($cardcategory_view);
        Session::put('count', $count);

        $view_file = view($file_open, compact('cardcategory_view'));
        return view('ap_master')->with('maincontent', $view_file);
    }
}
