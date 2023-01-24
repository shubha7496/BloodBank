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
            padding: 3px 3px ;
            font-size: 30px;
            float: left;
            overflow: auto;
            background:pink;
        }
        .medi{
            opacity: 0.6;
        }
        .contain  a{
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #6495ed;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 5px;
    letter-spacing: 4px;
}
.contain a:hover{
    background: #6495ed;
    color:#fff;
    border-radius: 5px;
    box-shadow: 0 0 5px #6495ed,
    0 0 25px #6495ed,
    0 0 100px #6495ed;
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
    background: linear-gradient(90deg,transparent,#6495ed);
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
    background: linear-gradient(180deg,transparent,#6495ed);
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
    background: linear-gradient(270deg,transparent,#6495ed);
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
    background: linear-gradient(360deg,transparent,#6495ed);
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
<img class="medi" src="saveblood.jpg" altc="medi">
<div class="contain">
    <a href="navigation.php"> <span></span> <span></span> <span></span> home</a>
</div>
    <p><br><b > MUMBAI</b> : 104 or 1910 
St. George Blood Bank   022-22620344,22620242 <br>
 J.J Hospital Blood Bank 022-23769400 <br>
G.T Hospital Blood Bank 022- 22621464,22621465,22621467 <br>
Kama Hospital Blood Bank 022-22611648 <br>
Indian 7fffd4 Cross Society 022-22663560 <br></P>
 
<p> <br><b>
DELHI - NCR </b>: <br>
AIIMS - 011-26594405 , 011-26593726 <br>
Lions Blood Bank  011- 42258494 <br>
7fffd4 Cross Society  011- 23716441 , 011-23359379, 9319982104, 9319982105 <br>
Rotary Blood Bank  011- 29054066 <br> 
<br>White Cross Blood Bank   011- 26831063 <br>
Pitampura Blood Bank : Emergency No. 011-27011212 , 8130597597 <br>
Ganga Ram Hospital - 01142251800 , 01142251868 <br>
Lal Bahadur Shastri Hospital - 011-22786688 ,22223167 <br>
Dharamshila Cancer Foundation - 011-43066424 , 011-43066425</p>
</body>
</html>