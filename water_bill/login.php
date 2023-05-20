<!-- NOTE
  SINGLE PAGE FORM ALONG WITH VALIDATION
  NO PHP LEAKS BACK TO THE INDEX 
 -->
<?php
  require_once("Includes/config.php");
  require_once("Includes/session.php");
  /*if(!(isset($_POST['email']&&isset($_POST['pass'])))) {
    location('index.php');
  }*/
   // if ($count === 0) {
  // echo "There were some problem";
// }
  ?>

<form action="index.php" method="post" class="form-horizontal" role="form">
  <center>
      <div class="row form-group">
          <div class="col-md-12">
              <input type="text" placeholder="Email" name="email" id="email" class="form-control">
              <!-- <label><?php echo $nameErr;?></label> -->
          </div>
      </div>
      <div class="row form-group">
          <div class="col-md-12">
              <input type="password" placeholder="password" name="pass" id="pass" class="form-control">
              <!-- <label><?php echo $nameErr;?></label> -->
          </div>
      </div>
      <div class="form-group">
          <div class="col-md-12">
              <button type="login_submit" class="btn btn-success" onclick=" validateForm();">Sign In</button>
              <!-- <label><?php echo $passwordErr;?></label> -->
          </div>
      </div>
  </center>
</form>