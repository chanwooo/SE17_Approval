<?php
$conn;
$servername = "127.0.0.1";
$database = "chanwoo";
$user = "chanwoo";
$pwd = "cksdn1";

function dbConnect()
{
    global $conn;
    global $servername;
    global $user;
    global $pwd;
    global $database;
    $conn = mysqli_connect($servername, $user, $pwd, $database);
    if(!$conn)
    {
        die("connect error");
    }
    //echo "connect success";
    return $conn;
}

function dbClose()
{
    global $conn;
    mysqli_close($conn);
}
?>
