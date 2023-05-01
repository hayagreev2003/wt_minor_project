<?php require("login.class.php") ?>
<?php
if (isset($_POST['submit'])) {

$user = new LoginUser($_POST['username'], $_POST['password']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="captcha.js"></script>
    <meta charset="utf-8 ">
    <title>ANIME</title>
    <link rel="stylesheet"type="text/css" href="anime.css?v=1">
</head>

<body background="668125.jpg">
        <div class="main">
            <div class="navbar">
                <div class="icon">
                    <h3 align="left"><img src="logo.png" width="180" height="80"></h3>
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
                    <div class="form">
                        <h2>Login Here</h2>
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
                        <button type="submit" class="btnn" name="submit">Login</button>
                        
                        <p class="link">Don't have an account<br>
                        <a href="index.php">Sign up </a> here</a></p>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>