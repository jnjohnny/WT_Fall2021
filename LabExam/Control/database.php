<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$Firstname=$_REQUEST['firstname'];
$Lstname= $_REQUEST["lasttname"];
$Email=$_REQUEST["email"];
$Gender=$_REQUEST["gender"];
$Mobile=$_REQUEST["mobile"];
$Date=$_REQUEST["dob"];
$Hscr=$_REQUEST["hscR"];
$Sscr=$_REQUEST["sscR"];
$Course=$_REQUEST["course"];
$Year=$_REQUEST["year"];
$Yearword=$_REQUEST["yearword"];

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$dbname = "AIUB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO New_Students (fname,lname,email,gender,mobile,dateofbirth,hscR,ssR,course,yearA,semester)
VALUES ('$Firstname','$Lstname','$Email','$Gender','$Mobile','$Date','$Hscr','$Sscr','$Course','$Year','$Yearword')";
$receive = $conn->query($sql);
if($receive)
{ echo "Data successfully inserted!\n";
    echo "<br>";  }
else
{ echo "Error occurred!"; 
    echo "<br>"; }
$conn->close();

}
?>