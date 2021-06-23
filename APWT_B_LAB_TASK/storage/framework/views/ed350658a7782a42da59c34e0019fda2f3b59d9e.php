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
    <?php $__currentLoopData = $editeduserList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    
        <tr>
        <td> <?php echo e($users['id']); ?> </td> 
        <td> <?php echo e($users['name']); ?> </td> 
        <td> <?php echo e($users['password']); ?> </td>
        <td> <?php echo e($users['email']); ?> </td>
        <td> <a href="user/details/<?php echo e($users['id']); ?>">Details </a> </td>
        <td> <a href="user/delete/<?php echo e($users['id']); ?>">Delete </a> </td>
        <td> <a href="user/update/<?php echo e($users['id']); ?>">Edit </a> </td>
        </tr>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </htmnl><?php /**PATH F:\laratest\resources\views/user/editedlist.blade.php ENDPATH**/ ?>