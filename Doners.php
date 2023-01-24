<?php
include('dbconect1.php');
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
      
         /* .bn {
            font-size: 30px;
            background:green;
        } */
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
    font-size :15px;
        }
        .contain  a{
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #ff0000;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 5px;
    letter-spacing: 4px;
}
.contain a:hover{
    background: #ff0000;
    color:#fff;
    border-radius: 5px;
    box-shadow: 0 0 5px #ff0000,
    0 0 25px #ff0000,
    0 0 100px #ff0000;
}
.contain a span{
    position:absolute;
    display: block;
}
.contain a span:nth-child(1){
    top:0;
    left:-100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg,transparent,#ff0000);
    animation: btn-anim1 1s linear infinite;
}
@keyframes btn-anim1{
    0%{
        left: -100%;
    }
    50%,100%{
        left: 100%;
    }
}
.contain a span:nth-child(2){
    top:100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg,transparent,#ff0000);
    animation: btn-anim2 1s linear infinite;
    animation-delay: .25s;
}
@keyframes btn-anim2{
    0%{
        top: -100%;
    }
    50%,100%{
        top:  100%;
    }
}
.contain a span:nth-child(3){
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg,transparent,#ff0000);
    animation: btn-anim3 1s linear infinite;
    animation-delay: .5s;
}
@keyframes btn-anim3{
    0%{
        right: -100%;
    }
    50%,100%{
        right: 100%;
    }
}
.contain a span:nth-child(4){
    bottom: -100%;
    left:  0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg,transparent,#ff0000);
    animation: btn-anim4 1s linear infinite;
    animation-delay: .75s;
}
@keyframes btn-anim4{
    0%{
        bottom: -100%;
    }
    50%,100%{
        bottom: 100%;
    }
}
      
    </style>
</head>
<body>
<img class="medi" src="blod.jpg" altc="medi">
<div class="contain">
   <a href="navigation.php">
        
        <span></span> <span></span> <span></span> home</a>
    </div>
<form  action="search1.php" method="post">
        <input class="search" name="search" id="search" type="text" placeholder="Search here">
        <!-- <input class="search" name="str" id="text" type="text" placeholder="enter name age"> -->
        <button >search</button>
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