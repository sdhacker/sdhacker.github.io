<?php 

/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'contact';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} ;
?>
<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>messages</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">	  
	  
	  
	  <link rel="icon" href="img/isdn.png" type="image/x-icon"/>
    <!-- Material Design Bootstrap -->
	<link href="https://cdn.rawgit.com/sdhacker/edproject/master/mdb.css" rel="stylesheet">	  
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
	 <link href="css/pace.css" rel="stylesheet">
	 

	
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<link href="https://cdn.rawgit.com/sdhacker/edproject/master/xyz.css" rel="stylesheet">

</head>
<body>

<?php
$sm = "SELECT * FROM contact_messages";
$result = $mysqli->query($sm);
if ($result->num_rows > 0 ){
echo 	
"<table class='table table-hover table-bordered'>
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Email Id</th>
      <th>Subject</th>
	  <th>Messages</th>
    </tr>
  </thead>";
  while($row = $result->fetch_assoc() ){
	  
echo
	  
 " <tbody>
    <tr>
      <th scope='row'>".$row["id"]."</th>
      <td>".$row["name"]."</td>
      <td>".$row["email_id"]."</td>
      <td>".$row["subject"]."</td>
	  <td>".$row["messages"]."</td>
    </tr>
  </tbody>";
  }
  
echo "</table>";
}

?>


<!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/js/mdb.min.js"></script>
	<script type="text/javascript" src="https://cdn.rawgit.com/sdhacker/edproject/master/xyz.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
	
</body>
</html>



