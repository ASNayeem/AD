<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Registration Form</title> 
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  </head>  

<body>
<div>
<?php
if(isset($_POST['create'])){
  $firstname = $_POST['firstname'];
  $lastname  = $_POST['lastname'];
  $email     = $_POST['email'];
  $password  = $_POST['password'];
 
  $sql = "INSERT INTO user (firstname, lastname, email, password ) values (?,?,?,?)";
  $stmtinsert = $db->prepare($sql);
  $result = $stmtinsert->execute([$firstname, $lastname, $email, $password]);

  if($result){
    echo 'Success';
  }
  else{
    echo 'Error';
  }
}
?>
 <script>
  $(function){
    swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
  button: "Aww yiss!",
});

  }
</script>

</div>
 <div> 
   <form action="Registration.php" method="post">
     <div class="container">
      <div class="wrapper">
       <div class="row">
         <div class="col-sm-3">
            <h1>Registration</h1>
            <hr class="mb-3">
            <level for="firstname"><b>First Name</b></level>
            <input class="form-control" type="text" id="firstname" name="firstname" required>

            <level for="lastname"><b>Last Name</b></level>
            <input class="form-control" type="text" id="lastname" name="lastname" required>

            <level for="email"><b>Email</b></level>
            <input class="form-control" type="email" id="email" name="email" required>

            <level for="password"><b>Password</b></level>
            <input class="form-control" type="password" id="password" name="password" required>
            <hr class="mb-3">
            <input class="btn btn-primary" type="submit" name="create" value="Sign Up">
          </div>
        <div class="signup-link">Already have an account? <a href="login.php">login now</a></div>
       </div>
      </div>
     </div>
   </form>
 </div>
 
 








</body>  
</html>