<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentController extends BController
{
    public function add_comment(Request $request)
    {
        $comment = Comment::create($request->all());
        $user = Comment::find($request->input('user_id'));
        $user->user()->attach($user->id, array('comment_id' => $comment->id));
        return new CommentResource($comment);
    }
}
