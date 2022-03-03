<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "new_login";

    $con = mysqli_connect($server,$user,$pass,$db);

    if(!$con){
        die ("Conuldn't connect with Database".mysqli_connect_error());
    }
    
?>