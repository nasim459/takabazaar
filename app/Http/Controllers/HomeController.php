<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    //
    public function dboard() {
        $master = view('ap.dboard_home');
        return view('ap_master')
                ->with('maincontent', $master);
    }
    
    public function people() {
        $show_rental = DB::table('tbl_angular_js')
                ->select('tbl_angular_js.*')
                ->get();
//        echo '<pre>';
//        print_r($show_rental);
//        exit();
        //return $show_rental;
        
        
        $rental = view('ap.people.info_rental')
                ->with('show_rental', $show_rental);
        
        $master = view('ap.people.sub_master_people')
                ->with('people_content', $rental);
        return view('ap_master')
                ->with('maincontent', $master);
    }
    //----show_people by angular
    public function show_people() {
        $show_rental = DB::table('tbl_angular_js')
                ->select('tbl_angular_js.*')
                ->get();
        return $show_rental;
}
    
    public function people_rough() {
        $rental = view('ap.people.info_rental');
        
        $master = view('ap.people.sub_master_people')
                ->with('people_content', $rental);
        return view('ap_master')
                ->with('maincontent', $master);
    }
    
    public function details_people() {
        $master = view('ap.people.info_rental_details');
        return view('ap_master')
                ->with('maincontent', $master);
    }
    
    public function all_people() {
        $rental = view('ap.people.info_rental_all');
        
        $master = view('ap.people.sub_master_people')
                ->with('people_content', $rental);
        return view('ap_master')
                ->with('maincontent', $master);
    }

    public function all_profile_people() {
        $rental = view('ap.people.info_rental_all_profile');
        
        $master = view('ap.people.sub_master_people')
                ->with('people_content', $rental);
        return view('ap_master')
                ->with('maincontent', $master);
    }

    public function image_profile_people() {
        $rental = view('ap.people.info_rentall_profile_image');
        
        $master = view('ap.people.sub_master_people')
                ->with('people_content', $rental);
        return view('ap_master')
                ->with('maincontent', $master);
    }
    
    //----form-panel
    public function form_people() {
        $master = view('ap.people.info_rental_form');
        return view('ap_master')
                ->with('maincontent', $master);
    }
    
    //----login-panel
    public function login_people() {
        return view('ap.access.access_login');
    }

    
    
    
    
    
    //----info_entrepreneur personal information
    public function info_entrepreneur() {
        $rental = view('ap.people.info_entrepreneur');
        
        $master = view('ap.people.sub_master_people')
                ->with('people_content', $rental);
        return view('ap_master')
                ->with('maincontent', $master);
    }
}
