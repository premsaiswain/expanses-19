<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="style.css">
    <title>signup</title>
</head>
<body class="body2">

<?php  
$alert = false;
$error= false;
$exists=false; 

if(isset($_POST['signup'])){
include "dbconnect.php";

  $email=$_POST["email"];
  $username=$_POST["username"];
  $password=$_POST["password"];
  $cpassword=$_POST["cpassword"];
  $exists=false; 
  $exixtssql = "Select * from users where username='$username'";

  $qsql=mysqli_query($conn,$exixtssql);
  $numexixt=mysqli_num_rows($qsql);
  if($numexixt>0){
    $exists=true;
  }  
  else{
    $exists=false;
  }


  if(($password == $cpassword) && $exists == false){
    $hashpassword = password_hash($password, PASSWORD_DEFAULT);
     $sql ="INSERT INTO `users` (`username`, `email`, `password`)
      VALUES ( '$username', '$email', '$hashpassword')";

    $result=mysqli_query($conn,$sql);
    if($result){
        $alert = true;
        session_start();
        $_SESSION['loggedin']= true;
        $_SESSION['username']= $username;
        header("location:try.php");
    }
}
else{
  $error = false;
}
}
?>
    <div class="row">
      <div class="col-12 ">
        <div class="container text-center style1">
            <img src="logo/logo.png">
           <p>A site that helps you manage your monthly expenses</p>
          </div>
    <form class="form-horizontal container  layout3" action="" method="POST">
        <div class="form-group">
    
          <div class="col-sm-10 text-center">
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
          </div>
        </div>
       
        <div class="form-group">
      
          <div class="col-sm-10">
            <input type="text" name="username" class="form-control" id="pwd1" placeholder="Enter username">
          </div>
        </div>
        <div class="form-group">
      
         
        <div class="form-group">
            <div class="col-sm-10">
              <input type="password" name="password" class="form-control" id="pwd2" placeholder="Enter password">
            </div>
          </div>
          <div class="form-group">
       
            <div class="col-sm-10">
              <input type="password" name="cpassword" class="form-control" id="pwd3" placeholder="conform password">
            </div>
          </div>
             <?php 
               if($error||$exists){
               echo "<div class='alert alert-danger col-sm-10' role='alert'>
               password doesnt match! or username already exists.
             </div>";
             }
             
             ?>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10 style4 text-center">
            <input type="submit" class="btn btn-dark btn-lg style2" name="signup" value="signup">
          </div>
        </div>
    </form>
    </div>
</div>
</body>
</html>