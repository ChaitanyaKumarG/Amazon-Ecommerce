<?php
session_start();

$connection = mysqli_connect("localhost","root","","amazonlive");

if($connection){

    $username = $_GET["name2"];
    $usermail = $_GET["email"];
    $password = $_GET["upswd"];
    $name = $_GET["uname"];

    $query = "INSERT INTO `userid` (`name`, `usermail`, `password`, `username`) VALUES ('$name','$usermail', '$password', '$username');";

    $Dtodb = mysqli_query($connection,$query);


    if($Dtodb){

        $Data = mysqli_fetch_array($Dtodb);

                                              // SAVING DATA IN SESSION STORAGE

    $_SESSION['UNAME'] =   $Data["username"];
    $_SESSION['NAME']  = $Data["name"];

    $_SESSION['USERMAIL'] = $usermail;
    $_SESSION['PASSWORD'] = $password;
                                              //  SAVING DATA IN SESSION STORAGE

        header("location: usershomepage.php");
    }else{
       echo  "connected but error";
    }
   

}else{
    echo "not connected to db";

}
