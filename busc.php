<?php
    $Cser=mysqli_connect("localhost","root","","bus") or die("Server connection falied :".mysqli_error());
    $name=$_REQUEST['log'];
    $password=$_REQUEST['pass'];



    $s="select * from users where name='".$name."'and password ='".$password."'";
    $result=mysqli_query($Cser,$s);

   $row=mysqli_fetch_array($result);
$count = mysqli_num_rows($result);
if($name == null && $password==null){
    header("Location:bus.php");
}
else {
  if($count>0){
    if($row['name']==$name && $row['password']==$password)
    {
      session_start();
      $_SESSION["user_name"]=$name;
      header("Location:next.php");
    }
    else{
        header("Location:bus.php");
        }
  }
}


    ?>
