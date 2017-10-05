<?php

namespace App\Http\Controllers\fe\app\blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class BlogUserPostController extends Controller
{
    //Blog Category Save
    public function blog_user_post_insert(Request $request)
    {
        //dd($request->all());
        $previous_url = url()->previous();
        $insert_update = $request->insert_update;

        //------start_information_insert
        //------start_picture
        $image = $request->file('image');
        $blog_title = $request->b_title;
        $blog_short_desc = $request->s_desc;
        $blog_long_desc = $request->l_desc;
        $blog_author_name = 'kamrul hassan';
        $user_id = 2;
        $category_id = $request->category_id;

        if (isset($image)) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $destination_path = 'fe/img/blog_pic/';
            $image_full_name = $image_name . '.' . $ext;
            $image_url = $destination_path . $image_full_name;
            $success = $image->move($destination_path, $image_full_name);

            if ($success) {
                $save = array();
                $save['blog_title'] = $blog_title;
                $save['blog_short_desc'] = $blog_short_desc;
                $save['blog_long_desc'] = $blog_long_desc;
                $save['blog_author_name'] = $blog_author_name;
                $save['blog_image'] = $image_full_name;
                $save['user_id'] = $user_id;
                //$save['category_id'] = $category_id;

                if($insert_update == 'insert_update'){
                    //----start insert_update area
                    DB::table('blogs')
                        ->where('id', $request->blog_id)
                        ->update($save);
                    //----end insert_update area
                } else {
                    //----start insert_save area
                    $save['category_id'] = $category_id;
                    DB::table('blogs')->insert($save);
                    //----end insert_save area
                }

                Session::put('msg_suc', 'Data Inserted Successfully!');
                return Redirect::to($previous_url);
            }
        } else {
            $save = array();
            $save['blog_title'] = $blog_title;
            $save['blog_short_desc'] = $blog_short_desc;
            $save['blog_long_desc'] = $blog_long_desc;
            $save['blog_author_name'] = $blog_author_name;
            $save['user_id'] = $user_id;
            //$save['category_id'] = $category_id;

            if($insert_update == 'insert_update'){
                //----start insert_update area
                DB::table('blogs')
                    ->where('id', $request->blog_id)
                    ->update($save);
                //----end insert_update area
            } else {
                //----start insert_save area
                $save['category_id'] = $category_id;
                DB::table('blogs')->insert($save);
                //----end insert_save area
            }

            Session::put('msg_suc', 'Data Inserted Successfully!');
            return Redirect::to($previous_url);
        }
        //------end_picture
        //------end_information_insert
    }
}
