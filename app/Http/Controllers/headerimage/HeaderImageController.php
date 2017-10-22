<?php

namespace App\Http\Controllers\headerimage;

use App\Model\headerimage\Headerimage;
use App\Model\headerimage\Sliderimage;
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
        } elseif ($child == 'slider') {

            $file_open = 'ap.header.slider_image';
            $header_image = Sliderimage::all();
        }

        $count = count($header_image);
        Session::put('count', $count);

        $bank = view($file_open, compact('header_image'));
        return view('ap_master')->with('maincontent', $bank);
    }

    //----Form-Slider(form-slider-save  header_image_form)
    public function header_image_form(Request $request) {
        //------start_information_update
        $data_ud = $request->data_ud;
        $id = $request->id;
        if($data_ud == 'slider_data_update') {
            $change = array();
            $change['slider_message'] = $request->message;
            DB::table('sliderimages')->where('id', $id)->update($change);

            Session::put('msg_suc', 'Data Updated Successfully!');
            return back();
        }
        //------end_information_update
    }
}
