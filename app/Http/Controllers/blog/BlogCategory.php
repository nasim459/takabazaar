<?php

namespace App\Http\Controllers\blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BlogCategory extends Controller
{
    //Blog Category Save
    public function blog_category_insert(Request $request)
    {
        //dd($request->all());
        $category_name = $request->category_name;
        $insert_save = $request->insert_save;

        if($category_name == NULL){
            Session::put('msg_error', 'Write category name?');
            return redirect(url()->previous());
        }

//        else {
//
//            DB::table('categories')->insert(['category_name' => $category_name]);
//            return redirect('blog-category');
//        }

        //----start ap_blog_module-----------------------------------------------------------
        switch($insert_save){
            case "insert_save":
                DB::table('categories')->insert(['category_name' => $category_name]);
                Session::put('msg', 'Category Inserted Successfully!!!');
                return redirect('blog-category');

                break;
            default:
                DB::table('categories')
                    ->where('id', $request->c_id)
                    ->update(['category_name' => $category_name]);
                Session::put('msg', 'Category Updated Successfully!!!');
                return redirect('blog-category');
        }
        //----end ap_blog_module---------------------------------------------------------------

    }
}
