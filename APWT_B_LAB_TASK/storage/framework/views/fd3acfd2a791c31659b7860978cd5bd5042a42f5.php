<!DOCTYPE html>

<h1> Current User Info </h1>
    
    <table border="2" >

    
        <tr> 
        <td> ID </td> 
        <td> Name </td> 
        <td> Password </td> 
        <td> Email </td> 
       
        </tr>
        <tr>
        <td> <?php echo e($list['id']); ?> </td> 
        <td> <?php echo e($list['name']); ?> </td> 
        <td> <?php echo e($list['password']); ?> </td> 
        <td> <?php echo e($list['email']); ?> </td>
        
        </tr>
        </table>
        <form method="POST">
    <h1> Registration </h1>
    ID <br>
    <input type="text" name="id" value="<?php echo e($list['id']); ?>"> </input><hr> <br>
    UserName <br>
    <input type="text" name="uname"value="<?php echo e($list['name']); ?>"> </input><hr> <br>
    Email <br>
    <input type="email"name="email" value="<?php echo e($list['email']); ?>" > </input><hr> <br>
    Full Name <br>
    <input type="text" name="name" value="<?php echo e($list['name']); ?>" > </input><hr> <br>

    Password<br>
        <input type="text" name="password" value="<?php echo e($list['password']); ?>" placeholder="Enter password"> </input><hr> <br>
    Confirm Password<br>
    <input type="text"name="cpassword"> </input><hr> <br>
    <input type="submit" value="Register" style:width="100px"> </input>
    </form>

   
    </htmnl><?php /**PATH F:\laratest\resources\views/user/edit.blade.php ENDPATH**/ ?>