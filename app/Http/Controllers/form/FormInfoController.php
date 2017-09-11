<?php

namespace App\Http\Controllers\form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class FormInfoController extends Controller
{
    //Blog Category Save
    public function info_form(Request $request)
    {
        //dd($request->all());
        $previous_url = url()->previous();
        $insert_update = $request->insert_update;

        //------start_information_insert
        //------start_picture
        $image = $request->file('image');

        $about_name	 = $request->name;
        $about_designation = $request->designation;
        $about_fb = $request->fb_link;
        $about_google = $request->google_link;
        $about_twitter = $request->twitter_link;

        if (isset($image)) {
            $image_name = str_random(20);
            //$ext = strtolower($image->getClientOriginalExtension());
            $ext = 'jpg';    //----define jpg extension
            $destination_path = 'ap/images/about_img/';
            $image_full_name = $image_name . '.' . $ext;
            $image_url = $destination_path . $image_full_name;
            $success = $image->move($destination_path, $image_full_name);

            if ($success) {
                $save = array();
                $save['about_name'] = $about_name;
                $save['about_designation'] = $about_designation;
                $save['about_fb'] = $about_fb;
                $save['about_google'] = $about_google;
                $save['about_twitter'] = $about_twitter;
                $save['about_image'] = $image_url;

                if($insert_update == 'insert_update'){

                    //----start insert_update area
                    DB::table('abouts')
                        ->where('id', $request->id)
                        ->update($save);
                    //----end insert_update area
                } else {
                    //----start insert_save area
                    DB::table('abouts')->insert($save);
                    //----end insert_save area
                }

                Session::put('msg_suc', 'Data Updated Successfully!');
                return Redirect::to($previous_url);
            }

        } else {
            $save = array();
            $save['about_name'] = $about_name;
            $save['about_designation'] = $about_designation;
            $save['about_fb'] = $about_fb;
            $save['about_google'] = $about_google;
            $save['about_twitter'] = $about_twitter;

            if($insert_update == 'insert_update'){
                //----start insert_update area
                DB::table('abouts')
                    ->where('id', $request->id)
                    ->update($save);
                //----end insert_update area
            } else {
                //----start insert_save area
                DB::table('abouts')->insert($save);
                //----end insert_save area
            }

            Session::put('msg_suc', 'Data Inserted Successfully!');
            return Redirect::to($previous_url);
        }
        //------end_picture
        //------end_information_insert
    }//Blog Category Save

    //
    public function contact_info_form(Request $request)
    {
        //dd($request->all());
        $previous_url = url()->previous();

        $contact_name = $request->name;
        $contact_email = $request->email;
        $contact_title = $request->title;
        $contact_message = $request->message;

        $save = array();
        $save['contact_name'] = $contact_name;
        $save['contact_email'] = $contact_email;
        $save['contact_title'] = $contact_title;
        $save['contact_message'] = $contact_message;
        DB::table('contacts')->insert($save);

        Session::put('msg_suc', 'Message Send Successfully!!!');
        return Redirect::to($previous_url);

    }
}
