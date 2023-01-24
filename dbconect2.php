<?php
$search=$_POST["search"];
// $text=$_POST["str"];
$con=mysqli_connect("localhost","root","","blood");
$sql="select * from blood where name like'%$search%'";
$result=mysqli_query($con,$sql);
if(!$con){
    echo "connection failed!";
}

?>