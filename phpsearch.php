<?php
$search=$_POST["search"];
$connection=mysqli_connect("localhost","root","","blood");
//mysql_select_db("blog1") or die(mysql_error());
$sql="select * from blood where email like'%$search%'";
$result=mysqli_query($connection,$sql);
if($result->num_rows>0){
    while($row=mysqli_fetch_assoc($result)){
        echo $row["cno"]." ".$row['name']." ".$row['gender']." ".$row['email']."  ".$row['phone']." ".$row['bloodgroup']." ".$row['other']." ".$row['dt']."<br>";
    }
}
    else{
        echo "0 records";
    }
?>