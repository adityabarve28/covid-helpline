<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style-signup.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
      .form-control,.btn{
          margin-top:5px;
      }
      *{
	overflow: hidden;
	text-transform:none;
}
.form{
	margin: 10%;
	margin-top: 200px;
	padding: 50px;
}
.form-element-input{
	padding: 20px;
	overflow-y: hidden;
}
  </style>
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
$con = mysqli_connect("localhost", "id14640211_covidinfo","Adityabarve@28", "id14640211_covid19info");
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE NAME='$username' AND PASSWORD='$password'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to index.php
            echo "<script>window.location.href = 'https://universecode.ml/covid-info/post.php';</script>";
     //header("Location: post.php");
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
 }
    }else{
?>
<div class="form jumbotron">
<center><p>|| Service To Humanity Is Service To God ||</p><br><h1>LogIn</h1><br></center>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" class="form-control" required />
<input type="password" name="password" placeholder="Password" class="form-control" required />
<input name="submit" type="submit" value="Login" class="btn btn-primary" />
</form>
<p>Not registered yet? <a href='signup.php'>Register Here</a></p>
</div>
<?php } ?>
</body>
</html>