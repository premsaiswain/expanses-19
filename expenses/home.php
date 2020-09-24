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
    .style8{
        margin-top: 50px;
        padding: 5px;
        text-shadow: 2px 2px 2px black;
    }
     .box{
         border:2px soild red;
         width:50px;
         height:100px;
     }
     .layouttop{
         margin-top: 40px;
         display: flex;
         justify-content: center;
     }
     .move{
         margin-top: 50px;
     }
  
    </style>
    <title>Document</title>
</head>
<body>
<?php 
session_start();
 
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
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
      <li class="nav-item"> <a href="home.php" class="nav-link active"> <i class="fa fa-1x fa-home" aria-hidden="true"></i> Home </a></li>
      <li class="nav-item"> <a href="add.php" class="nav-link "><i class="fa fa-1x fa-plus" aria-hidden="true"></i> add </a></li>
      <li class="nav-item"> <a href="try.php" class="nav-link "><i class="fa fa-1x fa-pencil-square-o" aria-hidden="true"></i> update </a></li>
       <li class="nav-item">  <a href="logout.php" class="nav-link " ><i class="fa fa-1x fa-sign-out" aria-hidden="true"></i> logout</a></li>
    </ul>
  </div>
  </div>
   </nav>
   </div>
  </header>
<div class="container text-center">
    <img src="logo/logo.png" class="move">
<div class="container  text-center style8">
    <h1>Welcome "<?php echo $_SESSION['username'] ?>"</h1>
    <h4>hope you have a good day!</h4>
    </div>

<div class="container row">
    <div class="container col-12 col-sm-4 move"> 
        <h4>Add the amount that you have spend today.</h4>
      <a href="Add.php" class="btn btn-dark btn-lg " data-toggle="tooltip" data-placement="top" title="add">Add</a>  

</div> 
    <div class="container col-12 col-sm-4 move">
        <h4>Check out your total spending's.</h4>
      <a href="check.php" class="btn btn-dark btn-lg" data-toggle="tooltip" data-placement="top" title="check">check</a>  

</div>
    <div class="container col-12 col-sm-4 move">
        <h4>update your per day spending.</h4>
      <a href="try.php" class="btn btn-dark btn-lg" data-toggle="tooltip" data-placement="top" title="update">update</a>  

</div>
</div>


</footer>
</body>
</html>