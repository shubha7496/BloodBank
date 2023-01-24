<?php
include('dbconect2.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
         .bn {
            font-size: 30px;
            background:green;
        }
        table,td,th{
            border:1px solid #ddd;
            border-color:black;
            /* text-align:center; */
            /* background:green; */
            font-size:30px;
        }
        table{
            border-collapse:collapse;
            width:80%;
            margin: 4px;
        }
        th{
            background:purple;
                }
        th,td{
            padding:15px;
            text-align:center;
            font-size: 16px;
        }
        .search{
            width: 138px;
    height: 0px;
    font-size:15px
        }
    </style>
</head>
<body>
<img class="medi" src="blod.jpg" altc="medi">
<button class="bn"><a href="navigation.php">home</a></button>
<button class="bn"><a href="Doners.php">Doners</a></button>
<form  action="search1.php" method="post">
        <input class="search" name="search" id="search" type="text" placeholder="search here">
        <!-- <input class="search" name="str" id="str" type="text" placeholder="Search name age"> -->
        <button  >Search</button>
         <!-- <input class="search" type="submit" value="search"> -->
    </form>
<table>
    <thead>
                <th>SNO </th>
                <th>NAME </th>
                <th>AGE</th>
                <th>GENDER</th>
                <th>EMAIL </th>
                <th>PHONE</th>
                <th>BLOOD GROUP</th>
                <th>ADDRESS</th>
                <th>ACTION</th>
               
        </thead>
        <?php
     //  $query="select * from blood";
       //    if($result=$mysqli->query($query))
       while($row=mysqli_fetch_assoc($result)){
       ?>
    </div>
    <nav class="nav">
        <tr>
        <td><?php echo $row['cno'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['age'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['phone'];?></td>
        <td><?php echo $row['bloodgroup'];?></td>
        <td><?php echo $row['other'];?></td>
        <td><button  class="" > <a href="update.php?cno=<?php echo $row['cno'];?>" class="text-white">Edit</a></button>
         <button class=""> <a href="dal.php?cno=<?php echo $row['cno'];?>" class="text-white">Delete</a></button></td>    
    </tr>
</nav>
<?php } ?>
        </table>
</body>
</html>