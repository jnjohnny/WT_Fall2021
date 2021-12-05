<?php
include('../view/database.php');
?>

<!DOCTYPE html>
<head>
<link rel="stylesheet" href="">


<script src="control/myjs.js"></script> 

</head>

<body>

<div class="search">

<form action="show.php" method="post">
    <h3>Search By ID: </h3>
    <input type="text" id="id" name="id" placeholder="Enter ID" >
    <br><h3>Search By Name: </h3>
    <input type="text"  name="name" placeholder="Enter Name" >
    <br><h3>Search By Salary: </h3>
    Minimum: <input type="text"  name="minimum" placeholder="Minimum" ><br>
    Maximum: <input type="text" name="maximum" placeholder="Maximum" >
    <br> <input name="submit" type="submit" value="Search" onclick="MyFunc()">

</form>



</div>

<br>
<br>

</body>

</html>