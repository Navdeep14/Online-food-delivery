<?php
date_default_timezone_set("Asia/Kolkata");
$servername = "localhost";
$username = "id2964647_navdeep";
$password = "14121997";
$database = "id2964647_navi_eats";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['password'];
$phone=$_POST['phone'];
$country=$_POST['country'];
$time=date("h:i:s");
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO customer(First_Name,Last_Name,Email,Password,Phone_No,Country,Time) VALUES ('$fname','$lname','$email','$phone','$pass','$country','$time')";
if (mysqli_query($conn, $sql)) {
    echo " <h1>YOUR REGISTRATION IS SUCCESSFUL!!!</h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
