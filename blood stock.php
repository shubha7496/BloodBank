<?php
include('dbconect.php');
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
        *{
            
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
        }
        th,td{
            padding:15px;
            text-align:center;
        }
        header{
            padding: 0px;
    margin: 33px;
        }
        .bn {
            font-size: 30px;
            background: gold;
        }
        .btn{
            font-size:30px;
            background: pink;
        }
        .contain  a{
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #008000;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 5px;
    letter-spacing: 4px;
}
.contain a:hover{
    background: #008000;
    color:#fff;
    border-radius: 5px;
    box-shadow: 0 0 5px #008000,
    0 0 25px #008000,
    0 0 100px #008000;
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
    background: linear-gradient(90deg,transparent,#008000);
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
    background: linear-gradient(180deg,transparent,#008000);
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
    background: linear-gradient(270deg,transparent,#008000);
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
    background: linear-gradient(360deg,transparent,#008000);
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
<img class="medi" src="Blood-Bank-1.jpg" altc="medi">
<div class="contain">    
    <a href="navigation.php"> <span></span><span></span><span></span> home</a>
</div>

    <header >
        <!-- <li><a href="navigation.html">Home</a> </li> -->
        <div class="navbar">
            <table>
        <thead> <th>A</th>
                <th>A+ </th>
                <th>O </th>
                <th>B+</th>
                <th>B-</th>
                <th>AB </th>
                <th>O-</th>
                <th>O+</th>
                <th>AB</th>
                
        </thead>
        <?php
       $query="select * from bb";
       //    if($result=$mysqli->query($query))
       $row=mysqli_fetch_assoc($result);
       ?>
    </div>
    <nav class="nav">
        <tr><td><?php echo $row['A'];?></td>
        <td><?php echo $row['A+'];?></td>
        <td><?php echo $row['O'];?></td>
        <td><?php echo $row['B+'];?></td>
        <td><?php echo $row['B-'];?></td>
        <td><?php echo $row['AB'];?></td>
        <td><?php echo $row['O-'];?></td>
        <td><?php echo $row['O+'];?></td>
        <td><?php echo $row['AB'];?></td>
        <!-- <td><button  class="" > <a href="stockupdate.php?cno=<?php echo $row['id'];?>" class="text-white">Edit</a></button> -->

        
    </tr>
</nav>
</table>
    </header>
</body>
</html>
<!-- INSERT INTO `bg` (`id`, `A`, `A+`, `O`, `B+`, `B-`, `AB-`, `O-`, `O+`, `AB`) VALUES ('5', '6', '4', '2', '8', '3', '9', '1', '7', '5'); -->