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
         margin-top: 140px;
     }
     .top{
       margin-top: 50px;
     }
    </style>
    <title>try page</title>
</head>
<body>
    <?php 
    if(isset($_POST['done'])){
        include "dbconnect.php";
        session_start();
        $uname = $_SESSION['username'];
        $save = $_POST['saving'];
        $sql = "UPDATE `users` SET `saving` = '$save' WHERE `users`.`username` = '$uname'";
        $result= mysqli_query($conn,$sql);
        if($result)
        {
            header("location:home.php");
        }
        else
        {
            echo "sorry";
        }

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
      <li class="nav-item"> <a href="add.php" class="nav-link "><i class="fa fa-1x fa-plus" aria-hidden="true"></i> add </a></li>
      <li class="nav-item"> <a href="try.php" class="nav-link active"><i class="fa fa-1x fa-pencil-square-o" aria-hidden="true"></i> update </a></li>
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
     <form class="form-horizontal" method="POST">
        <div class="form-group">
       <div class="col-sm-10">
            <input type="number" name="saving" class="form-control" id="pwd1" placeholder="Enter the amount you wann save per day">
          </div>
        </div>

        <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8 style4 text-center">
      <input type="submit" class="btn btn-dark btn-lg style2" name="done" value="done">
    </div>
  </div>
     </form>
    </div>
</body>
</html>