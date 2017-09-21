<?php

namespace App\Http\Controllers\form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FormVideoController extends Controller
{
    //----Form Update Video(form-video-save  save_video_form)
    public function save_video_form(Request $request)
    {
        //dd($request->all());
        $previous_url = url()->previous();

        //------this two line for data_update
        $data_ud = $request->data_ud;
        $id = $request->id;

        $data = array();
        $data['v_name'] = $request->name;
        $data['v_p_location'] = $request->location;
        $data['v_youtube_link'] = $request->link;
        $data['v_embed_code'] = $request->code;

        if(($data_ud == 'data_ud') && ($id != NULL))
        {
            //------start_data_update
            DB::table('videos')->where('id', $id)->update($data);
            Session::put('msg_suc', 'Data Updated Successfully!');
            //------end_data_update
        } else {
            //------start_data_insert
            DB::table('videos')->insert($data);
            Session::put('msg_suc', 'Data Inserted Successfully!');
            //------end_data_insert
        }

        return redirect($previous_url);
    }
}
