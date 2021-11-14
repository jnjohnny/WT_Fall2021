<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="view/css.css">
</head>
<body>


<div class="header">
  <h1 ID="header1">ABC Management System</h1>
  <h3 ID="header2">We Create Future</h3>
</div>
<div class="sticky">
<div class="topnav">
  <a href="#">Home</a>
  <a href="#">About US</a>
  <a href="#">Shop</a>

</div>
</div>


<div class="middlecolumn ">
<h1 ID="regis">Registration form </h1>

<hr>

<form action="" method="post" enctype="multipart/form-data">
<div class="registrationBox">
<p class="abcd">    
First name: <input type="text" name="fname"> </p>
<br>
<p class="abcd">
Last Name: <input type="text" name="fname"> </p>
<br>
<p class="abcd">
Age: <input type="text" name="fname"> </p>
<br>

<p class="abcd">Designation:
  <input type="radio" id="male" name="gender" value="SP">
  <label for="male">Junior Programmer</label><br>
  <input type="radio" id="female" name="gender" value="SP">
  <label for="female">Senior Programmer</label><br>
  <input type="radio" id="other" name="gender" value="PL">
  <label for="other">Project Lead</label> </p>
  <br>


<br>
<p class="abcd">
Preferred Language 
<br>

<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
 JAVA<br>
<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
PHP<br>
<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
 C++<br>
</p>
<br>

<br>



<br>
<p class="abcd">
E-mail: <input type="text" name="email"> </p>
<br>

<br><p class="abcd">
Password: <input type="password" name="email"> 
</p><br>


<br><p class="abcd">
Please Choose a File
<input type="file" name="filetoupload"></p>
<br>
<br>
</div>
<input type="submit" value="SUBMIT">
<input type="reset" value="RESET">

</form>

 </div>
  

 
</body>
</html>


