<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style-signup.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  *{
      text-transform:none;
  }
      .form-control,.btn{
          margin-top:5px;
      }
      .signup{
          overflow-x:hidden;
      }
  </style>
</head>
<body>
	<div class="jumbotron signup">
<form method="POST">
	<center>
	<p class="">|| Service To Humanity Is Service To God ||</p>
	<h3 class="">Signup</h3></center><br>
	<input type="text" name="name" placeholder="Enter Name :" class="form-control form-element-input" required>
	<input type="text" name="bgrp" placeholder="Enter Blood Group : " class="form-control form-element-input">
	<input type="text" name="contact" placeholder="Enter Contact No :" class="form-control form-element-input" required>
	<input type="email" name="email" placeholder="Enter Email Id : " class="form-control form-element-input" required>	
	<input type="text" name="address1" placeholder="Enter City / Town Name : " class="form-control form-element-input" required>
	<input type="text" name="address2" placeholder="Enter Landmark : " class="form-control form-element-input">
	<input type="password" name="password" placeholder="Create a Password : " class="form-control form-element-input" required>
	<p class="">Note : If you want to provide information about Medicine, Injections or Vaccine then please select Information Provider</p>
	<input type="radio" name="type" value="Doner">Doner <br>
    <input type="radio" name="type" value="Information_provider">Information Provider<br>
    <input type="radio" name="type" value="Reciver">Reciver
    <br>
	<input type="submit" name="go" class="btn btn-primary" placeholder="Signup">
</form>
	</div>
	<script src="removebanner.js"></script>
</body>
</html>
<?php


// Create connection
$connection = mysqli_connect("localhost", "id14640211_covidinfo","Adityabarve@28", "id14640211_covid19info");

// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}
/*echo "Connected successfully";*/
if (isset($_POST['go'])){
$type=$_POST['type'];
$name=	$_POST['name'];
$email= $_POST['email'];
$contact= $_POST['contact'];
$address1= $_POST['address1'];
$address2= $_POST['address2'];
$pass = $_POST['password'];
$date = date('Y-m-d H:i:s');
$bggroup=$_POST['bgrp'];
$datainsert = "INSERT INTO users (NAME,BLOOD_GROUP,EMAIL,CONTACT,ADDRESS1,ADDRESS2,PASSWORD,TYPE,DATETIME) VALUES ('$name','$bggroup','$email','$contact','$address1','$address2','$pass','$type',now())";
$execute = mysqli_query($connection, $datainsert);
if($execute){
echo "<script>alert('Thank You For Registering With Us')  
window.open('login.php')
</script>";
}
else{
	echo "<script>alert('ERROR OCCOURED')</script>";
}

}
?>