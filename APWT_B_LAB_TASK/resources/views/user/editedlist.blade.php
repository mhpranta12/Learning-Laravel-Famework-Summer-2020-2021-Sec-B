<!DOCTYPE html>

<h1> User List </h1>
    <table border="2" >
    <tr>
        <td> ID </td> 
        <td> Name </td> 
        <td> Password </td> 
        <td> Email </td> 
        <td colspan="2"> Operations </td> 
        </tr>
    @foreach ($editeduserList as $users) 
    
        <tr>
        <td> {{$users['id']}} </td> 
        <td> {{$users['name']}} </td> 
        <td> {{$users['password']}} </td>
        <td> {{$users['email']}} </td>
        <td> <a href="user/details/{{$users['id']}}">Details </a> </td>
        <td> <a href="user/delete/{{$users['id']}}">Delete </a> </td>
        <td> <a href="user/update/{{$users['id']}}">Edit </a> </td>
        </tr>
    
    @endforeach
    </table>
    </htmnl>