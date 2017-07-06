<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class DashBoardController extends Controller
{
    //
    public function home_dboard() {
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
