<?php

namespace App\Http\Controllers\fe\app\blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BlogUserCommentReplayController extends Controller
{
    //----Blog Comment_&_Replay (blog-user-comment-replay blog_user_comment_replay)
    public function blog_user_comment_replay(Request $request)
    {
        //dd($request->all());
        $previous_url = url()->previous();
        $first_user = $request->first_user;

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $comment = $request->comment;
        $blog_id = $request->id;

        $comment_id = $request->comment_id;

        //----Start form validation
        if($first_user==NULL || $name==NULL || $email==NULL || $password==NULL || $comment==NULL || $blog_id==NULL){
            Session::put('fe_error_blog', 'Give valid information?');
            return redirect($previous_url);
        } else {
            if($first_user != 'first_user'){
                if($first_user != 'replay_user') {
                    Session::put('fe_error_blog', 'Enter Correct Information?');
                    return redirect($previous_url);
                }
            }
        }
        //----End form validation

        $save = array();
        $save['user_name'] = $name;
        $save['user_email'] = $email;
        $save['user_pass'] = $password;
        $bloguser_insertGetId = DB::table('blogusers')->insertGetId($save);

        if($first_user == 'first_user')
        {
            //----start comment area
            $save = array();
            $save['comment_desc'] = $comment;
            $save['blog_id'] = $blog_id;
            $save['bloguser_id'] = $bloguser_insertGetId;
            DB::table('comments')->insertGetId($save);
            //----end comment area

        } else {
            //----start replay area
            $save = array();
            $save['comment_replay_desc'] = $comment;
            $save['blog_id'] = $blog_id;
            $save['bloguser_id'] = $bloguser_insertGetId;
            $save['comment_id'] = $comment_id;
            DB::table('commentreplaies')->insertGetId($save);
            //----end replsy area
        }

        Session::put('fe_msg_blog', 'Your comment approved successfully');
        return redirect($previous_url);
    }
}
