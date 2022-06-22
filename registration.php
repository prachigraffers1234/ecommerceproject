<?php
session_start();
$contbl = mysqli_connect('localhost', 'root');
$db = mysqli_select_db($contbl, 'ecommerceproject');
if(isset($_Post['signbtn'])){
    $venfname = $_POST['vendorfirstname'];
    $venlname = $_POST['vendorlastname'];
    $venmobnum = $_POST['vendormobnum'];
    $vengender = $_POST['gender'];
    $venemail = $_POST['vendoremail'];
    $venpassword = $_POST['vendorpassword'];
    $venage = $_POST['vendorage'];
    $venprofilephoto = $_POST['profile_photo'];

    $sqltable = "select * from registration_vendor where fname='$venfname' && lname = '$venlname' && 
    phone = '$venmobnum' && gender = '$vengender' && email = '$venemail' && vendpassword = '$venpassword'
    && age = '$venage' && profileimage = '$venprofilephoto'";
   $result = mysqli_query($contbl, $sqltable);
   
   $num = mysqli_num_rows($result);
   if($num == 1){
    echo "duplicate";
    $_SESSION['fname'] = $venfname;

   }else{
    $sqltbl = "Insert into registration_vendor(`fname`, `lname`, `phone`, `gender`, `email`, `vendpassword`,
    `age`, `profileimage`) 
    VALUES ('$venfname',' $venlname','$venmobnum','$vengender','$venemail',
    '$venpassword','$venage','$venprofilephoto')";
    mysqli_query($contbl, $sqltbl);

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