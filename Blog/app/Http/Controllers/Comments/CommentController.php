<?php

namespace App\Http\Controllers\Comments;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateCommentRequest;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function comment(ValidateCommentRequest $request)
    {
        if(Auth::user()):
            $comment = new Comment;
            $comment->record_category = $request->category;
            $comment->comment = $request->comment;
            $comment->user_id = Auth::user()->id;
            $comment->save();
        endif;
        
       if($comment){
           return redirect()->back();
       }
    }

    public function deleteComment($id)
    {
        $user = auth()->user();
        
        $comment = Comment::findOrFail($id);
        
        if($comment->user_id == $user->id):
            $comment->delete();
        endif;

        return redirect()->back();
    }
}
