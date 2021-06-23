<link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>"/>

<style>
        .bg
        {
            background-color:rgb(229, 229, 253);
			align:"center";
        } 
		.btn
        {
            background-color:rgb(229, 229, 253);
			align:"center";
			width:160px;
        } 
        </style>
        <center>
<form method="POST" class="bg">
<h1> Registration </h1> <hr>
ID <br>
<input type="text" name="id"> </input><hr> <br>
UserName <br>
<input type="text" name="uname"> </input><hr> <br>
Email <br>
<input type="email"name="email"> </input><hr> <br>
Full Name <br>
<input type="text"name="name"> </input><hr> <br>

Password<br>
<input type="text"name="password" placeholder="Enter password"> </input><hr> <br>
Confirm Password<br>
<input type="text"name="cpassword"> </input><hr> <br>
<input type="submit" class="btn-outline-success" value="Register" > <br> <hr>

</form>
</center>
<?php /**PATH F:\laratest\resources\views/mngr/register.blade.php ENDPATH**/ ?>