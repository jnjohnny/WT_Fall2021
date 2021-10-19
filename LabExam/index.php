<?php 

include "Control/database.php";


?>

<html>

<body>

<h1>Registration Form</h1>
<form action="" method="POST" enctype="multipart/form-data">
First Name: <input type="text" name="firstname" minlength="4"><br>

Last Name: <input type="text" name="lasttname" minlength="4"><br>

E-mail:<input type="text" name="email"><br>

Gender: <input type="radio" id="male" name="gender" value="Male">
  <label for="gender">Male</label>
  <input type="radio" id="female" name="gender" value="Female">
  <label for="female">Female</label>
  
  <br>

Mobile Number: <input type="INT" name="mobile"><br>

<label for="dob">Date of Birth:</label>
<input type="date" name="dob" required><br>
<br>

HSC Result: <input type="text" name="hscR"><br>

SSC Result: <input type="text" name="sscR"><br>


<label for="course">Select a Course you want to enroll:</label>
<select name="course" id="course">
<option value="CSE" selected>CSE</option>
  <option value="BBA">BBA</option>
  <option value="English">English</option>
  <option value="eee">EEE</option>
</select>
<br>


<label for="year">Choose a year Enrolling year:</label>
<select name="year" id="year">
<option value="2021" selected>2021</option>
  <option value="2022">2022</option>
  <option value="2023">2023</option>
</select>
<br>


<label for="yearword">Choose a year enrolling year:</label>
<select name="yearword" id="yearword">
<option value="Summar" selected>Summar</option>
  <option value="Fall">Fall</option>
  <option value="Spring">Spring</option>
</select>
<br>

<br><br><br>
<input type="submit" value="Insert Data">

</body>


</html>



