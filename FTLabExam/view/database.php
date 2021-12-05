<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "MyDB";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function Search($conn,$table,$id)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE ID='". $id."'");
 return $result;
 }


 function SearchID($conn,$table,$id,$name)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE ID='". $id."'Name='".$name."'");
 return $result;
 }


 function SearchAll($conn,$table,$id,$Ename,$minimum,$maximum)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE Salary >'". $minimum."' AND Salary <'".$maximum."'");
 return $result;
 }


function CloseCon($conn)
 {
 $conn -> close();
 }
}


?>