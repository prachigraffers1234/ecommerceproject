<?php
$con = mysqli_connect('localhost', 'root');
if($con){
 echo "connect successful";
}else{
    echo "No connection";
}

$db = mysqli_select_db($con, 'ecommerceproject');