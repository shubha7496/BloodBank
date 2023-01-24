<?php

      if(isset($_POST['submit0'])){
            $number3=$_POST['number3'];
            $number4=$_POST['number4'];
            $sum2=$number3+$number4;
        }
        if(isset($_POST['seven'])){
            $sum2=$_POST['seven'];
        }
        if(isset($_POST['eight'])){
            $sum2=$_POST['eight'];
        }
        if(isset($_POST['plus'])){
            $number3=$_POST['number3'];
            $number4=$_POST['number4'];
            $sum2=$number3+$number4;
        }
        if(isset($_POST['five'])){
            $sum2=$_POST['five'];
        }
        if(isset($_POST['six'])){
            $sum2=$_POST['six'];
        }
        if(isset($_POST['nine'])){
            $sum2=$_POST['nine'];
        }
        if(isset($_POST['four'])){
            $sum2=$_POST['four'];
        }
        if(isset($_POST['three'])){
            $sum2=$_POST['three'];
        }
        if(isset($_POST['two'])){
            $sum2=$_POST['two'];
        }
        if(isset($_POST['one'])){
            $sum2=$_POST['one'];
        }
        if(isset($_POST['zero'])){
            $sum2=$_POST['zero'];
        }
        if(isset($_POST['equal'])){
            $sum2=$_POST['equal'];
        }
        if(isset($_POST['mul'])){
            $number3=$_POST['number3'];
            $number4=$_POST['number4'];
            $sum2=$number3*$number4;
        }
        if(isset($_POST['minus'])){
            $number3=$_POST['number3'];
            $number4=$_POST['number4'];
            $sum2=$number3-$number4;
        }
        if(isset($_POST['div'])){
            $number3=$_POST['number3'];
            $number4=$_POST['number4'];
            $sum2=$number3/$number4;
        }
        if(isset($_POST['clear'])){
            $sum2="";
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
    <style>
        td{
            background-color: blue;
        }
        button{
            width:80px;
            height: 30px;
            font-size:20px;
        }
    </style> 
    <center>
        <table border="1" cellpadding="5" cellspacing="2" height="400" width="400">
            <tbody>
                <form method="post">
                    <tr>
                        <td  align="center" colspan="4"   style="color: rgb(224, 16, 16); background-color: #e7e757;" >
                    <input colspan="1" type="number" name="number3" value="<?php echo $sum2 ?>">
        <input type="number" name="number4" value="<?php echo $sum2 ?>"><br>
        <label for="" ><?php echo $sum2 ?></label>
    </td>
</tr>
<tr>
                </tr>
                        <tr>
                        <td  >
                            <button  value="7" name="seven">7</button>
                        </td>
                        <td>
                            <button value="8" name="eight">8</button>
                        </td>
                    <td>
                        <button value="9" name="nine">9</button>
                    </td>
                    <td>
                        <button value="*" name="mul">*</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button value="4" name="four">4</button>
                    </td>
                    <td>
                        <button value="5" name="five">5</button>
                    </td>
                    <td>
                        <button value="6" name="six">6</button>
                    </td>
                    <td>
                        <button value="-" name="minus">-</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button value="1" name="one">1</button>
                    </td>
                    <td>
                        <button value="2" name="two">2</button>
                    </td>
                    <td>
                        <button value="3" name="three">3</button>
                    </td>
                    <td>
                        <button value="+" name="plus">+</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button value="c" name="clear">c</button>
                        </td>
                        <td>
                            <button value="0" name="zero">0</button>
                        </td>
                        <td>
                            <button value="/" name="div">/</button>
                        </td>
                        <td>
                            <button value="=" name="equal">=</button>
                        </td>
                    </tr>
                </form>
                </tbody>
            </table>
        </center>
    </body>
    </html>
    
    
    