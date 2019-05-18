  <?php
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Book Store
        </title>
        <link rel="icon" type="image/icon" href="images/icon.png"/>
        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    </head>

    <body class="container">
        <script type="text/javascript">
        function scroll()
        {
            var top=document.getElementById("h");
            var head=document.getElementsByClassName("container");
            var ypos=window.pageYOffset;
            if(ypos>587)
            {
                head.innerHTML="hello world";
            }
            head.innerHTML="hello world";

        }
        window.addEventListener("scroll",scroll);

        </script>
        <div class="header" id="h">
            <a href="index.php" class="name" >
                Book Store
            </a>
            <div class="links">
                <ul class="list">
                    <li><a href="index.html" class="nav">Home</a></li>
                    <li><a href="php/registration.php" class="nav">register</a></li>
                    <li><a href="php/login.php" class="nav">login</a></li>
                    <li><a href="#" class="nav">Contact</a></li>
                </ul>

            </div>
        </div>

        <div class="coding">
            <div class="paragraph">
                <a class="pa1">
                    Hello everyone!
                </a>
                <br/>
                <a class="pa2">
                    This is an online book store
                </a>
                <br/>

                <hr class="linebreak"/>
            </div>
        </div>
        <div class="footer">
            <p>Lorem imsum  </p>
        </div>
    </body>
</html>
