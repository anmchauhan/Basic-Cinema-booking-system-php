<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "cinema";

    $conn = mysqli_connect($server,$user,$pass,$db);

    if(!$conn)
    {
        die("Connection Unsuccessful");
    }
    else
    {
        echo "Successful";
    }
?>