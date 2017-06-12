<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Generator" content="EditPlus®">
    <meta name="Author" content="">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title>Document</title>
</head>
<body>

<?php include 'header.php';
?>

<form method="post" action="messege_ok.php">

    <table border=1 cellpadding="4" cellspacing="0" bgcolor="white" bordercolor="gray" style="margin:0 auto;" >

        <tr>

            <th>제목 </th> <th> 직급 </th> <th> 작성자 </th> <th> 날짜 </th>

        </tr>

        <?php
        $userid=$_SESSION['userid'];
        $query = "select title, rank, name, tt from doc c, users u where u.id = c.userid and docid=(select docid from progress where userid='u01')";
        $result=mysqli_query($connect,$query);

        while($row=mysqli_fetch_array($result)){

            ?>

            <tr>


                <td> <a href="#"><?=$row[0]?></a></td> <td> <?=$row[1]?> </td> <td> <?=$row[2]?> </td> <td> <?=$row[3]?> </td>

            </tr>

        <?}?>
    </table>
</form>




<h3>
    ::todo::<br>

    제목 누르고 링크 들어갔을때 해당 문서 상세 정보 확인과 승인/반려 선택 할 수 있게 해야함 <br>
    -> progress table에 status를 업데이트 해야 함 0 : 미승인 1 : 승인 <br>




</h3>


</body>
</html>