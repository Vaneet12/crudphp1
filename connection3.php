<?php
$servername="localhost";
$username="root";
$password="";
$db="responsiveform4";
$con=mysqli_connect($servername,$username,$password,$db);
if($con){
    echo "ok db";
}
else{
    echo "no".mysqli_connect_error();
}
?>