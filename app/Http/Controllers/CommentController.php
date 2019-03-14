<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function postCommentAction(Request $request, int $story_id){

        $this->validate($request, [
            'comment' => 'required'
        ]);

        $comment = new Comment();

        $comment->content = $request->comment;
        $comment->author_name = Auth::user()->name;
        $comment->story_id = $story_id;

        $comment->save();

        return redirect()->route('show_story', $story_id);
    }
}
