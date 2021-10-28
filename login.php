<?php
require('config.php');

$_SESSION["Login"] = "XXX";

if(isset($_COOKIE['email']) and isset($_COOKIE['password'])) { 
 $user= $_COOKIE['email'];
 $pass= $_COOKIE['password']; 

echo "<script> 
document.getElementById('user').value = '$user';
document.getElementById('pass').value = '$pass'; 
</script>";
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
}
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Login Form</span></div>
            <form action="#">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" required>
                </div>
                <div class="pass"><a href="#">Forgot password?</a></div>
                <div class="row button">
                    <input type="submit" id="login"  value="Login">
                </div>
                <div class="signup-link">Not a member? <a href="Registration.php" class="ml-2">Registration now</a></div>
            </form>
        </div>
    </div>
</body>
</html>