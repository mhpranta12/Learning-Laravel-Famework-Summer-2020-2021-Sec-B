<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Accountant;

class AccountantController extends Controller
{
    public function login(Request $rq)
    {

        
       $validationemail=Validator::make($rq->all(),
       [
        
           'email'=> 'email:rfc,dns|required|max:50'
         
       ]
       );
       $validationpassword=Validator::make($rq->all(),
       [
           
           'password'=> 'required|min:8|max:20'
         
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

        $customer = Accountant::where('username',$rq->uname)
        -> where('password',$rq->password) 
        ->first();

        if ($customer!= null )
        {
            echo"Login Succes !! ";
        }
        else
        {
            echo"Credentials Error !! ";
        }

       }
     
    }
    
    
    public function insert(Request $rq)
    {

        
        $validationemail=Validator::make($rq->all(),
        [
         
            'email'=> 'email:rfc,dns|required|max:50'
          
        ]
        );
        $validationuname=Validator::make($rq->all(),
        [
         
            'uname'=> 'required|max:30|min:2'
          
        ]
        );
        $validationpassword=Validator::make($rq->all(),
        [
            
            'password'=> 'required|min:5|max:20'
          
        ]
        );
        $validationcity=Validator::make($rq->all(),
        [
         
            'city'=> 'required|max:30|min:2'
          
        ]
        );
        $validationcompanyname=Validator::make($rq->all(),
        [
         
            'companyname'=> 'required|max:30|min:2'
          
        ]
        );

        $validationcountry=Validator::make($rq->all(),
        [
         
            'country'=> 'required|max:30|min:2'
          
        ]
        );

        //cheking conditions for validation and returning msg

        if($validationemail->fails())
        {
            echo "Email Error <br>";
        }
        if($validationpassword->fails())
        {
            echo "Password Error<br>";
        }
        if($validationuname->fails())
        {
            echo "Username Error<br>";
        }
        if($validationcity->fails())
        {
            echo "City  Required<br>";
        }
        if($validationcountry->fails())
        {
            echo "Country  Required<br>";
        }
        if($validationcompanyname->fails())
        {
            echo "Company Name is  Error<br>";
        }
      
    if ( $validationemail->fails() || $validationpassword->fails()   || $validationcity->fails() || $validationcountry->fails()|| $validationcompanyname->fails() || $validationuname->fails())
    {
        echo "Please fill up properly";
    }
    else
    {
        $ac = new Accountant;
        $ac->id=$rq->id;
        $ac->username=$rq->uname;
        $ac->password=$rq->password;
        $ac->email=$rq->email;
        $ac->fname=$rq->fname;
        $ac->city=$rq->city;

        $ac->country=$rq->country;
        $ac->companyname=$rq->companyname;


       $ac->save();
       $ac = Accountant::all();
       
     
        return redirect ('/acregistered');  
    }
       
        
        
    }
}
