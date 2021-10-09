<?php include "action/action.php" ?>

<html>

<body>

<h1>Registration Form</h1>
<form action="" method="POST">
First Name: <input type="text" name="firstname"><?php  echo $fname;?><br>

Last Name: <input type="text" name="lasttname"><?php  echo $lname;?><br>

Age: <input type="number" name="age"><?php  echo $age;?><br>

Designation: <input type="radio" id="junior" name="designation" value="Junior Programmer">
  <label for="junior">Junior Programmer</label>
  <input type="radio" id="senior" name="designation" value="Senior Programmer">
  <label for="senior">Senior Programmer</label>
  <input type="radio" id="projectl" name="designation" value="Project Lead">
  <label for="projectl">Project Lead</label>
  
  <?php echo $designation; ?>
  <br>
 
Preferred Language
<input type="checkbox" id="JAVA" name="JAVA" value="JAVA">JAVA
<input type="checkbox" id="PHP" name="PHP" value="PHP">PHP
<input type="checkbox" id="CPP" name="CPP" value="C++">C++
<?php echo $language; ?>

<?php echo $v1;?>

<?php echo $v2;?>

<?php echo $v3;?>
<br>


E-mail:<input type="text" name="email"><?php  echo $email;?><br>
Password:<input type="password" name="password"><br>
<input type="submit" value="Submit">

</body>


</html>



