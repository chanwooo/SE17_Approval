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



$query="update progress set status='Y' where userid='$userid' and docid='$docid'";
$result=mysqli_query($connect,$query);

$q1="select count(*) from progress where docid='$docid'";
$re1=mysqli_query($connect,$q1);
$c1=mysqli_fetch_row($re1);

$q2="select count(*) from progress where docid='$docid'and status='Y'";
$re2=mysqli_query($connect,$q2);
$c2=mysqli_fetch_row($re2);

echo $c1[0];
echo "<br>/";
echo $c2[0];

if($c1[0]==$c2[0]){
    $query1 = "update doc set commit='Y' where docid='$docid'";
    mysqli_query($connect, $query1);
}


header("location:recv.php");
?>



</body>
</html>
