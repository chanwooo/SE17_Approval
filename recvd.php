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
$docid=$_GET['docid'];

$query="select * from users,doc where users.id=doc.userid and docid=$docid";
$result=mysqli_query($connect,$query);

$doc=mysqli_fetch_array($result);
//var_dump($doc);

//echo $managers[rank] . " " . $managers[name];

?>

<form method="post" name="Form">

    <table class="unstriped" border=1 cellpadding="4" cellspacing="0" bgcolor="white" bordercolor="gray" style="margin:0 auto;" >

        <tr>

            <td>제목 </td><td><?=$doc['title']?></td>

        </tr>

        <tr>

            <td>작성자 </td><td> <?=$doc[rank]?> <?=$doc[name] ?> </td>

        </tr>


        <tr>

            <td>수신인 </td><td>

                <?php



                $query1="select rank, name from users where id in (SELECT manager FROM managers where userid='$doc[userid]' )";
                $result=mysqli_query($connect,$query1);
                //var_dump($result);

                while($managers=mysqli_fetch_array($result)) {
                    //var_dump($managers);

                    echo $managers[rank] . " " . $managers[name]."<br>";
                    //echo " : 승인/반려<br>";

                }
                ?>


            </td>

        </tr>

        <tr>

            <td>내용 </td><td><?=$doc['text']?></td>

        </tr>

        <tr>

            <td></td><td><input class="success button" type="submit" value="승인" onclick='Submit(1)'><input class="alert button" type="submit" value="거절" onclick='Submit(2)'></td>

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
<script type="text/javascript">

    function Submit(index) {

        if (index == 1) {

            document.Form.action='approval.php?docid=<?=$docid?>';

        }

        if (index == 2) {

            document.Form.action='denied.php?docid=<?=$docid?>';

        }

        document.Form.submit();

    }

</script>
