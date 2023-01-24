<?php
$insert=false;
include 'dbconect.php';
if(isset($_POST['A'])){
    $id=$_GET['id'];
    $A=$_POST['A'];
    $A+=$_POST['A+'];
    $O=$_POST['O'];
    $B+=$_POST['B+'];
    $B-=$_POST['B'];
    $AB-=$_POST['AB-'];
    $O-=$_POST['O-'];
    $O+=$_POST['O+'];
    $AB=$_POST['AB'];
    $q="UPDATE `bg` SET `id`='$id',`A`='$A',`A+`='$A+',`O`='$O',`B+`='$B+',`B-`='$B-',`AB-`='$AB-',`O-`='$O-',`O+`='$O+',`AB`='$AB' WHERE id=$id";
    $query=mysqli_query($con,$q);
    header('location:blood stock.php');
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
    // $id=$_GET['id'];
      $selectquery="select * from bg ";
      $query=mysqli_query($con,$selectquery);
      $row=mysqli_fetch_assoc($query);
       //$row=mysqli_fetch_assoc($result);
       ?>
        <form   method="post"  >
            <input type="text" name="A+" id="A+" placeholder="enter your gender" value="<?php echo $row['A+'];?>">
            <input type="text" name="A" id="A" placeholder="enter your age" value="<?php echo $row['A'];?>">
            <input type="text" name="O" id="O" placeholder="enter your email" value="<?php echo $row['O'];?>">
            <input type="text" name="B+" id="B+" placeholder="enter your phone" value="<?php echo $row['B+'];?>">
            <input type="text "name="B-" id="B-" placeholder="enter your bloodgroup" value="<?php echo $row['B-'];?>">
            <input type="text" name="AB-" id="AB-" cols="30" rows="10" placeholder="enter other information" value="<?php echo $row['AB-'];?>">
            <input type="text" name="O-" id="O-" placeholder="enter your name" value="<?php echo $row['O-'];?>">
            <input type="text" name="O+" id="O+" placeholder="enter your age" value="<?php echo $row['O+'];?>">
            <input type="text" name="AB" id="AB" placeholder="enter your gender" value="<?php echo $row['AB'];?>">
            <button class="btn">submit</button>
        
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>