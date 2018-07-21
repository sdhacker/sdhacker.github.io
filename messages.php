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


$name = $_POST['name'];
$email_id =$_POST['email_id'];
$subject = $_POST['subject'];
$messages=$_POST['messages'];


      


    
    $sql = "INSERT INTO contact_messages(name,email_id,subject,messages) " 
            . "VALUES ('$name','$email_id','$subject','$messages')";
		
		   
    // Add user to the database
   echo "Thank you " . $name . "  for your submission.";
if($mysqli->query($sql) )
 
header("location: index.html") ;

?>