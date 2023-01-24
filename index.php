<?php
$insert=false;
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
$sql="INSERT INTO `blood`.`blood`( `name`, `age`, `gender`, `email`, `phone`, `bloodgroup`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$bloodgroup', '$desc', current_timestamp());";
// echo $sql;
if($con->query($sql)==true){
$insert=true;
}
else{
    echo "ERROR: $sql <br>$con->error";
}
$con->close();
}
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
            color: green;
            font-size: 30px;  
        }
        .btn{
            background-color:blue;
        }
        .contain  a{
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #4b0082;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 5px;
    letter-spacing: 4px;
}
.contain a:hover{
    background: #4b0082;
    color:#fff;
    border-radius: 5px;
    box-shadow: 0 0 5px #4b0082,
    0 0 25px #4b0082,
    0 0 100px #4b0082;
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
    background: linear-gradient(90deg,transparent,#4b0082);
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
    background: linear-gradient(180deg,transparent,#4b0082);
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
    background: linear-gradient(270deg,transparent,#4b0082);
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
    background: linear-gradient(360deg,transparent,#4b0082);
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
    <script>
        function validateform(){
            var x=document.forms["myform"]["text"].value;
            if(x==""||x==null){
                alert("name must be filled out");
                return false;
            }
        }
    </script>
</head>
<body>
    <img class="medi" src="blod.jpg" altc="medi">
    <div class="contain">    
    <a href="navigation.php"> <span></span><span></span><span></span> home</a>
</div>
    <div class="container">
    <!-- <li><a href="navigation.html">Home</a> </li> -->
        <h1 style=color:green > welcome to Blood Bank </h1>
        <?php
        if($insert==true){
            echo "<p> Thank you for Giving your blood</P>";
        }
            ?>
            <table>

                <form autocomplete="off" action="index.php" name="myform" onsubmit="return validateform()" method="post" required>
                    <tr>
            <td>
                <label for="">Name</label>
            </td>
            
            <td>
                <input type="text"  name="name" id="name" placeholder="enter your name">
                
                </td>
            </tr>
            <tr>
                <td><label for="">Age</label></td>
                <td>

                    <input list="ages" name="age" id="age" placeholder="enter your age">
                    <datalist id="ages">
                        <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
            </datalist>
        </td>
    </tr>
            <!-- <input type="text" pattern="[0-9]*" name="age" id="age" placeholder="enter your age"> -->
            <tr>
                <td><label for="">Gender</label></td>
                <td>

                    <input list="genders" name="gender" id="gender" placeholder="enter your gender">
                    <datalist id="genders">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </datalist>
                </td>
            </tr>
            <tr>
                <td><label for="">Email</label></td>
                <td>
                    <input type="email" name="email" id="email" placeholder="enter your email">
                </td>
            </tr>
            <tr>
                <td><label for="">Phone</label></td>
                <td>
                    <input type="tel" name="phone" id="phone" placeholder="enter your phone" pattern="[0-9]{10}" required>
                </td>
            </tr>
            <tr>
                <td><label for="">Bloodgroup</label></td>
                <td>

                    <input list="blood" name="bloodgroup" id="bloodgroup" placeholder="enter your bloodgroup">
                    <datalist id="blood">
                <option value="A">A</option>
                <option value="a">a</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
                <option value="B">B</option>
                <option value="AB+">AB+</option>
            </datalist>
        </td>
        </tr>
            <!-- <input type="bloodgroup " name="bloodgroup" id="bloodgroup" placeholder="enter your bloodgroup"> -->
            <tr>
                <td><label for="">City</label></td>
                <td>

                    <input list="cities" name="desc" id="desc" cols="30" rows="10" placeholder="enter your city">
                    <datalist id="cities">
                        <option value="Indore">Indore</option>
                        <option value="Bhopal">Bhopal</option>
                        <option value="Chennai">Chennai</option>
                <option value="Banglore">Banglore</option>
                <option value="Bombay">Bombay</option>
                <option value="Pune">Pune</option>
                <option value="Harda">Harda</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Ujjain">Ujjain</option>
                <option value="Sangam Nagar">Sangam Nagar</option>
                <option value="Dubai">Dubai</option>
                <option value="Marimata Square">Marimata Square</option>
            </datalist>
        </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>

                <button  class="btn">submit</button>
            </td>
        </tr>
            
        </form>
    </table>
    </div>
    <script src="index.js"></script>
</body>
</html>