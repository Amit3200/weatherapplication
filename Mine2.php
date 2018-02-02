<?php
$str=$_GET['name'];
$arr=explode(" ",$str);
$lat=$arr[0];
$long=$arr[1];
$url="https://api.openweathermap.org/data/2.5/weather?lat=$lat&lon=$long&appid=85a16be3da0f4da5b5003d31df3eff98";
$obj = file_get_contents($url);
$parts = json_decode($obj,true);
$temp= (string)((float)($parts['main']['temp'])-273)."<br>";
$place= $parts['name']."<br>";
$humidity= $parts['main']['humidity']."<br>";
$timezone= $parts['sys']['country']."<br>";
$desc= $parts['weather'][0]['description']."<br>";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
    My Web App
</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body
    {
        font-family: 'Poiret One', cursive;
        background-image:url("Texture1.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        color:white;
        margin: 0px;
        padding: 0px;
        height: 600px;
        min-height: 400px;
    }
    .head1
    {
        font-size: 36px;
        text-align: center;
    }
    .control
    {
        background: rgba(0,0,0,0.3);
        align-content: center;
        margin: auto;
    }
    .buttonwer
    {
        font-family: 'Poiret One', cursive;
        height: 25px;
        width: 100px;
        background: rgba(0,0,0,0.5);
        padding: 5px 5px 5px 5px;
        border:none;
        padding-bottom: 15px;
        color:white;
    }
    .buttonwer:hover
    {
        font-family: 'Poiret One', cursive;
        height: 25px;
        width: 100px;
        padding-bottom: 5px;
        background: rgba(255,255,255,0.4);
        padding: 5px 5px 5px 5px;
        border:none;
        color:black;
        cursor:pointer;
    }
    </style>
</head>
    <body>
        <br><br><br>
        <div class="container col-ms-3">
            <div class="control row1 ">
            <div class="header1">
        <h1 class="head1">Weather Application</h1>
                <u><h5 style="text-align: center; margin-top:-10px;">Developed by Amit Singh</h5></u>
            </div>
                <div class="body1">
                    <center><img src="sun.png" width="100px"></center>
                    <center>
                        <p>Temperature :<?php echo $temp?></p>
                        <p>Place       :<?php echo $place?></p>
                        <p>Time Zone   :<?php echo $timezone?></p>
                        <p>Humidity    :<?php echo $humidity?></p>
                        <h3><?php echo strtoupper($desc)?></h3>
                        <p id="demo"></p>
                        <button type="submit" onclick="getLocation()" class="buttonwer"><b>Get Weather</b></button>
                    </center>
                    
                    <script>
                    var x = document.getElementById("demo");
                    function getLocation() {
                        if (navigator.geolocation) {
                            navigator.geolocation.getCurrentPosition(showPosition);
                        } else { 
                            x.innerHTML = "Geolocation is not supported by this browser.";
                        }
                    }
                    function showPosition(position) {
                        x.innerHTML = "Latitude: " + position.coords.latitude + 
                        "<br><br>Longitude: " + position.coords.longitude;
                         window.location.href= "http://localhost/Weatherapplication/Mine2.php?name=" + position.coords.latitude+"+"+position.coords.longitude;
                    }
                    </script>
                    <br>
                    <br>
                </div> 
            </div>
            <center>Made With &#10084; by Amit Singh Sansoya</center>
        </div>
    </body>
