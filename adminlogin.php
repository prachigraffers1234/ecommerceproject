<?php
session_start();

$con = mysqli_connect('localhost', 'root');
if($con){
 echo "connect successful";
}else{
    echo "No connection";
}

$db = mysqli_select_db($con, 'ecommerceproject');

if(isset($_POST['submit'])){
    $username = $_POST['adminname'];
    $useremail = $_POST['adminemail'];
    $userpass = $_POST['adminpassword'];

    $sql = "select * from admin_login where admin_name = '$username' && admin_email = '$useremail' && password = '$userpass'";
    $query = mysqli_query($con,$sql);

    $rowcount = mysqli_num_rows($query);
        if($rowcount == 1){
            echo "Login success";
            $_SESSION['admin_name'] = $username;
            header('location:adminmainpage.php'); 
        }else{
            echo "Login failed";
            header('location:adminlogin.php');
        }
    
}

?>
<!DOCTYPE html>
<html>
<body>

<div class="container">
<form method="POST">

<label>Name</label>
<input type="text" name="adminname" value="">

<label>Email</label>
<input type="text" name="adminemail" value="">

<label>Password</label>
<input type="text" name="adminpassword" value="">

<input type="submit" name="submit" value="Submit">


</form>

</div>

</body>
</html>