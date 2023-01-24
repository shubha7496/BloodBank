

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
        .btnn {
            padding: 3px 3px ;
            text-decoration: none;
            color: green;
            font-size: 30px;
            float: left;
    list-style: none;
    margin: 10px -530px;
    overflow: auto;
        }
    </style>
</head>
<body>
    <img class="medi" src="blod.jpg" altc="medi">
    <div class="container">
    <!-- <li><a href="navigation.html">Home</a> </li> -->
    <button class="btnn"><a href="navigation.php">home</a></button>
        <h1 style=color:green > welcome to Blood Bank</h1>
        <?php
      
            ?>
        <form action="index.php" method="post">
        <?php
include 'dbconect1.php';
$cno=$_GET['cno'];
$selectquery="select * from blood where cno=$cno";
$query=mysqli_query($con,$selectquery);
$result=mysqli_fetch_assoc($query);
 if(isset($_POST['name'])){
     
     $server="localhost";
     $username="root";
     $password="";
     $con=mysqli_connect($server,$username,$password);
     if(!$con){
         die("conection to this database faild" .
         mysqli_connect_error());
        }
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$bloodgroup=$_POST['bloodgroup'];
$desc=$_POST['desc'];
//$sql="INSERT INTO `blood`.`blood`( `name`, `age`, `gender`, `email`, `phone`, `bloodgroup`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$bloodgroup', '$desc', current_timestamp());";
// echo $sql;
// if($con->query($sql)==true){
// $insert=true;
// }
// else{
//     echo "ERROR: $sql <br>$con->error";
// }
// $con->close();
}
?>
            <input type="text" name="name" id="name" placeholder="enter your name" value="<?php echo $result['name'];?>">
            <input type="text" name="age" id="age" placeholder="enter your age" value="<?php echo $result['age'];?>">
            <input type="gender" name="gender" id="gender" placeholder="enter your gender" value="<?php echo $result['gender'];?>">
            <input type="email" name="email" id="email" placeholder="enter your email" value="<?php echo $result['email'];?>">
            <input type="phone" name="phone" id="phone" placeholder="enter your phone" value="<?php echo $result['phone'];?>">
            <input type="bloodgroup " name="bloodgroup" id="bloodgroup" placeholder="enter your bloodgroup" value="<?php echo $result['bloodgroup'];?>">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter other information" value="<?php echo $result['other'];?>"></textarea>
            <button class="btn">submit</button>
        
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>