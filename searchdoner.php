<html>
    <head>
	<title>Serach Result For Doner</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php#srchdoner">Search Plazma Doner</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php#srchmeds">Search Meds & Injections</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php#doner-list">View Doner's List</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="signup.php">Signup</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">Login</a>
    </li>
    
  </ul>
</nav>
<table class='table table-striped table-dark table-hover'>
   
      <tr>
          <th>Name</th>
        <th>Contact</th>
        <th>Blood Group</th>
        <th>City</th>
        <th>Landmark</th>
        </tr>
        <!----><?php
       if (isset($_POST['submit'])) {
    $searchValue = $_POST['search'];
    $con = new mysqli("localhost", "id14640211_covidinfo", "Adityabarve@28", "id14640211_covid19info");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * FROM users WHERE ADDRESS1 LIKE '%$searchValue%' AND TYPE LIKE 'DONER'";

        $result = $con->query($sql);
        $i = 0;
        while ($row = $result->fetch_assoc()) {
             $i++;
            $id = $row['ID'];
        
            $title = $row['NAME'];
            $sbtitle = $row['CONTACT'];
            $content = $row['BLOOD_GROUP'];
            $city = $row['ADDRESS1'];
            $landmark = $row['ADDRESS2'];
             echo "           
  
   
            <tr>
            <td><h5 style='overflow-y:hidden;'>".$row['NAME']."</h5></td>
            <td><h5 style='overflow-y:hidden;'>".$row['CONTACT']."</h5></td>
             <td><h5 style='overflow-y:hidden;'>".$row['BLOOD_GROUP']."</h5></td>
             <td><h5 style='overflow-y:hidden;'>".$row['ADDRESS1']."</h5></td>
             <td><h5 style='overflow-y:hidden;'>".$row['ADDRESS2']."</h5></td>
            
            </tr>
             ";
        }

      
    }   
}
?>
</table>
    </body>
</html>