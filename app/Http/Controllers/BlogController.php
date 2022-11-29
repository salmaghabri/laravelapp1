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
    public function store(Request $request, Blog $blog)
{
    $blog->fill($request->all());
    $blog->save();

    return redirect()->route('blogs.index')->with('notice', 'I created a blog!'); 
}
    public function edit($id)  
    {
        $blog = Blog::find($id);  
        return view('blogs.edit', compact('blog'));  
    }
    
    public function update(Request $request, $id)  
    {
        $blog = Blog::find($id);  
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();  

        return redirect()->route('blogs.show', $blog);
    }
    public function delete(Blog $blog){
       
        return view('blogs.delete', compact('blog'));
    }
    public function destroy(Blog $blog){
        $blog->delete();
        return redirect()->route('blogs.index');

    }
}
