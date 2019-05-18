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
            MIT Lab
        </title>
        <link rel="icon" type="image/icon" href="images/icon.png"/>
        <link rel="stylesheet" type="text/css" href="../../css/styles.css"/>
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
           <a href="../../index.php" class="name" >
                MIT Lab
            </a>
            <div class="links">
                <ul class="list">
                    <li><a href="addTeacher.php" class="nav">Add Teacher</a></li>
                    <li><a href="addPc.php" class="nav">Add PC</a></li>
                    <li><a href="addLab.php" class="nav">Add Lab</a></li>
                </ul>

            </div>
        </div>
        <div class="coding">

        </div>
        <div class="footer">
            <p>Lorem imsum  </p>
        </div>
    </body>
</html>
<?php
    include '../User.php';

    if(isset($_POST['submit']))
        {
         $name=$_POST['name'];
         $email=$_POST['email'];
         $pass=$_POST['pass'];
         $mobile=$_POST['mobile'];

         $obj= new user();
         $obj->addTeacher($name,$email,$pass,$mobile);
        }
?>
