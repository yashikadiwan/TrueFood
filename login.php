<?php
include 'connect.php';
$login=false;
$show_error=false;
if(isset($_POST['submit'])){
if($_SERVER["REQUEST_METHOD"]==="POST"){
$username=$_POST["username"];
$password=$_POST["password"];

$sql="SELECT * FROM loginrecord WHERE username='$username'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num==1){
    while($row=mysqli_fetch_assoc($result)){
    if(password_verify($password,$row['password'])){
    $login=true;
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['username']=$username;
    header("location:homepage.php");
}
else{
    $show_error=true;
  }
}
}
}
else{
  $show_error=true;
}}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
    <title>login_system</title>
  </head>
  <body>
<?php include 'navbar.php'; ?>
<div class= "container my-4">
  
<?php
if($login){
 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> you are successfully logged in.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>
<?php
if($show_error){
 echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Try again!</strong> wrong credentials.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>


<h1 class="text-center">Login to your account</h1>
<form method="post">
  <div class="form-group">
    <label for="exampleInputUser ">Username</label>
    <input type="text" class="form-control" id="username"  name="username"  placeholder="Enter username">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" name="password"  placeholder="Create Password">
  </div>
  <button type="submit" class="btn btn-primary" name="submit" >Login</button>
</form>
</div>
<?php include 'footer.php'; ?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

