<?php
$host="localhost";
$username="root";
$password="";
$db="blood";
$con=mysqli_connect($host,$username,$password,$db);
if(!$con){
    echo "connection failed!";
}
$sql="select * from blood";
$result=mysqli_query($con,$sql);
?>