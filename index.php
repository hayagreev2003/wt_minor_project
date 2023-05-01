<?php require("register.class.php") ?>
<?php
    if (isset($_POST['submit'])) {
        $user = new RegisterUser($_POST['username'], $_POST['password']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="captcha.js"></script>
    <meta charset="utf-8 ">
    <title>ANIME</title>
    <link rel="stylesheet" href="anime.css">
</head>

<body background="668125.jpg">
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">zoro.to</h2>
            </div>

            <div class="menu">
                <ul>
                        <li><a href="sample1.html">HOME</a></li>
                        <li><a href="popular1.html">POPULAR</a></li>
                        <li><a href="Home1.html">MOVIES</a></li>
                        <li><a href="airing1.html">AIRING</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>
        </div>
        <div class="content">
            <form class="was-validated" action="" method="post" enctype="multipart/form-data" autocomplete="off">
            <h1>Zoro.to</h1>
            <p class="par">The best site to watch anime online for Free</p>
            <button class="cn"><a href="#">JOIN US</a></button>
            <div class="form-css">

                <h2>Create Account</h2>
                <input type="text" name="username"required placeholder="Enter username Here">
                <input type="password" name="password"required placeholder="Enter Password Here">
                <h4>Enter Captcha:</h4>
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <input type="text" class="form-control" readonly id="capt">
                    </div>
                    <div class="form-group col-md-10">
                        <input type="text" color="green" class="form-control" id="textinput" required>
                    </div>
                </div>
                <br>
                <h3>Generate Captcha <img 
                src="https://w7.pngwing.com/pngs/365/764/png-transparent-computer-icons-refresh-free-one-button-reload-text-logo-monochrome-thumbnail.png"
                width="20px" onload="cap()"onclick="cap()"></h3>
                <button onclick="validcap()" type="submit" class="bttnn" name="submit">SignUP</button>
                <button type="reset" class="bttnn" value="Reset">Reset</button>
                             
            </div>
            </form>
        </div>
    </div>
    
</body>
</html>