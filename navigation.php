
<!DOCTYPE html>
<html lang="en">
<head>
    <script language="javascript" type="text/javascript">
        window.history.forword();
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navigation</title>
    <link rel="stylesheet" href="style.css">
    <!-- <h1> Welcome to blood bank management system</h1> -->
    <style>
        .navbar{
            background-color: gray;
            font-size: 30px;
        }
        .navbar ul{
            overflow: auto;

        }
        .navbar li{
            float: left;
    list-style: none;
    margin: 20px 50px;
        }
        .navbar li a{
            padding: 3px 3px ;
            text-decoration: none;
            color: white;
            text-shadow:0 0 5px #fff, 0 0 10px #fff;
        

        }
    
    </style>
</head>

<body>
    <img class="medi" src="blod.jpg" altc="medi">
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="">Home</a> </li>
                <li><a href="index.php">Doner Registration</a> </li>
                <li><a href="Doners.php">Doners</a> </li>
                <li><a href="blood stock.php">Blood Stock</a> </li>
                <li><a href="contact.php">contact</a> </li>
                <li><a href="logout.php">log out</a> </li>
            </ul>
        </nav>
    </header>
</body>

</html>