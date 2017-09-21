<?php

namespace App\Http\Controllers\headerimage;

use App\Model\headerimage\Headerimage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Model\bank\Bank;

class HeaderImageController extends Controller
{
    //----Header Information(header-image header_image_file_view)
    public function header_image_file_view($child)
    {
        //$route = Route::getFacadeRoot()->current()->uri();
        if ($child == 'image'){
            $file_open = 'ap.header.header_image';
            $header_image = Headerimage::all();
        }

        $count = count($header_image);
        Session::put('count', $count);

        $bank = view($file_open, compact('header_image'));
        return view('ap_master')->with('maincontent', $bank);
    }
}
