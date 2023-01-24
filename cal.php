<?php
    if(isset($_POST['submit'])){
        $number1=$_POST['number1'];
        $number2=$_POST['number2'];
        $sum=$number1+$number2;
    }
    if(isset($_POST['submit1'])){
        $number1=$_POST['number1'];
        $number2=$_POST['number2'];
        $sum=$number1-$number2;
    }
    if(isset($_POST['submit2'])){
        $number1=$_POST['number1'];
        $number2=$_POST['number2'];
        $sum=$number1*$number2;
    }
    if(isset($_POST['submit3'])){
        $number1=$_POST['number1'];
        $number2=$_POST['number2'];
        $sum=$number1/$number2;
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="number1"><br>
        <input type="number" name="number2"><br>
        <label for=""><?php echo $sum ?></label>
        <textarea name="" id="" cols="30" rows="10"> <?php  echo $sum ?></textarea>
        <input type="submit" name="submit" value="add">
        <input type="submit" name="submit1" value="sub">
        <input type="submit" name="submit2" value="mul">
        <input type="submit" name="submit3" value="Div">


    </form>
 
</body>
</html>