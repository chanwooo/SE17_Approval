<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>Login page</h1>
<form method="POST">
    ID: <input name="id" type="text">
    PW: <input name="pw" type="password">
    <input type="submit">

</form>


</body>
</html>

<?php
require_once "query.php";
session_start();



    $id=$_POST["id"];
    $pw=$_POST["pw"];
    //echo $id;
    //echo $_POST["pw"];


    if(login($id,$pw)==true)
        echo "<h3>로그인성공</h3>";
    else
        echo "<h3>로그인하세요</h3>";

    //echo $_SESSION["id"]=$id;

    echo "로그인 성공시 <a href='main.php'>main.php</a>로 리다이렉트<br>";

    echo "세션이 존재할경우에도 main.php로 리다이렉트<br>";

    ?>

