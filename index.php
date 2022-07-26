<!DOCTYPE html>
<html>
<head>
	<title>Covid Info India</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Covid Info India || Service To Humanity Is Service To God ||">
  <meta name = "title" content = "|| Service To Humanity Is Service To God ||">
  <meta name = "description" content = "Register with COVID INFO INDIA and find doner and information related to Plasma or Meds or Oxygen Easily">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
      .home{
          
      }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <!-- <a class="navbar-brand" href="#">Logo</a> -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#srchdoner">Search Plazma Doner</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#srchmeds">Search Meds & Injections</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#doner-list">View Plazma Doner's List</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#reciver-list">View Plazma Reciver's List</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="signup.php">Signup</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">Login</a>
    </li>
    
  </ul>
</nav>

<!-- HOME SECTION -->
	<div class="container-fluid home jumbotron" id="home" style="margin-top: 20px;">
    <div class="row">
      <div class="col-md-3" style="overflow:hidden;">
      	<img src="img/covid19.jpg" height="100%" width="100%" class="img_home" style="overflow:hidden;">
      </div>
      <div class="col-md-3">
      	<h2 class="headline-home">Covid-19 Care</h2>
      	<ul style="list-style-type:circle">
      		<li>
      			<p class="text-med">-Remdesivir</p>
      		</li>
      		<li>
      			<p class="text-med">-Tocilizumab</p>
      		</li>
      		<li>
      			<p class="text-med">-Oxygen</p>
      		</li>
      		<li>
      			<p class="text-med">-Plazma</p>
      		</li>
      	</ul>
      	
      </div>
      
      <div class="col-md-6">
      	<h2 class="headline-home"></h2>
      	<div class="Search-Plazma-Doner" id="srchdoner">
      <form action="searchdoner.php" method="POST">
          
          <div class="input-group mb-3">
  <input name="search" type="text" class="form-control" placeholder="Search Doner By Location : ">
  <div class="input-group-append">
    <button class="btn btn-primary" name="submit" type="submit" data-toggle="modal" data-target="#myModal">Search</button>
  </div>
</div>
</form>
  </div>
      	<div class="Search-Plazma-Doner" id="srchmeds">
      <form action="searchmed.php" method="POST">
          <p>Search Name Of Medicine You Want like for oxygen type oxygen</p>
          <div class="input-group mb-3">
  <input name="search" type="text" class="form-control" placeholder="Search Meds & Injestions By Name : ">
  <div class="input-group-append">
    <button class="btn btn-primary" type="submit" name="submit">Search</button>
  </div>
</div>
</form>
  </div>
      </div>
      
<h3 style="overflow:hidden;" class="headline-home">If anyone have information related to any of above please do register and give information</h3>
    </div>  
  </div>
  <div class="doner-list" id="doner-list" style="overflow-x: scroll;">
     <center> <h3 style="overflow-y:hidden">Doner's List</h3></center>
      <table class='table table-striped table-dark table-hover'>
   
      <tr>
          <th>Name</th>
        <th>Contact</th>
        <th>Blood Group</th>
        <th>City</th>
        <th>Landmark</th>
        </tr><?php    
    
     $connection=mysqli_connect("localhost","id14640211_covidinfo","Adityabarve@28","id14640211_covid19info");
      $querry1 = "SELECT * FROM users WHERE TYPE = 'DONER'";
        $querry2 = mysqli_query($connection,$querry1);
        $i = 0;
        while($querry3 = mysqli_fetch_assoc($querry2)){
            $i++;
            $id = $querry3['ID'];
        
            $title = $querry3['NAME'];
            $sbtitle = $querry3['CONTACT'];
            $content = $querry3['BLOOD_GROUP'];
            $city = $querry3['ADDRESS1'];
            $landmark = $querry3['ADDRESS2'];
            /*$quantity[] = $querry3['QUANTITY'];*/
?>   
    
        
      
    
   
  
   
      <?php
        echo "           
  
   
            <tr>
            <td><h5 style='overflow-y:hidden;'>".$querry3['NAME']."</h5></td>
            <td><h5 style='overflow-y:hidden;'>".$querry3['CONTACT']."</h5></td>
             <td><h5 style='overflow-y:hidden;'>".$querry3['BLOOD_GROUP']."</h5></td>
             <td><h5 style='overflow-y:hidden;'>".$querry3['ADDRESS1']."</h5></td>
             <td><h5 style='overflow-y:hidden;'>".$querry3['ADDRESS2']."</h5></td>
            
            </tr>
             ";
        ?>
          <?php
        }
    ?></table>
  </div>
  
  
  
  
  
  
  <div class="reciver-list" id="reciver-list" style="overflow-x: scroll;">
      <center> <h3 style="overflow-y:hidden">Reciver's List</h3></center>
      <table class='table table-striped table-dark table-hover'>
   
      <tr>
          <th>Name</th>
        <th>Contact</th>
        <th>Blood Group</th>
        <th>City</th>
        <th>Landmark</th>
        </tr><?php    
    
     $connection=mysqli_connect("localhost","id14640211_covidinfo","Adityabarve@28","id14640211_covid19info");
      $querry1 = "SELECT * FROM users WHERE TYPE = 'RECIVER'";
        $querry2 = mysqli_query($connection,$querry1);
        $i = 0;
        while($querry3 = mysqli_fetch_assoc($querry2)){
            $i++;
            $id = $querry3['ID'];
        
            $title = $querry3['NAME'];
            $sbtitle = $querry3['CONTACT'];
            $content = $querry3['BLOOD_GROUP'];
            $city = $querry3['ADDRESS1'];
            $landmark = $querry3['ADDRESS2'];
            /*$quantity[] = $querry3['QUANTITY'];*/
?>   
    
        
      
    
   
  
   
      <?php
        echo "           
  
   
            <tr>
            <td><h5 style='overflow-y:hidden;'>".$querry3['NAME']."</h5></td>
            <td><h5 style='overflow-y:hidden;'>".$querry3['CONTACT']."</h5></td>
             <td><h5 style='overflow-y:hidden;'>".$querry3['BLOOD_GROUP']."</h5></td>
             <td><h5 style='overflow-y:hidden;'>".$querry3['ADDRESS1']."</h5></td>
             <td><h5 style='overflow-y:hidden;'>".$querry3['ADDRESS2']."</h5></td>
            
            </tr>
             ";
        ?>
          <?php
        }
    ?></table>
  </div>
  <script src="removebanner.js"></script>
</body>
</html>