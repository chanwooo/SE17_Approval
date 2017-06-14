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

$query="update progress set status='N' where userid='$userid' and docid='$docid'";
$result=mysqli_query($connect,$query);

?>