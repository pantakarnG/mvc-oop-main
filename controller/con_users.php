<?php
include_once "../model/ConDB.php";
include_once "../model/Users.php";
$obj_name = new Users();
$user1= $obj_name->getUsers();
?>

