<?php 
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$urole='user';

?>

<?php
$users=array();

$users["firstname"]=$firstname;
$users["lastname"]=$lastname;
$users["email"]=$email;
$users["password"]=$password;
$users["urole"]=$urole;


?>

<?php
include_once "../model/ConDB.php";
include_once "../model/Users.php";

$obj_name=new Users();
echo $rs2= $obj_name->addUser($users);
?>

<?php
include_once "../view/Addusers.php";
?>



