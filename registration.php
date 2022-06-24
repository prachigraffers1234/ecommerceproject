<?php
include_once 'dbconnect.php';

if(isset($_POST['signbtn'])){
    $venfname = $_POST['vendorfirstname'];
    $venlname = $_POST['vendorlastname'];
    $venmobnum = $_POST['vendormobnum'];
    $vengender = $_POST['genderdata'];   
    $venemail = $_POST['vendoremail'];
    $venpassword = $_POST['vendorpassword'];
    $venage = $_POST['vendorage'];
    $venprofilephoto = $_POST['profile_photo'];
  
    $sql=mysqli_query($con,"select userid from registration_vendor where email='$venemail'");
    $row=mysqli_num_rows($sql);

    if($row>0){
      echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
    
    }
    else{
      $query = "INSERT INTO registration_vendor (`fname`, `lname`, `phone`, `gender`, `email`, `vendpassword`,
      `age`, `profileimage`) 
      VALUES ('$venfname',' $venlname','$venmobnum','$vengender','$venemail','$venpassword','$venage','$venprofilephoto')";
      
      $result = mysqli_query($con, $query);
      if($result){
        echo "<script>alert('Register successfully');</script>";
      }
     
    }

}
else{
  echo "no data";
 }

?>


<!DOCTYPE html>
<html>
<body>

<div class="container">
<form method="POST" action="">

<label>First Name</label>
<input type="text" name="vendorfirstname" value=""><br>

<label>Last Name</label>
<input type="text" name="vendorlastname" value=""><br>

<label>Mobile No.</label>
<input type="text" name="vendormobnum" value=""><br>

<label>Gender</label>
<input type="radio" name="genderdata" value="Male"><label>Male</label>
<input type="radio" name="genderdata" value="Female"><label>Female</label><br>

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