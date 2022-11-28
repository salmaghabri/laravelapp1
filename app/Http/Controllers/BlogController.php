<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{   public function create() 
    {
        return view('blogs.create');
    }
    public function index()
    {
        $blogs = Blog::all(); 
        return view('blogs.index', compact('blogs')); 
    }
    public function show($id){
        $b=Blog::find($id);
        $params=[
            'id'=>$b->id,
            'title'=>$b->title,
            'content'=>$b->content,
        ];


        return view('blogs.show', ['blog'=>$params]);
    }
    public function store(Request $request) 
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();
    
        return redirect('blogs');
    }
    public function edit($id) // --- (1)
    {
        $blog = Blog::find($id); // --- (2)
        return view('blogs.edit', compact('blog')); // --- (3)
    }
    
    public function update(Request $request, $id) // --- (4)
    {
        $blog = Blog::find($id); // --- (5)
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save(); // --- (6)

        return redirect("blogs/$id");
    }
}
