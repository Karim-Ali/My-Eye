<!DOCTYPE html>
<?php 
session_start();
$city = $_SESSION["city"]; ?>
<html>
<head>
<title>Travelling Date</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="js/all.js"></script>
<link rel="stylesheet" href="css/stayle.css">
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="css/all.css">
</head>
<body>
    <form method="post" action="deleteEvent.php" onclick="callAPI(getElementById('c'))">
        <ul>
            <li><input id="c" type="text" name="city" value="egypt" placeholder="<?php echo $city;?>"readonly></li>
            <li><a class="a" href = "#">Add</a></li>
            <li><input class="a" type="submit" value="Delete"></li>
        </ul>
    </form >
    <div class="dev">
        <div><img class="w3-quarter w3-image" id="sora1" src="" ><br></div>
        <div><img class="w3-quarter w3-image" id="sora2" src="" ><br></div>
        <div><img class="w3-quarter w3-image" id="sora3" src="" ><br></div>
        <div><img class="w3-quarter w3-image" id="sora4" src="" ><br></div>
        <div><img class="w3-quarter w3-image" id="sora5" src="" ><br></div>
    </div>
    <div class="dev2">
        <p class = "mar" id = "name">Country's name :</p>
        <p class = "mar" id = "capital">Country's capital : </p>
        <p class = "mar" id = "language">Country's language : </p>
    </div>
</body>
    <script src="towAPIs.js"></script>
<style>
    
    body{
        margin: 0;
        padding: 0;
        background-image:url('img/cover.jpg');
        background-repeat:no-repeat;
        background-size:100%;
        min-height:100%;
        justify-content: center;
        align-items: center;
        display: flex;
        height: 100vh;
    }    
    ul{
        margin: 0;
        padding: 0;
        display: flex;
    }
    ul li{
        list-style: none;
        margin: 0 30px;
        transition: 0.5s;
    }
    ul li .a{
        display: block;
        position: relative;
        text-decoration: none;
        padding: 5px;
        font-size: 18px;
        font-family: sans-serif;
        background: darkgrey;
        opacity: 0.85;
        color: white;
        text-transform: uppercase;
        transition: .5s;
    }
    ul:hover li .a{
        transform: scale(1.5);
        opacity: .6;
        filter: blur(4px);
    }
    ul li .a:hover{
        transform: scale(2);
        opacity: 1;
        filter: blur(0);
    }
    ul li .a:before{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #ff497c;
        transition: transform 0.5s;
        transform-origin: right;
        transform: scaleX(0);
        z-index: -1;
    }
    ul li .a:hover:before{
        transition: transform 0.5s;
        transform-origin: left;
        transform: scaleX(1);
    }
    input[type=submit]{
        border: none;
    }
    input[type=text]{
        width:80%;
        padding: 3px;
        border: none;
        border-radius: 4px;
        margin: 5px 0 22px 0;
        background: darkgrey;
        opacity: 0.85;
        display: inline-block;
        font-size: 20px;
        line-height: 20px;
        text-decoration: none;  
    }
    input:hover{
        background: white;
        opacity: 1;
    }
    img{ 
        height: 10%;
    }
    .dev{
        position:absolute;
        bottom: 50px;
        left: 80px;
        margin: 0;
        padding: 0;
        justify-content: center;
        align-items: center;
        display: flex;
    }
    .dev2{
        position:absolute;
        bottom: 0px;
        left: 80px;
        margin: 0;
        padding: 5px;
        justify-content: center;
        align-items: center;
        display: flex;
    }
    .mar{
        margin: 0 100px;
    }
</style>
</html>