<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Blog;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create(){

    }
    public function store(Request $request ,Comment $comment){

        $comment->fill($request->all());
        $comment->save();
        $blog=$comment->blog;
        
        return redirect()->route('blogs.show',compact("blog"))->with('notice','comment added !');
    }
}
