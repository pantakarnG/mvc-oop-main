<?php
class Users{
    private $ConDB;
    public function __construct(){
        $con = new ConDB();
        $con->connect();
        $this->ConDB = $con->conn;
    }

    public function getUsers()
    {
        $sql = "SELECT * FROM users ";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }else {
            return false;
        }
    }

    
    public function addUser($data_users)
    {
        $sql = "INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `urole`)";
        $sql .= " VALUES ('', :firstname, :lastname, :email, :password, :urole);";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute($data_users)){
            return true;
        }else {
            return false;
        }
    }

public function editUser($id, $firstname, $lastname, $email, $password)
    {
        $sql = "UPDATE `users` SET firstname` = '". $firstname ."', `lastname` = '". $lastname ."', `email` = '". $email ."', `password` = '". $password ."' WHERE `id` = '". $id ."'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }
	
}
?>