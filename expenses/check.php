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
        .top{
            margin-top: 40px;
        }
        </style>
    <title>check</title>
</head>
<body>
    <?php 
    $check = 0;
    session_start();
    include "dbconnect.php";
    $total = 0;
    $namee = $_SESSION['username'];
            $sql = "SELECT * FROM `users`  WHERE `users`.`username` = '$namee'";
            $result = mysqli_query($conn, $sql);
           while($res = mysqli_fetch_array($result) ){ 
                   $total = $res['monthly'];
           }

           if(isset($_POST['reset'])){
            $insta = "UPDATE `users` SET `monthly` = 0 WHERE `users`.`username` = '$namee'";
                 $sqlii = mysqli_query($conn,$insta); 
            if($sqlii){
                $check =1;
                
            } 
            else{
                $check = 2;
               echo "error";
            }                                                                                  
     }
     

    ?>
    <header>
 <div class="container">
   <nav class="navbar navbar-expand-md navbar-dark  bg-dark fixed-top nav">
     <div class="container">
       <a href="home.php" class="navbar-brand" style="text-shadow: 0.1em 0.1em 0.15em black"><i class="fa  fa-1x fa-money" aria-hidden="true"></i>expanses-19</a>
       <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarid">
        <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse " id="navbarid">
    <ul class="navbar-nav text-center ml-auto">
      <li class="nav-item"> <a href="home.php" class="nav-link "> <i class="fa fa-1x fa-home" aria-hidden="true"></i> Home </a></li>
      <li class="nav-item"> <a href="Add.php" class="nav-link "><i class="fa fa-1x fa-plus" aria-hidden="true"></i> add </a></li>
      <li class="nav-item"> <a href="try.php" class="nav-link "><i class="fa fa-1x fa-pencil-square-o" aria-hidden="true"></i> update </a></li>
       <li class="nav-item">  <a href="logout.php" class="nav-link " ><i class="fa fa-1x fa-sign-out" aria-hidden="true"></i> logout</a></li>
    </ul>
  </div>
  </div>
   </nav>
   </div>
  </header>
    <div class="container layout2">
<div class="jumbotron">
  <h1 class="display-4">Hello, <?php echo $_SESSION['username'] ?></h1>
  <p class="lead">your total spendings is <?php echo $total;?>.</p>
  <hr class="my-4">
  <p>wannn reset your total spendings..! press here</p>
  <h4><?php  if ($check == 1){
     echo  "<div class='alert alert-success' role='alert'>
       reset sucessful.
       </div>"; }
       if($check == 2){
        echo  "<div class='alert alert-danger' role='alert'>
        reset unsucessful.
        </div>"; 
       }
      ?></h4>
  <form method="POST">
  <p class="lead">
    <input type="submit" value="reset" name="reset" class="btn btn-danger btn-lg">
  </p>
</form>
</div>
</div>

</body>
</html>