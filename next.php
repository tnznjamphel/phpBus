
<?php
session_start();
if(!isset($_SESSION["user_name"]))
   header("Location:bus.php");
else{
echo '
<html>
<head>
<title>
Enter your Details
</title>
<style>
    #content{
        -webkit-box-shadow: 7px 9px 15px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 7px 9px 15px 0px rgba(0,0,0,0.75);
        box-shadow: 7px 9px 15px 0px rgba(0,0,0,0.75);
    }
    #image{
        width: 500px;
        height: 700px;
        margin-right:0px;

        float: left;
    }
    div>img {width: 550px;height:400px;}
    #button{
      background-color:white;
      width:50px;
      height:50px;
      align:right;
    }
    .button{text-align:right;
      width:50px;
      height:50px;}
a:link{
  text-decoration:none;
  color:black;
}
a:hover{
  text-decoration:underline;
}
</style>
</head>
<body style="background-color:049CB8;">
<div id="content" style="margin: auto;width:800px; background-color:#339AAD;
     ">
<div id="image"><img src="h3.png"></div>
<div style="position: relative; padding-bottom: 20px;">
<form action="valnext.php" method="Post" >
</br></br></br>
<font size ="4">
Student Name<input type ="text" name="student" size ="21" required></input>
</br></br>
</br>
Course <input type = "text" name="course" size = "20" >
</br></br></br>Age <input type = "number" name="age"></br></br>
Gender <input type="radio" name ="gender" value="male">MALE</input>
<input type ="radio" name="gender" value="female" >FEMALE</input>
</br></br></br>
Validity <input type = "text" name="val">
</br></br></br>
Pass Number <input type = "number" name="pass">
</br></br></br>Address <input type = "text" name="add"></input>
</font size>
</br></br></br>
<input type = "submit" name ="submit">
</form>
</div>
<h2><a href="http://127.0.0.1/bus.php">Home</a></h2>
</div>
';
if(!isset($_SESSION["error_log"])){

  echo 'error'.$_SESSION["error_log"];
}
echo "
</body>

</html>
";
}
?>
