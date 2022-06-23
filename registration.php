<?php
session_start();
include_once 'dbconnect.php';
if(isset($_Post['signbtn'])){
    $venfname = $_POST['vendorfirstname'];
    $venlname = $_POST['vendorlastname'];
    $venmobnum = $_POST['vendormobnum'];
    $vengender = $_POST['gender'];
    $venemail = $_POST['vendoremail'];
    $venpassword = $_POST['vendorpassword'];
    $venage = $_POST['vendorage'];
    $venprofilephoto = $_POST['profile_photo'];

    $sqltable = "INSERT INTO registration_vendor(`fname`, `lname`, `phone`, `gender`, `email`, `vendpassword`,
    `age`, `profileimage`) 
    VALUES ('$venfname',' $venlname','$venmobnum','$vengender','$venemail','$venpassword','$venage','$venprofilephoto')";

   $result = mysqli_query($contbl, $sqltable);
   

   if($result){
     if(mysqli_affected_rows($contbl)>0){
      echo "Registration success";
     }else{
      echo "Registration failed";
     }
   }
  

   


 }

?>


<!DOCTYPE html>
<html>
<body>

<div class="container">
<form method="POST">

<label>First Name</label>
<input type="text" name="vendorfirstname" value=""><br>

<label>Last Name</label>
<input type="text" name="vendorlastname" value=""><br>

<label>Mobile No.</label>
<input type="text" name="vendormobnum" value=""><br>

<label>Gender</label>
<input type="radio" name="gender" value="Male"><label for="male">Male</label>
<input type="radio" name="gender" value="Female"><label for="female">Female</label><br>

<label>Email</label>
<input type="text" name="vendoremail" value=""><br>

<label>Password</label>
<input type="text" name="vendorpassword" value=""><br>

<label>Age</label>
<input type="text" name="vendorage" value=""><br>

<label>Profile image</label>
<input type="file" name="profile_photo"><br>

<input type="submit" name="signbtn" value="Submit">


</form>

</div>

</body>
</html>