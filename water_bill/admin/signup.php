<?php 
    require_once('head_html.php'); 
    require_once('../Includes/config.php'); 
    require_once('../Includes/session.php'); 
    require_once('../Includes/admin.php'); 
    if ($logged==false) {
         header("Location:../index.php");
    }
?>

<body style="background: url(./../assets/img/bg.jpg);opacity:.95;">

    <div id="wrapper">

        <?php 
            require_once("nav.php");
            require_once("sidebar.php");
?>
<br><br><br><br>
<div class=" d-flex justify-content-center col-md-8 my-5" style="margin-left: 100px;">
	<div class="text-center h3" >Customer Registration</div>
		<form action="signup-action.php" method="post" class="form-horizontal" role="form" onsubmit="return validateForm()">
		<center>
		    <div class="row form-group">
		        <div class="col-md-12">
		            <input type="name" class="form-control" name="name" id="name" placeholder="Full Name" style="border-color:black" required>
		            <!-- <label><?php echo $nameErr;?></label> -->
		        </div>
		    </div>
		    <div class="form-group">
		        <div class="col-md-12">
		            <input type="email" class="form-control" name="email" id="email" placeholder="Email" style="border-color:black"required>
		            <!-- <label><?php echo $emailErr;?></label> -->
		        </div>
		    </div>
		    <div class="form-group">
		        <div class="col-md-12">
		            <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password" style="border-color:black"required>
		            <!-- <label><?php echo $passwordErr;?></label> -->
		        </div>
		    </div>
		    <div class="form-group">
		        <div class="col-md-12">
		            <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password" style="border-color:black"required>
		            <!-- <label><?php echo $confpasswordErr;?></label><label><?php echo $confpasswordErr;?></label> -->
		        </div>
		    </div>
		    <div class="form-group">
		        <div class="col-md-12">
		            <input type="tel" class="form-control" name="contactNo" placeholder="Contact Number" style="border-color:black"required>
		            <!-- <label><?php echo $phoneErr;?></label> -->
		        </div>
		    </div>
		    <div class="form-group">
		        <div class="col-md-12">
		            <input type="address" class="form-control" name="address" placeholder="Address" style="border-color:black"required>
		            <!-- <label><?php echo $addrErr;?></label> -->
		        </div>
		    </div>
		    <div class="form-group">
		        <div class="col-md-10">
		            <button name="reg_submit" class="btn btn-primary">Sign Up</button>
		        </div>
		    </div>
		    </center>
		</form>
	</div>




<?php

  	require_once("footer.php");
    require_once("js.php");
    ?>

</body>

</html>
