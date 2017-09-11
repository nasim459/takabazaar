<?php

namespace App\Http\Controllers\info;

use App\Model\fe\app\About;
use App\Model\fe\app\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    //----Info Information(info/{child} info_file_view)
    public function info_file_view($child) {

        //$route = Route::getFacadeRoot()->current()->uri();
        if ($child == 'team-member'){
            $file_open = 'ap.info.info_about_us';
            $info_view = About::all();
            //dd($info_view);

        } elseif ($child == 'contact-us'){
            $file_open = 'ap.info.info_contact_us';
            $info_view = Contact::all();
            //dd($info_view);
        }


        //$bank_view = Applying::all();
        $count = count($info_view);
        Session::put('count', $count);

        $bank = view($file_open, compact('info_view'));
        return view('ap_master')->with('maincontent', $bank);
    }
}
