<?php

namespace App\Http\Controllers\advertise;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdvertisePublicationController extends Controller
{
    //--------------publication staus change(advertise/{id}/{status}  publication)
    public function publication($id, $status)
    {
        if($status == 0) {
            DB::table('tbl_notice')
                ->where('notice_id', $id)
                ->update(['notice_status' => '0']);
            return Redirect::to('broadcasting-notice');
        } else {
            DB::table('tbl_notice')
                ->where('notice_id', $id)
                ->update(['notice_status' => '1']);
            return Redirect::to('broadcasting-notice');
        }
    }
}
