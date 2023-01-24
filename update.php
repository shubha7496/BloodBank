<?php
$insert=false;
include 'dbconect1.php';
if(isset($_POST['name'])){
    $cno=$_GET['cno'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $bloodgroup=$_POST['bloodgroup'];
    $desc=$_POST['desc'];
    $q="UPDATE `blood` SET `cno`='$cno',`name`='$name',`age`='$age',`gender`='$gender',`email`='$email',`phone`='$phone',`bloodgroup`='$bloodgroup',`other`='$desc' WHERE cno=$cno";
    $query=mysqli_query($con,$q);
    header('location:Doners.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script>
        window.history.forword();
    </script>
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
        if($insert==true){

          echo"  <P class='smsg'>Thank You for Giving Your Blood </P>";
        }
            ?>
              <?php
      $cno=$_GET['cno'];
      $selectquery="select * from blood where cno=$cno";
      $query=mysqli_query($con,$selectquery);
      $row=mysqli_fetch_assoc($query);
       //$row=mysqli_fetch_assoc($result);
       ?>
        <form  method="post">
            <input type="text" name="name" id="name" placeholder="enter your name" value="<?php echo $row['name'];?>">
            <input type="text" name="age" id="age" placeholder="enter your age" value="<?php echo $row['age'];?>">
            <input type="gender" name="gender" id="gender" placeholder="enter your gender" value="<?php echo $row['gender'];?>">
            <input type="email" name="email" id="email" placeholder="enter your email" value="<?php echo $row['email'];?>">
            <input type="phone" name="phone" id="phone" placeholder="enter your phone" value="<?php echo $row['phone'];?>">
            <input type="bloodgroup " name="bloodgroup" id="bloodgroup" placeholder="enter your bloodgroup" value="<?php echo $row['bloodgroup'];?>">
            <input name="desc" id="desc" cols="30" rows="10" placeholder="enter other information" value="<?php echo $row['other'];?>"></textarea>
            <button class="btn">submit</button>
        
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>