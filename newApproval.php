<?php
/**
 * Created by PhpStorm.
 * User: chanwoo
 * Date: 2017. 5. 30.
 * Time: 오전 1:35
 */

//getManagers

//결재 라인에 있는사람들 select 해서 변수에 저장/출력


//writeDoc


//insert doc

//INSERT INTO doc (userid, text) VALUES ('0001', 'hello');

//
//insert progress 저장
include 'header.php';


$userid=$_SESSION['userid'];
$manager=$_POST["manager"];
$title=$_POST["title"];
$text=$_POST["text"];
$now=date("Y-m-d h:i:s");

$query1="select * from doc";
$result=mysqli_query($connect,$query1);

$a=mysqli_fetch_array($result);

var_dump($a[1]);

for($i=0;$i<sizeof($manager);$i++) {
    var_dump($manager[$i]);
}

echo "<br>:manager:";
var_dump($manager);
echo "<br>";
$userid=addslashes($userid);
//$manager=addslashes($manager);
$title=addslashes($title);
$text=addslashes($text);
$now=addslashes($now);


$query2="insert into doc (userid,title,text,tt) values ('$userid','$title','$text','$now')";
mysqli_query($connect,$query2);

$query4="select docid from doc where tt='$now'";
$result=mysqli_query($connect, $query4);
$docid=mysqli_fetch_row($result);
var_dump($docid);

for($i=0;$i<sizeof($manager);$i++) {
    echo $manager[$i];
    echo "<br>";
    
    $query3 = "insert into progress (docid,userid,tt) values ('$docid[0]','$manager[$i]','$now')";
    mysqli_query($connect, $query3);
}


header("location:send.php");
?>


