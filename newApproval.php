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

$userid=$_SESSION['userid'];
$title=$_POST["title"];
$text=$_POST["text"];
$now=date("Y-m-d h:i:s");

$query1="select * from doc";
$result=mysqli_query($connect,$query1);

$userid=addslashes($userid);
$title=addslashes($title);
$text=addslashes($text);
$now=addslashes($now);

$query2="insert into doc (userid,title,result,time) values ('$userid','$title','$result','$now')";
mysqli_query($connect,$query2);

?>


