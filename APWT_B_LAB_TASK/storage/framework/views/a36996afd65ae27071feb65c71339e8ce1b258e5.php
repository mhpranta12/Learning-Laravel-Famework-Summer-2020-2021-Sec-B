<!DOCTYPE html>

<h1> User Info </h1>
    <table border="2" >

    
        <tr>
        <td> ID </td>  <td> <?php echo e($list['id']); ?> </td> 
        </tr>
        <tr>
        <td> Name </td>  <td> <?php echo e($list['name']); ?> </td> 
        </tr>
        <tr>
        <td> Password </td>   <td> <?php echo e($list['password']); ?> </td> 
        </tr>
        <tr>
        <td> Email </td>   <td> <?php echo e($list['email']); ?> </td>
        </tr>
        

    </table>
    </htmnl><?php /**PATH F:\laratest\resources\views/user/foundlist.blade.php ENDPATH**/ ?>