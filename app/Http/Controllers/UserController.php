<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller{
public function index(){
    $users=User::all();
    return view('users.index', compact('users'));
}
public function create(){
    return view('users.create');
    
}
public function store(Request $request, User $user){
            $avatars = array("https://robohash.org/19ee31c665a14e139e0cfdd3448fd681?set=set4&bgset=&size=200x200","https://robohash.org/abfe6576a6edc9642d923ea9b2d3d9e6?set=set4&bgset=&size=200x200","https://robohash.org/097613a17f68de943813ce6bdd04ebe6?set=set4&bgset=&size=200x200");
        $x=rand(0,2);
            $user->fill($request->all());
            $user->avatar=$avatars[$x];
            $user->save();
        
            return redirect()->route('users.index')->with('notice', 'user created successfully'); 
        

    }
    public function show(User $user){
        //return view("users.show",$user); 
        return view("users.show",compact('user')); 
    }
    public function edit(User $user){
        return view('users.edit', compact('user'));

    }
    public function update(Request $request, User $user){
       
        $user->username= $request->username; 
        $user->age= $request->age; 
        $user->bio= $request->bio; 
        $user->avatar= $request->avatar; 
        $user->save();
        return redirect()->route('users.show',$user)->with('notice',"user updated successfully");


    }
    public function delete(User $user){
        $user->delete();
        return redirect()->route('users.index')->with('notice',"user deleted successfully");

    }
}
