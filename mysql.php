<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "contact_us";

$conn = new mysqli($servername, $username, $password,$db);

$name =  $_REQUEST['name'];
$mobile_number = $_REQUEST['mobile_number'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

$sql = "INSERT INTO contact_table (name,mobile_number,email,subject,message) values ('$name','$mobile_number','$email','$subject','$message')";

header("location: http://localhost/tourism/contact_us.php");
mysqli_query($conn, $sql);
mysqli_close($conn);
?>