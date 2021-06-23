<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $rq)
    {

        
       $validationemail=Validator::make($rq->all(),
       [
        
           'email'=> 'required|max:50'
         
       ]
       );
       $validationpassword=Validator::make($rq->all(),
       [
           
           'password'=> 'required|min:4|max:20'
         
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
       
       if ($validationemail->fails() || $validationpassword->fails() )
       {
          echo" Please check the Error";
       }

       else
       {

        if ($rq->email=='admin' && $rq->password='1234')
        {
           return redirect ('/admindashboard');
        }
        else
        {
            echo"Credentials Error !! ";
        }

       }
      
    }
    
}
