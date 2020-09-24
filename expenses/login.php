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
    <title>Login</title>
 </head>
 <body>
<?php 
$login= true;
$exst = true;
if(isset($_POST['login'])){
include "dbconnect.php";
$username=$_POST['username'];
$password=$_POST['password'];

$sql = "Select * from users where username='$username'";
$result= mysqli_query($conn,$sql);
$num= mysqli_num_rows($result);
if($num == 1){
  while($row= mysqli_fetch_assoc($result)){
    if(password_verify($password,$row['password'])){
      $login = true;
      session_start();
      $_SESSION['loggedin']= true;
      $_SESSION['username']= $username;
      header("location:home.php");
    }
    else{
      $login = false;
    }
  }
 
}


}

?>

<div class="Container fluid row ">
<div class="col-12 col-sm-6 layout1">
    <div class="container text-center style1">
    <img src="logo/logo.png">
   <p>A site that helps you manage your monthly expenses</p>
  
    </div>
<div class="container layout3">
 <h4>Dont have an account ? just go ahead and signup</h4>
 <a class="btn btn-dark btn-lg style2" href="signup.php">Signup</a>
</div>
<div class="row">
<div class=" container fluid style4 col-5">
  <hr>
</div>
<div class=" container fluid style4 col-5">
 or  <hr>
</div>
</div>
<div class="container">
 <h5 class="text-center">signup using</h5>
 <div class="row container layout5">
 <a href="" class=""><i class="fa fa-4x fa-facebook-official col-4" aria-hidden="true"></i></a>
 <a href="" class=""><i class="fa fa-4x fa-twitter col-4" aria-hidden="true"></i></a>
 <a href="" class=""><i class="fa fa-4x fa-google col-4" aria-hidden="true"></i></a>
 </div>
</div>
</div>

<div class="col-12 col-sm-6 layout2 ">
  <div class="row">
<h1 class="container col-10 style3 ">WELCOME TO EXPENSES-19 </h1>
</div>
<form class="form-horizontal layout4" action="" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-8">
      <input type="text" name="username" class="form-control" id="email" placeholder="Enter username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-8">
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8 style4 text-center">
      <input type="submit" class="btn btn-dark btn-lg style2" name="login" value="Login">
    </div>
  </div>
  <?php 
  if($login == false ||$exst = false ){
    echo  "<div class='alert alert-danger' role='alert'>
    wrong password or wrong username.
  </div>";
  }
  ?>
  <div class="row">
    <div class=" container fluid style4 col-5">
      <hr>
    </div>
    <div class=" container fluid style4 col-5">
     or  <hr>
    </div>
    </div>
    <div class="container">
     <h5 class="text-center">login using</h5>
     <div class="row container layout5">
     <a href="" class=""><i class="fa fa-4x fa-facebook-official col-4" aria-hidden="true"></i></a>
     <a href="" class=""><i class="fa fa-4x fa-twitter col-4" aria-hidden="true"></i></a>
     <a href="" class=""><i class="fa fa-4x fa-google col-4" aria-hidden="true"></i></a>
     </div>
    </div>
</form>
</div>
  </div>
 </body>
 </html>