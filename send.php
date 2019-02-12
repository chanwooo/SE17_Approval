<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Generator" content="EditPlus®">
    <meta name="Author" content="">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title>se17</title>
</head>
<body>

<?php include 'header.php';
?>

<form method="post" action="messege_ok.php">

    <table class="unstriped" border=1 cellpadding="4" cellspacing="0" bgcolor="white" bordercolor="gray" style="margin:0 auto;" >

        <tr>

            <th>제목 </th> <th> 날짜 </th> <th> 완료여부 </th>

        </tr>

        <?php
        $userid=$_SESSION['userid'];
        $query = "select title, tt, commit, docid from doc where userid='$userid';";
        $result=mysqli_query($connect,$query);

        while($row=mysqli_fetch_array($result)){

            ?>

            <tr>

                <td><a href="sendd.php?docid=<?=$row[3]?>"> <?=$row[0]?> </a></td> <td> <?=$row[1]?> </td> <td> <?=$row[2]?> </td>

            </tr>
        <?}?>

    </table>
</form>



<!--h3>
    ::todo::<br>

    제목 누르고 링크 들어갔을때 해당 문서 상세 정보 확인과 승인/반려 현황 볼 수 있게 해야함 <br>

    select count(*) from progress where docid='1';<br>

    select count(*) from progress where docid='1'and status='1';<br>

    두 쿼리의 결과가 같을때 승인 완료 표시

</h3-->

</body>
</html>
