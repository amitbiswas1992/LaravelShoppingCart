<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; 
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    
  public function create(){

   return view ('user.signup');
    }

public function store(){

    //validate the form 
    //
   $this->validate(request(),
   [
       'name'=> 'required',
       'email'=>'required|email',
       'password'=>'required|confirmed'
   ]);


    //create and save user

 $user = User::create(request(['name','email', 'password']));
    //redirect to the home 
auth()->login($user);

return redirect()->home();
}


}
