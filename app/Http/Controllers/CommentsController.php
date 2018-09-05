<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentFormRequest;
use App\Comment;

class CommentsController extends Controller
{
    public function store(CommentFormRequest $request)
    {
        $comment = new Comment([
            'post_id' => $request->get('post_id'),
            'content' => $request->get('content'),
        ]);

        $comment->save();

        return redirect()->back()->with('status', 'Your comment has been created!');
    }
}
