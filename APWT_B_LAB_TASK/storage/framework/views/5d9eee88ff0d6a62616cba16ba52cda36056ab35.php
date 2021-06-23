<!DOCTYPE html >
<html>

<link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>"/>
        <style>
        .bg
        {
            background-color:rgb(229, 229, 253);
            height: 50px;
        } 

        .fade {
        transition: opacity 7.95s linear; } /*This will controll the visible time*/
        </style>
    <center><h1 class="legend">Manager's Dashboard </h1> <br><hr></center>
    <font type="italic" class="fade"> Welcome to your dashboard</font>
    <center><li class="bg"><a href="/mgrregister"> Register Page </a> </li><br> <hr>
    <li class="bg"><a href="/mgruserlist">  Client's List </a> </li><br> <hr>
    <li class="bg"> <a href="/mgrlogin">  Login  </a> </li><br> <hr> 
    <li class="bg" > <a href="/addclient">  Add Client  </a>  </li><br> <hr>
    <li class="bg"><a href="/addemployee">  Add Employee  </a>  </li><br> <hr>
    <li class="bg" ><a href="/application">  Applications  </a> </li><br> <hr>
    <li class="bg"><a href="/employee">  Employee  </a> </li><br> <hr>
    <li class="bg" ><a href="/finacial">  Financials  </a>  </li><br> <hr>
    <li class="bg"><a href="/deal">  Deal  </a> </li><br> <hr>
    <li class="bg"><a href="/currency">  Currency Info  </a>  </li><br> <hr>
    <li class="bg"><a href="/report">  Report   </a>  </li><br> <hr>
    <li class="bg"><a href="/officials">  Officials  </a>  </li><br> <hr>
   <input type="submit" class="btn-light" value="Done" > <br> <hr>
   <input type="submit" id="btn-outline-info:hover" value="Done" > <br> <hr>
   <input type="submit" class="btn-outline-success" value="Done" > <br> <hr>
   <input type="submit" class="btn-light" value="Done" > <br> <hr>
   <input type="submit" class="btn-light" value="Done" > <br> <hr>
   <input type="submit" class="btn-outline-primary" value="Done" > <br> <hr>
   <input type="submit" class="btn-light,btn-dark:focus" value="Done" style:width=100px;> <br> <hr>
    </center>
</html>
<?php /**PATH F:\laratest\resources\views/mngr/dashboard.blade.php ENDPATH**/ ?>