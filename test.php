<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "contact_us";

$conn = new mysqli($servername, $username, $password,$db);

$user_name =  $_REQUEST['user_name'];
$password = $_REQUEST['password'];


$sql = "INSERT INTO login_form (user_name,password) values ('$user_name','$password')";

header("location: http://localhost/tourism/index.html");
mysqli_query($conn, $sql);
mysqli_close($conn);
?>