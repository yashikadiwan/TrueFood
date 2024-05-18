<?php
 include 'connect.php';
$show_alert=false;
$show_error=false;
if(isset($_POST['submit'])){

$username=$_POST["username"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];

$existsql="SELECT * FROM loginrecord WHERE username='$username'";
$result=mysqli_query($con,$existsql);
$numExistRow=mysqli_num_rows($result);
if($numExistRow>0){
  $show_error="username already exists";
}
else{
  if(($password==$cpassword)){
    $hash=password_hash($password,PASSWORD_DEFAULT);
  $sql="INSERT INTO `loginrecord` (`username`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp())";
  $result=mysqli_query($con,$sql);
  if($result){
   $show_alert=true;
  }
  }
  else{
  $show_error="passwords do not match";
}
}
}
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
  <link rel="stylesheet" href="style.css">
    <title>login_system</title>

    <style>
      
      </style>

    <!--form validation -->
    <script>
    function validateform() {
    var uname = document.getElementById("username").value;             //gives value entered in username  
    var pwd=document.getElementById("password").value;
    var regx1 = /[a-z]/g;                                             //username can only contain alphabet
    var regx=/(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])/;                   //pwd must contain alpabet, no and character
    
    if(uname.trim()=="" || pwd.trim()==""){                             //checks for blank spaces in username and password
      alert("No blank spaces are allowed");
      return false;
    }
    else if (pwd.trim().length<5){
      alert("Minimum 5 characters needed");
      return false;
    }
    else if(regx1.test(uname)==false){
      alert("invalid username");                        
      return false;
    }
    else if(regx.test(pwd)){
      return true;
    }
    else{
      alert("invalid pwd:password must contain alphabet ,numeric and a special character");
      return false;
    }
}
</script>
<!-- form validation ends-->

</head>
<body>
<?php include 'navbar.php'; ?>
<div class= "container my-4">
  
<?php
if($show_alert){
 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your account has been created. Please login.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>
<?php
if($show_error){
 echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Try again!</strong> '.$show_error.'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>


<h1 class="text-center"><b> Signup to our website</b> </h1>
<form method="post" name="myform" onsubmit="return validateform()">
  <div class="form-group">
    <label for="exampleInputUser ">Username</label>
    <input type="text" class="form-control" id="username"  name="username"  placeholder="Enter username" required><span class="formerror" ><b></b></span>
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" name="password"  placeholder="Create Password"required ><span class="formerror" ><b></b></span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Re-enter your password" required ><span class="formerror" ><b></b></span>
    <small  class="form-text text-muted">Make sure to type the same password</small>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">SignUp</button>
</form>
<p> <button class="btn" style="font-size:20px;" > <a href="login.php"> Click to Log into your account</a> </button></p>

</div>


<?php include 'footer.php';?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

