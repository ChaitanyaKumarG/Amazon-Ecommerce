<?php

session_start();

$username = $_GET["username"];
$password = $_GET["password"];


$dbConnect = mysqli_connect("localhost","root","","amazonlive");
$query = "SELECT * FROM `userid` WHERE `usermail` = '$username' AND `password` = '$password';";
$chaitu =  mysqli_query($dbConnect,$query);

if($chaitu){

   $nor = mysqli_num_rows($chaitu);

   if($nor>0){

       $data = mysqli_fetch_array($chaitu);

       
       $_SESSION['uname'] = $data['username'];
       $_SESSION['name'] = $data['name'];

       $_SESSION['usermail'] = $username;
       $_SESSION['paswd']=$password;

       header("location :usershomepage.php");

   }else{
    echo "error";
   }

}else{

    echo"NOt Connected";
}




?>