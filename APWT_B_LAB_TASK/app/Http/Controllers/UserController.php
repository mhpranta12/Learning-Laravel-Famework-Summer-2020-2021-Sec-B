<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use App\Http\Requests\UserRequest;
$x=5;
class UserController extends Controller
{
     
    public function initreg()
    {
        return view ("registration");
    }
    public function check()
    {
        print_r($GLOBALS);
    }
    public function create(Request $rq)
    {
        $users = $this->userlist();
        
        $user=['id'=>$rq->id,'name'=>$rq->uname,'password'=>$rq->password,'email'=>$rq->email];
        array_push($users,$user);
       
        return view('user.list')->with('userList',$users);   
        
    }

    public function createindb(Request $rq)
    {

        /*$user = User::find('idd) 
        ->get();*/
        
       $validation=Validator::make($rq->all(),
       [
           //'uname.required'=>'Please insert uname',
           'password'=> 'required|min:5'
       ]
       );

        /*$user = new User;
        $user->id=$rq->id;
        $user->username=$rq->uname;
        $user->password=$rq->password;
        $user->email=$rq->email;
        $user->designation=$rq->designation;
       $user->save();
       $users = User::all();*/
       if($validation->fails())
       {
           echo "Error";
       }
        //return view('user.dblist')->with('userList',$users);  
        
        
    }

    public function searchuser(Request $rq)
    {
        $id=$rq->id;
        $user = User::find($id) ;
        
        

       
        return view('user.dblist')->with('userList',$user);  
        
        
    }
   
    public function userlist()
    {
        $users = [['id'=>'1','name'=>'pranta','password'=>12343,'email'=>'we@as'],
        ['id'=>2,'name'=>'hossain','password'=>12343,'email'=>'a@3d'],
        ['id'=>3,'name'=>'ahmed','password'=>12343,'email'=>'a@3d']
        ];
        return $users;
        
       
    }
    public function details($id,)
    {
        $users = $this->userlist();
        $match='';
        foreach ($users as $u)
        {
            if ($u['id']==$id)
            {
                $match=$u;
                break;
            }
            
        }
        return view ('user.foundlist')->with('list',$match);
      
        
     
    }
    public function sum ($id)
    {
            return $id ;
    }
    public function delete($id)
    {
        $users = $this->userlist();
       
        for($i=0; $i<=sizeof($users); $i++)
        {
            if ($id==$users[$i]['id'])
            {
                unset($users[$i]);
                break;
            }
        }
               

        //unset($users2[0]); // to delete a single index
        return view ('user.deletedlist')->with('dltdlist',$users);
    }

    public function edit(Request $rq)
    {
        $users = $this->userlist();
        //$user=['id'=>$rq->id,'name'=>$rq->uname,'password'=>$rq->password,'email'=>$rq->email];
       
        for($i=0; $i<=sizeof($users); $i++)
        {
            if ($rq->id==$users[$i]['id'])
            {
                $users[$i]['name']=$rq->uname;
                break;
            }
        }
        
        //$users[2]['name']='robin';
        //echo $users[2]['name'];
        return view('user.editedlist')->with('editeduserList',$users);   
    }
    public function update($id)
    {
        $users = $this->userlist();
        $match='';
        foreach ($users as $u)
        {
            if ($u['id']==$id)
            {
                $match=$u;
                break;
            }
        }
        return view ('user.edit')->with('list',$match);
    }
    public function verifymgr (Request $rq)
    {
        if ($rq->uname=="manager"  &&  $rq->password=="1234")
        {
            return view('mngr.dashboard');
        }
        else
        {
            return view('mngr.loginerr');
        }
    }
}
