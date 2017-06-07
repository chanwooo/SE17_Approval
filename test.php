<?php
/**
 * Created by PhpStorm.
 * User: chanwoo
 * Date: 2017. 5. 29.
 * Time: 오후 10:40
 */

require_once "Users.class.php";
require_once "query.php"

$obj=new Users;

$obj->newUser("0001","1234","chanwoo", "대리", "0002");

print_r($obj);

?>

