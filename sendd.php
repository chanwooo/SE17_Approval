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
                $q="select * from progress,doc,users where progress.docid=doc.docid and progress.userid=users.id and doc.docid='$docid'";
                $r=mysqli_query($connect,$q);
                while($info=mysqli_fetch_array($r)) {

                    //var_dump($info);
                    //echo "<br>";


                    $yn=$info[commit];
                    echo $info[rank] . " " . $info[name];
                    if($info[status]=='Y'){
                        echo " :승인<br>";
                    }else{echo " :반려<br>";}


                }
                ?>


            </td>

        </tr>

        <tr>

            <td>내용 </td><td><?=$doc['text']?></td>

        </tr>

        <tr>
            <td>결재상황</td>
            <td>
                <?php

                if($yn=='Y'){
                    echo " 승인완료<br>";
                }else{echo " 결재중<br>";}
                ?>
            </td>
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