<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Customer;

class CustomerController extends Controller
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

        $customer = Customer::where('username',$rq->uname)
        -> where('password',$rq->password) 
        ->first();

        if (count($customer)>0 )
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
        $customer = new Customer;
        $customer->id=$rq->id;
        $customer->username=$rq->uname;
        $customer->password=$rq->password;
        $customer->email=$rq->email;
        $customer->fullname=$rq->fname;
        $customer->city=$rq->city;

        $customer->country=$rq->country;
        $customer->companyname=$rq->companyname;


       $customer->save();
       $customer = Customer::all();
       
     
        return redirect ('/registered');  
    }
       
        
        
    }
}
