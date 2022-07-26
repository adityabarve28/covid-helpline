<html>
    <head>
	<title>Serach Result For Meds</title>
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
        <th>Name Of Concerned Person</th>
        <th>Contact Of Concerned Person</th>
        <th>Address Of Concerned Person</th>
        <th>City Of Concerned Person</th>
        <th>Item Available</th>
        </tr>
        <!----><?php
       if (isset($_POST['submit'])) {
    $searchValue = $_POST['search'];
    $con = new mysqli("localhost", "id14640211_covidinfo", "Adityabarve@28", "id14640211_covid19info");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * FROM post WHERE MED_AVAILIABLE LIKE '%$searchValue%'";

        $result = $con->query($sql);
        $i = 0;
        while ($row = $result->fetch_assoc()) {
             $i++;
            $id = $row['ID'];
            $ai=$row['MED_AVAILIABLE'];
$name=	$row['NAME'];
$nocp= $row['NAME_OF_CONC_PER'];
$contact= $row['CONTACT'];
$cnocp= $row['CONTACT_OF_CONC_PER'];
$aocp= $row['ADD_OF_CONC_PER'];
$cocp = $row['CITY_OF_CONC_PER'];
            
             echo "           
  
   
            <tr>
            <td><h5 style='overflow-y:hidden;'>".$row['NAME']."</h5></td>
            <td><h5 style='overflow-y:hidden;'>".$row['CONTACT']."</h5></td>
             <td><h5 style='overflow-y:hidden;'>".$row['NAME_OF_CONC_PER']."</h5></td>
             <td><h5 style='overflow-y:hidden;'>".$row['CONTACT_OF_CONC_PER']."</h5></td>
             <td><h5 style='overflow-y:hidden;'>".$row['ADD_OF_CONC_PER']."</h5></td>
             <td><h5 style='overflow-y:hidden;'>".$row['CITY_OF_CONC_PER']."</h5></td>
             <td><h5 style='overflow-y:hidden;'>".$row['MED_AVAILIABLE']."</h5></td>
            
            </tr>
             ";
        }

      
    }   
}
?>
</table>
    </body>
</html>