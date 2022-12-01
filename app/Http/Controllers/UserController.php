<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{   
    public function index(){
        $users=User::all();
        return view('users.index', compact('users'));
    }
    public function create(){
        return view('users.create');

    }
    public function store(Request $request, User $user){
        
            $user->fill($request->all());
            $user->avatar="https://robohash.org/19ee31c665a14e139e0cfdd3448fd681?set=set4&bgset=&size=200x200";
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
