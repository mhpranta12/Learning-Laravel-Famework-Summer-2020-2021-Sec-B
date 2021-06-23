<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class CustomerController extends Controller
{  
    public function login(Request $rq)
    {

        /*$user = User::find('idd) 
        ->get();*/
        
       $validationemail=Validator::make($rq->all(),
       [
        
           'email'=> 'email:rfc,dns|required|max:50'
         
       ]
       );
       $validationpassword=Validator::make($rq->all(),
       [
           
           'password'=> 'array:password,locale|required|min:5|max:20'
         
       ]
       );

       if($validationemail->fails())
       {
           echo "Email Error <br>";
       }
       if($validationpassword->fails())
       {
           echo "Password Error";
       }
        //return view('user.dblist')->with('userList',$users);  
    } 

}
