<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\applying\Applying;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class DashBoardController extends Controller
{
    //
    public function home_dboard() {

        //$apply_alert = Applying::all()->where('aply_status', 1);
        //dd($apply_alert);
        //$count = count($apply_alert);
        //echo $count;
        //Session::put('count_alert', $count);
        //$n_alert = Session::get('count_alert');
        //echo $n_alert;


        $master = view('ap.dboard_home');
        return view('ap_master')
                ->with('maincontent', $master);
    }
    
    //
    public function regi_dboard() {
        $master = view('ap.dboard_regi');
        return view('ap_master')
                ->with('maincontent', $master);
    }
}
