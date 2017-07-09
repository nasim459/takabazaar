<?php

namespace App\Http\Controllers\applying;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Model\applying\Applying;
use App\Model\bank\Bank;

class ApplyingController extends Controller
{
    //----Applying Information(applying/{child} applying_file_view)
    public function applying_file_view($child) {

        //$route = Route::getFacadeRoot()->current()->uri();
        if ($child == 'info'){
            $file_open = 'ap.applying.applying_info';
            $bank_view = Applying::all();
            //$bank_view = Applying::all()->where('aply_status', '1');

        } elseif ($child == 'request') {
            $file_open = 'ap.applying.applying_request';
            //$bank_view = Applying::all();
            $bank_view = Applying::all();
            //$bank_view = Bank::find(6)->applyings;
            //dd($bank_view);

        } elseif ($child == 'pending') {
            $file_open = 'ap.applying.applying_pending';
            $bank_view = Applying::all()->where('aply_status', '2');

        } elseif ($child == 'completed') {
            $file_open = 'ap.applying.applying_completed';
            $bank_view = Applying::all()->where('aply_status', '0');
        }

        $count = count($bank_view);
        Session::put('count', $count);

        $bank = view($file_open, compact('bank_view'));
        return view('ap_master')->with('maincontent', $bank);
    }
}
