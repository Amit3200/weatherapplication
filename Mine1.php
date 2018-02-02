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
        color:white;
    }
    .buttonwer:hover
    {
        font-family: 'Poiret One', cursive;
        height: 25px;
        width: 100px;
        background: rgba(255,255,255,0.4);
        padding: 5px 5px 5px 5px;
        border:none;
        color:black;
        cursor:pointer;
    }
    </style>
</head>
    <body>
        <div class="container">
            <div class="control row">
            <div class="header">
        <h1 class="head1">Weather Application</h1>
                <u><h5 style="text-align: center; margin-top:-25px;">Developed by Amit Singh</h5></u>
            </div>
                <div class="body1">
                    <center><img src="sun.png" width="100px"></center>
                    <center>
                        <p>Temperature :?</p>
                        <p>Place       :?</p>
                        <p>Time Zone   :?</p>
                        <p>Humidity    :?</p>
                        <h3>?</h3>
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
