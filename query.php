<?php

require_once "dbconn.php";


function writeDoc($id, $text)
{
    $conn=dbConnect();
    if($stmt = mysqli_prepare($conn,"INSERT INTO doc (id, name, passwd) VALUES (?, ?, ?)"))
    {
        mysqli_stmt_bind_param($stmt, "sss", $id, $name, $passwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
    dbClose();

}




function UserAdd($id, $name, $pass)
{
    $conn = dbConnect();
    if($stmt = mysqli_prepare($conn,"INSERT INTO user (id, name, passwd) VALUES (?, ?, ?)"))
    {
        mysqli_stmt_bind_param($stmt, "sss", $id, $name, $passwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
    dbClose();
}

function OtpUserCheck($id)
{
    $conn = dbConnect();
    $result = 0;
    if($stmt = mysqli_prepare($conn, "select count(*) from otpuser where id=?"))
    {
        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $result);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);
    }
    dbClose();
    if($result == 1)
        return true;
    else
        return false;
}

function login($id, $pw)
{
    $conn = dbConnect();
    $result = 0;
    if($stmt = mysqli_prepare($conn, "select count(*) from users where id=? and pw=?"))
    {
        mysqli_stmt_bind_param($stmt, "ss", $id, $pw);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $result);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);
    }
    dbClose();
    if($result == 1)
        return true;
    else
        return false;
}

function OtpUserAdd($id, $serial)
{
    $conn = dbConnect();
    $token_name = '';
    if($stmt = mysqli_prepare($conn, "select token_name from seed where serial=?"))
    {
        mysqli_stmt_bind_param($stmt, "s", $serial);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $token_name);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);
    }

    if($stmt = mysqli_prepare($conn,"INSERT INTO otpuser (id, serial, token_name) VALUES (?, ?, ?)"))
    {
        mysqli_stmt_bind_param($stmt, "sss", $id, $serial, $token_name);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
}

// check user is registerd
function CheckId($id)
{
    $conn = dbConnect();
    $count = 0;
    if($stmt = mysqli_prepare($conn, "select count(*) from user where id=?"))
    {
        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $count);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);
    }
    dbClose();
    if($count == 0)
        return false;
    else
        return true;
}

// check serial is registerd
function CheckSerial($serial)
{
    $conn = dbConnect();
    $count = 0;
    if($stmt = mysqli_prepare($conn, "select count(*) from seed where serial=?"))
    {
        mysqli_stmt_bind_param($stmt, "s", $serial);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $count);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);
    }
    dbClose();
    if($count == 0)
        return false;
    else
        return true;
}

function CheckSecret($secret)
{
    $conn = dbConnect();
    $count = 0;
    if($stmt = mysqli_prepare($conn, "select count(*) from seed where skey=?"))
    {
        mysqli_stmt_bind_param($stmt, "s", $secret);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $count);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);
    }
    dbClose();
    if($count == 0)
        return false;
    else
        return true;
}

function GetSecretBySerial($serial)
{
    $conn = dbConnect();
    $secret = '';
    if($stmt = mysqli_prepare($conn, "select skey from seed where serial=?"))
    {
        mysqli_stmt_bind_param($stmt, "s", $serial);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $secret);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);
    }
    dbClose();
    return $secret;
}

function GetSecretById($id)
{
    $serial = '';
    $conn = dbConnect();
    if($stmt = mysqli_prepare($conn, "select serial from otpuser where id=?"))
    {
        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $serial);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);
    }
    dbClose();
    return GetSecretBySerial($serial);
}

function GetCurrentCount($id)
{
    $count = '';
    $conn = dbConnect();
    if($stmt = mysqli_prepare($conn, "select count from seed,otpuser where otpuser.serial = seed.serial and otpuser.id=?"))
    {
        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $count);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);
    }
    dbClose();
    return $count;
}

function UpdateCount($id, $count)
{
    $secret = GetSecretById($id);
    $conn = dbConnect();
    if($stmt = mysqli_prepare($conn, "update seed set count=? where skey=?"))
    {
        mysqli_stmt_bind_param($stmt, "is", $count, $secret);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $count);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);
    }
    dbClose();
}

?>
