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
    <style>
        body{
    background-color: #999999;
        }
        .topup{
    margin-top: 120px;
     }
     .top{
         margin-top: 60px;
     }
        </style>
    <title>add page</title>
    </head>
    <body>
    <?php 
      $value;
      $total = 0;
      $verify = 0;
      if(isset($_POST['done'])){
         include "dbconnect.php";
         session_start();
         $name = $_SESSION['username'];
         $sql = "SELECT * FROM `users`  WHERE `users`.`username` = '$name'";
         $result = mysqli_query($conn, $sql);
        while($res = mysqli_fetch_array($result) ){ 
             $value = $res['saving'];
             $total = $res['spending'];
             $monthly =$res['monthly'];
             }
             $spend =$_POST['saving'];
             $total = $total + $spend;
             $monthly = $monthly + $total;
             $month = "UPDATE `users` SET `monthly` = '$monthly' WHERE `users`.`username` = '$name'";
             $done = mysqli_query($conn,$month);


             $inst = "UPDATE `users` SET `spending` = '$total' WHERE `users`.`username` = '$name'";
             $sqli = mysqli_query($conn,$inst); 
        }   
        if(isset($_POST['comp'])){
            include "dbconnect.php";
            session_start();
            $namee = $_SESSION['username'];
            $sql = "SELECT * FROM `users`  WHERE `users`.`username` = '$namee'";
            $result = mysqli_query($conn, $sql);
           while($res = mysqli_fetch_array($result) ){ 
                $value = $res['saving'];
                $total = $res['spending'];
                } 
                if($total>$value){
                    $verify = 1;
                 }
                else{
                    $verify = 2;
                }
            $insta = "UPDATE `users` SET `spending` = 0 WHERE `users`.`username` = '$namee'";
            $sqlii = mysqli_query($conn,$insta); 
        }
           ?>
           <header>
 <div class="container">
   <nav class="navbar navbar-expand-md navbar-dark bg-dark  fixed-top nav">
     <div class="container">
       <a href="home.php" class="navbar-brand" style="text-shadow: 0.1em 0.1em 0.15em black"><i class="fa  fa-1x fa-money" aria-hidden="true"></i>expanses-19</a>
       <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarid">
        <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse " id="navbarid">
    <ul class="navbar-nav text-center ml-auto">
      <li class="nav-item"> <a href="home.php" class="nav-link "> <i class="fa fa-1x fa-home" aria-hidden="true"></i> Home </a></li>
      <li class="nav-item"> <a href="add.php" class="nav-link active"><i class="fa fa-1x fa-plus" aria-hidden="true"></i> add </a></li>
      <li class="nav-item"> <a href="try.php" class="nav-link "><i class="fa fa-1x fa-pencil-square-o" aria-hidden="true"></i> update </a></li>
       <li class="nav-item">  <a href="logout.php" class="nav-link " ><i class="fa fa-1x fa-sign-out" aria-hidden="true"></i> logout</a></li>
    </ul>
  </div>
  </div>
   </nav>
   </div>
  </header>
<div class="container text-center">
      <img src="logo/logo.png" class="top">
    </div>
    <div class="container topup">
     <form class="form-horizontal topup" method="POST">
        <div class="form-group row">
       <div class="col-8">
            <input type="number" name="saving" class="form-control" id="pwd1" placeholder="Enter the amount you have spend">
          </div>
          <div class="col-2">
         <input type="submit" name="done" value="done" class="btn btn-dark btn-md">
          </div>
        </div>
      <div class="container col-5">
      <?php 
        if($verify == 1){
          echo  "<div class='alert alert-danger' role='alert'>
            your spend more amount today, please keep control on your spending.
          </div>";
        }
          if($verify == 2){
            echo  "<div class='alert alert-success' role='alert'>
              you have spend as per your plan . well done !
            </div>";}
        ?> 
      </div>
        <div class="container text-center topup">
        <input type="submit" name="comp" value="thats for today" class="btn btn-dark btn-md">
        </div>
     </form>
    </div>
    
</body>
</html>