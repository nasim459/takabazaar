<?php

namespace App\Http\Controllers\fe\app\blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BlogUserController extends Controller
{
    //Blog Category Save
    public function blog_user_insert(Request $request)
    {
        //dd($request->all());
        $insert_save = $request->insert_save;

        //----start ap_blog_module-----------------------------------------------------------
        switch($insert_save){
            case "insert_save":
                $save = array();

                $save['name'] = $request->name;
                $save['email'] = $request->email;
                $save['password'] = bcrypt($request->pass);
                DB::table('users')->insert($save);

                //Session::put('msg', 'Registration Inserted Successfully!!!');
                return redirect('/');

                break;
            default:

                /*DB::table('categories')
                    ->where('id', $request->c_id)
                    ->update(['category_name' => $category_name]);*/

                Session::put('msg', 'Category Updated Successfully!!!');
                return redirect('blog-category');
        }
        //----end ap_blog_module---------------------------------------------------------------
    }
}
