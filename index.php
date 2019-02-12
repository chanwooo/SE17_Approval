

<!doctype html>
<html class="no-js" lang="ko-KR">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="CHANWOO" />
    <meta name="author" content="chanwookim@me.com" />

    <title>se17</title>

    <link rel="stylesheet" href="css/foundation.css" />


</head>
<body>
<div class="title-bar">
    <div class="title-bar-left">

        <!--button-- class="menu-icon" type="button"></button-->
        <span class="title-bar-title"><a style="color:white" href="main.php"><h4><b> # SE17 전자 결재 시스템</b></h4></a></span>
    </div>



</div>

<form method="POST">
    ID: <input name="id" type="text">
    PW: <input name="pw" type="password">
    <input class="button" type="submit" value="Login">

</form>


</body>
</html>


<?php
require_once "query.php";
session_start();

if(isset($_SESSION['userid']))
{
    echo "이미 로그인 되어있습니다. ";
    echo $_SESSION['userid'];


}


$id=$_POST["id"];
$pw=$_POST["pw"];
//echo $id;
//echo $_POST["pw"];


if(login($id,$pw)==true) {
    echo "<h3>로그인성공</h3>";
    $_SESSION['userid']=$id;
    header("Location: ./main.php");


}
else
    echo "<h3>로그인하세요</h3>";
echo"+-----+------+-----------+--------+---------+<br>
| id  | pw   | name      | rank   | manager |<br>
+-----+------+-----------+--------+---------+<br>
| u01 | u    | 이사원    | 사원   | u02     |<br>
| u02 | u    | 임대리    | 대리   | u03     |<br>
| u03 | u    | 이과장    | 과장   | u04     |<br>
| u04 | u    | 김부장    | 부장   | u05     |<br>
| u05 | u    | 김사장    | 사장   | 0       |<br>
| u06 | u    | 김봉봉    | 사원   | u02     |<br>
| u07 | u    | 최봉봉    | 대리   | u03     |<br>
| u08 | u    | 박봉봉    | 과장   | u04     |<br>
| u09 | u    | 김이박    | 부장   | u05     |<br>
| u10 | u    | 최이박    | 사원   | u02     |<br>
| u11 | u    | 최박김    | 사원   | u02     |<br>
+-----+------+-----------+--------+---------+";

//echo $_SESSION["id"]=$id;
/*
    echo "로그인 성공시 <a href='main.php'>main.php</a>로 리다이렉트<br>";

    echo "세션이 존재할경우에도 main.php로 리다이렉트<br>";
*/
?>


