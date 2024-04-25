<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Story;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Story $story)
    {
        $comment = new Comment();
        $comment->story_id = $story->id;
        $comment->user_id = auth()->id();
        $comment->content = request()->get('content');
        $comment->save();

        return redirect()->route('stories.show', $story->id)->with('success', 'Comment posted successfully!');
    }
}
