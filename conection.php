<?php
$host="localhost";
$username="root";
$password="";
$db="test";
$con=mysqli_connect($host,$username,$password,$db);
if(!$con){
    echo "connection failed!";
}
else{
    echo "conect";
    $sql="select * from test";
    $result=mysqli_query($con,$sql);
}
?>