<?php 
require_once("Includes/config.php");
require_once("Includes/session.php");
// if ($count===0) {
//     $err_login="There were some problem";
// }
if(isset($_SESSION['logged']))
{
    if ($_SESSION['logged'] == true)
    {
        if ($_SESSION['account']=="admin") {
                header("Location:admin/index.php");
            }
        elseif ($_SESSION['account']=="user") {
                header("Location:user/index.php");
            }
    }  
    else  {
        header("Location:../index.php");
      }  
}

if(isset($_POST['login_submit'])) {
    if(!(isset($_POST['email']))) {
        if(!(isset($_POST['pass']))) {
            location('index.php');    
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Digital Water Billing</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"> -->


    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Fonts from Google Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <?php if (isset($_GET['key']) == "error") {
                echo "<script>alert('Wrong Username Or Password')</script>";
            }
            elseif (isset($_GET['key']) == "success") {
                echo "<script>alert('Your Registration Is Success, Now You Can Login')</script>";
             } ?>
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><b>Digital Water Billing</b></a>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    <div id="headerwrap">
        <div class="darkhearderwrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 signup">
                        <h1>Digital Water Billing</h1>
                        <p>Water's a valuable resource. If we each take a few simple steps, we can conserve water, save money on our <b>water digital bills</b> and ensure a healthy future supply.</p>
                    </div>
                    <!-- /col-lg-6 -->
                    <div class="col-lg-6">
                        <h1>Login</h1>
                        <?php include("login.php"); ?>
                    </div>
                    <!-- /col-lg-6 -->

                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
            </div>
            <br><br><br><br><br>
            <?php include('admin/footer.php'); ?>
            
    </div>
    
    <!-- /headerwrap -->

    <!--=======================JS=========================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-1.11.0.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- jQuery Version 1.11.0 -->

    <script src="assets/js/custom.js"></script>
    <script>

    function validateForm() {
            var x = document.forms["myForm"]["email"].value;
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                alert("Not a valid e-mail address");
                return false;
            }
    }  </script> 
    
</body>

</html>
