<?php

$connect = mysqli_connect("dream.hust.net", "root", "root@@", "se17");
mysqli_set_charset($connect,"utf8");

session_start();

if(isset($_SESSION['userid'])) {
    $userid = $_SESSION['userid'];
}

?>


<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<h1>

    <a href="main.php">SE17_전자결재</a>

</h1>

<h3>

    안녕하세요
    <?

    $query1="select * from users where id = '$userid' ";

    $result=mysqli_query($connect,$query1);
    $row=mysqli_fetch_array($result);

    echo $row[name];

    ?>
    님
    <!--
        로그인 완료 후 첫화면<br>
        전체적인 요약 정보 보여줘야함<br>
        <br>
        -->


</h3>


<ul>
    <a href="newApproval1.php"><li>결재문서 작성하기</li></a>
    <a href="recv.php"><li>받은 문서(수신함)</li></a>
    <a href="send.php"><li>보낸 문서(발신함)</li></a>

</ul>
