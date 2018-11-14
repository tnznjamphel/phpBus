<?php
session_start();
if(!isset($_SESSION["user_name"]))
   header("Location:bus.php");
else{
  echo '
<html>
<head>
<title>
bus pass print
</title>
<style>
    #main{
        width:600px;
        height: 300px;
        margin:auto;
        margin-top: 100px;
        -webkit-box-shadow: 7px 9px 15px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 7px 9px 15px 0px rgba(0,0,0,0.75);
        box-shadow: 7px 9px 15px 0px rgba(0,0,0,0.75);
        border-radius: 20px;
        padding: 10px;
    }
    #logo{
        width:200px;
        height:200px;
        float: left;

    }
    #content{
        margin-left: 20px;

        width: 200px;
        margin-left: 230px;
        margin-top: 50px;
    }
    div>img{
        width: 200px;
        height:200px;
    }
</style>
</head>
<body>

        <div id="main"><div id="logo">';
      }
      ?>
        <?php
       /* if(isset($_POST["submit"])){
            $gender = $_POST["gender"];*/
        if($_SESSION["gender"]=="male")
            echo '<img src="male.png">';
        else
            echo '<img src="female.png">';

        echo "</div><div id=\"content\">";

                /*$ename=$_POST["student"];
                $age=$_POST["age"];
                $course=$_POST["course"];
                $validity=$_POST["val"];
                $add=$_POST["add"];
                */
        echo "</br> Name :  ".$_SESSION["name"];
        echo "</br> Age :   ".$_SESSION["age"];
        echo "</br> Course :  ".$_SESSION["course"];
        echo "</br>Validity :  ".$_SESSION["validity"];
        echo "</br>Address :  ".$_SESSION["add"];
        echo "</div></div>";
        /* remove all session variables   */
       session_unset();

       // destroy the session
       session_destroy();
    echo "</body> </html>";


?>
