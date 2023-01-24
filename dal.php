<?php
include'dbconect1.php' ;
$cno= $_GET['cno'];
$deletequery =  "DELETE FROM `blood` WHERE `blood`.`cno` = $cno";
$query  = mysqli_query($con,$deletequery);
header('location:doners.php');
if($query){
    ?>
    <script>
         alert('delete sucessfull');
    </script>
    <?php
}else{
    ?>
    <script>
         
        alert('no delete data');
   </script>
    <?php
    }

?>