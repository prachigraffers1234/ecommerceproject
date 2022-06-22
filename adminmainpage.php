<?php

session_start();
if(!isset($_SESSION['admin_name'])){
    header('location:adminlogin.php');
}

?>


<!DOCTYPE html>
<html>
<body>

<div class="container">
    <h1>test</h1>
    <a href="logout.php">Logout</a>
    </div>
    </body>
    </html>
