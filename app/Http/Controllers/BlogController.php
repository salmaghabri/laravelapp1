<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{   public function create() 
    {
        $users=User::all();
        return view('blogs.create',compact('users'));
    }
    public function index()
    {
        $blogs = Blog::all(); 
        
        return view('blogs.index', compact('blogs')); 
    }
    public function show($id){
        $blog=Blog::find($id);
        $users=User::all();
        return view('blogs.show', compact('blog','users'));
    }
    public function store(Request $request, Blog $blog){
    $blog->fill($request->all());
    $blog->save();

    return redirect()->route('blogs.index')->with('notice', User::find($request->user_id)->username .' created a blog!'); 
}
    public function edit($id)  
    {
        $blog = Blog::find($id);  
        $users=User::all();
        return view('blogs.edit', compact('blog','users'));  
    }
    
    public function update(Request $request, $id)  
    {
        $blog = Blog::find($id);  
        $users=User::all();
       // dd($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();  
       // return redirect("blogs/$id");

        return redirect()->route('blogs.show',compact('blog','users'));
    }
    public function delete(Blog $blog){
       
        return view('blogs.delete', compact('blog'));
    }
    public function destroy(Blog $blog){
        
        $blog->delete();
        return redirect()->route('blogs.index')->with('notice','blog deleted sucessfully !');

    }
}
