<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public  function  getDashboard() {



        $comments = Comment::orderBy('created_at', 'desc')->get();

        return view('dashboard',['comments'=>$comments]);


    }

    public function postCreateComment(Request $request){

        $this->validate($request, [

            'text'=> 'required|max:1000'

        ]);

        $comment=new Comment();
        $comment->text = $request['text'];
        $message = 'There was an error';
        if($request->user()->comments()->save($comment)) {
            $message = 'Comment successfully created';
        }
       return redirect()->route('dashboard')->with(['massage'=>$message]);
    }

    public function deleteComment($comment_id) {

        $comment = Comment::where('id',$comment_id)->first();
        if(Auth::user()!= $comment->user) {

            return redirect()->back();
        }

        $comment->delete();

        return redirect()->route('dashboard')->with(['message'=>'Successfully deleted']);

    }

}
