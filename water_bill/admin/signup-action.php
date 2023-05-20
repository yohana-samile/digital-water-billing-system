<?php

//CHECK IF A VALID FORM STRING
function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

if(isset($_POST["reg_submit"])) {
        $email = test_input($_POST['email']); 
        $password = test_input($_POST["inputPassword"]);
        $confpassword = test_input($_POST["confirmPassword"]);
        $address = test_input($_POST["address"]);
        $email = test_input($_POST['email']);

        // NAME VALIDATION
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
            $flag=1;
            echo $nameErr;
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed"; 
                $flag=1;
                echo $nameErr;
            }
        }

        // EMAIL VALIDATION
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
            $flag=1;
            } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format"; 
                $flag=1;
                echo $emailErr;
            }
        }

        // PASSWORD VALIDATION
        if (empty($_POST["inputPassword"])) 
        {
            $passwordErr = "PASSWORD missing";
            $flag=1;
        }
        else 
        {
            $password = $_POST["inputPassword"];
        }
        // CONFIRM PASSWORD
        if (empty($_POST["confirmPassword"])) 
        {
            $confpasswordErr = "missing";
            $flag=1;
        }
        else 
        {
            if($_POST['confirmPassword'] == $password)
            {
                $confpassword = $_POST["confirmPassword"];
            }
            else
            {
                $confpasswordErr = "Not same as password!";
                $flag = 1;
            }
        }

        // ADDRESS VALIDATION
        if (empty($_POST["address"])) {
            $addrErr = "Address is required";
            $flag=1;
            echo $addrErr;
        } else {
            $address = test_input($_POST["address"]);
            // check if address only contains letters and whitespace
            // if (!preg_match("/^[a-zA-Z1-9]*$/",$address)) {
            //     $addrErr = "Only letters, numbers and white space allowed";
            //     // $flag=1; 
            //     echo $addrErr;
            // }
        }

        //CONTACT VALIDATION
        if (empty($_POST["contactNo"])) {
            $flag=1;
            $contactNo = "";
            // echo "error here";
        } else {
            $contactNo = test_input($_POST["contactNo"]);
            if(!preg_match("/^d{10}$/", $_POST["contactNo"])){
                $phoneErr="10 digit phone no allowed.";
                // $flag=1;
                // echo "or here";
                echo $_POST['contactNo'];
            }
        }

        // Only if succeed from the validation thourough put  
        echo $flag; 
        if($flag == 0)
        {
            require_once("../Includes/config.php");
            $sql = "INSERT INTO user (`name`,`email`,`phone`,`pass`,`address`)
                    VALUES('$name','$email','$contactNo','$password','$address')";
                    echo $sql;
            if (!mysqli_query($con,$sql))
            {
                die('Error: ' . mysqli_error($con));
            }
            header("Location:index.php?key=success");
        }
    }
?>
