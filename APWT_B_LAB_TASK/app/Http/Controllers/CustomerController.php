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
        
       $validationname=Validator::make($rq->all(),
       [
           //'uname.required'=>'Please insert uname',
           'uname'=> 'required|max:5|min:2'
         
       ]
       );
       $validationpassword=Validator::make($rq->all(),
       [
           //'uname.required'=>'Please insert uname',
           'password'=> 'required|min:5'
         
       ]
       );

       if($validationname->fails())
       {
           echo "username Error <br>";
       }
       if($validationpassword->fails())
       {
           echo "Password Error";
       }
        //return view('user.dblist')->with('userList',$users);  
    } 

}
