<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include 'User.php';

if (isset($_POST['submit']))
    {
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    $obj = new user();
    $obj->login($name, $pass);

    }
?>



<html>
    <head>
        <meta charset="UTF-8">
        <title>
            MIT Lab
        </title>
        <link rel="icon" type="image/icon" href="images/icon.png"/>
        <link rel="stylesheet" type="text/css" href="../css/styles.css"/>
    </head>

    <body class="container">
        <script type="text/javascript">
            function scroll()
            {
                var top = document.getElementById("h");
                var head = document.getElementsByClassName("container");
                var ypos = window.pageYOffset;
                if (ypos > 587)
                {
                    head.innerHTML = "hello world";
                }
                head.innerHTML = "hello world";

            }
            window.addEventListener("scroll", scroll);

        </script>
        <div class="header" id="h">
            <a href="index.php" class="name" >
                MIT Lab
            </a>
            <div class="links">
                <ul class="list">
                    <li><a href="../index.php" class="nav">Home</a></li>
                    <li><a href="registration.php" class="nav">register</a></li>
                    <li><a href="login.php" class="nav">login</a></li>
                    <li><a href="#" class="nav">Contact</a></li>
                </ul>

            </div>
        </div>
        <div class="coding">
            <form method="post" action="login.php">
                <div class="login-box">
                    <h1 class="h1">Login</h1>
                    <div class="textbox">
                        <input type="text" placeholder="Username" value="" name="name"/>
                    </div>
                    <div class="textbox">
                        <input type="text" placeholder="Password" value="" name="pass"/>
                    </div>
                    <div class="submitbtn">
                        <input type="submit" value="Go" name="submit" />
                    </div>
                </div>
            </form>
        </div>
        <div class="footer">
            <p>Lorem imsum  </p>
        </div>
    </body>
</html>
<?php

?>
