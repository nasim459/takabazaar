<?php

namespace App\Http\Controllers\video;

use App\Model\video\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class VideoController extends Controller
{
    //----Video Information(video-info video_file_view)
    public function video_file_view() {

        $route = Route::getFacadeRoot()->current()->uri();
        if ($route == 'video-info'){
            $file_open = 'ap.video.video_info';
            $video_view = Video::orderBy('v_p_location', 'ASC')->get();
            //dd($video_view);

        } elseif ($route == 'video-watch') {
            $file_open = 'ap.video.video_watch';
            $video_view = Video::all();
            //dd($video_view);

        }

        $count = count($video_view);
        Session::put('count', $count);
        //$bank_view = Bank::all();

        $loan = view($file_open, compact('video_view'));
        return view('ap_master')->with('maincontent', $loan);
    }
}
