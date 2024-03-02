<?php

include("koneksi.php");

$validuser = "Admin";
$validpassword = "thewindtalker";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userinput = mysqli_real_escape_string($conn, htmlspecialchars($_POST["username"]));
    $userpassword = mysqli_real_escape_string($conn, htmlspecialchars($_POST["password"]));

    if($userinput == $validuser){
        if(){
            
        }
    }

}
