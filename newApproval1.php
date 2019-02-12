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

<?php
include 'header.php';

?>

<form method="post" action="newApproval.php">

    <table class="unstriped" border=1 cellpadding="4" cellspacing="0" bgcolor="white" bordercolor="gray" style="margin:0 auto;" >

        <tr>

            <td>제목 </td><td><input type="text" name="title" placeholder="제목을 입력하세요" size="50"></td>

        </tr>

        <tr>

            <td>작성자 </td><td> <?=$userinfo[rank]?> <?=$userinfo[name] ?> </td>

        </tr>


        <tr>

            <td>수신인 </td><td>

                <?php


                $query1="select rank, name, id from users where id in (SELECT manager FROM managers where userid='$userid' )";
                $result=mysqli_query($connect,$query1);
                //var_dump($result);

                while($managers=mysqli_fetch_array($result)) {
                    //var_dump($managers);

                    echo "<input type='checkbox' name='manager[]' value=". $managers[id] ." >";
                    echo $managers[rank] . " " . $managers[name] . "<br>";

                }
                ?>


            </td>

        </tr>

        <tr>

            <td>내용 </td><td><textarea name="text" placeholder="내용을 입력하세요" cols="50" rows="20"></textarea></td>

        </tr>

        <tr>

            <td></td><td><input class="button" type="submit" value="작성하기"></td>

        </tr>

    </table>

</form>



<!--h3>
    ::todo::<br>

    수신인 목록 가져오기(managers table)<br>
    progress table에 수신자 목록과 함께 insert<br>

</h3-->

</body>
</html>
