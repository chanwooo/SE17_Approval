<?php
/**
 * Created by PhpStorm.
 * User: chanwoo
 * Date: 2017. 5. 30.
 * Time: 오후 5:07
 */
class Users {
    public $id, $pw, $name, $rank, $manager;

    function newUser($_id, $_pw, $_name, $_rank, $_manager){
        $this->id=$_id;
        $this->pw=$_pw;
        $this->name=$_name;
        $this->rank=$_rank;
        $this->manager=$_manager;

        //db:: INSERT INTO users (`id`, `pw`, `name`, `rank`, `manager`) VALUES ($_id, $_pw, $_name, $_rank, $_manager);

    }





}