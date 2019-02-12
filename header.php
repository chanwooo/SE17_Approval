<?php

$connect = mysqli_connect("chanwoo.hust.net", "root", "root@@", "se17");
mysqli_set_charset($connect,"utf8");

session_start();

if(isset($_SESSION['userid'])) {
    $userid = $_SESSION['userid'];
}
else
{
//    header("Location: ./");

    echo "<script>alert('로그인이 필요합니다!'); window.location='./'</script>";
    echo "need login";

}

$query1="select * from users where id = '$userid' ";

$result=mysqli_query($connect,$query1);
$userinfo=mysqli_fetch_array($result);
?>


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



<div Class="Row">
    <div style="padding-top: 10px" Class="large-2 medium-2 columns">
        <div class="hide-for-small-only">
            <a class="hollow button secondary expanded" href="newApproval1.php">결재문서 작성하기</a>
            <a class="hollow button secondary expanded" href="recv.php">받은 문서(수신함)</a>
            <a class="hollow button secondary expanded" href="send.php">보낸 문서 (발신함)  </a>
        </div>

        <div class="hide-for-medium hide-for-large">
            <ul class="vertical menu" data-accordion-menu>
                <li><a class="hollow button secondary expanded" href="#">MENU</a>
                    <ul class="menu vertical nested">
                        <li><a class="hollow button secondary expanded" href="newApproval1.php">결재문서 작성하기</a></li>
                        <li><a class="hollow button secondary expanded" href="recv.php">받은 문서(수신함)</a></li>
                        <li><a class="hollow button secondary expanded" href="send.php">보낸 문서 (발신함)  </a></li>
                    </ul>
            </ul>


        </div>

    </div>

    <div style="padding-top: 10px;" Class="large-10 medium-10 columns">


<html>
<head>
    <meta charset="UTF-8">
</head>
<body>


<!--h1>

    <a href="main.php">SE17_전자결재</a>

</h1-->

    <!--
        로그인 완료 후 첫화면<br>
        전체적인 요약 정보 보여줘야함<br>
        <br>
        -->


</h3>





<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/foundation.min.js"></script>
<script>$(document).foundation();</script>
</body>
</html>
