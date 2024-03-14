<?php

include("connection.php");

// inheritance 
class User extends connection {
    public function create($request){
        $firstname = $request['first_name'];
        $lastname = $request['last_name'];
        $email = $request['email'];
        $bdate = $request['bdate'];

        $sql = "INSERT INTO users(first_name, last_name, email, bdate) VALUES('$firstname', '$lastname', '$email', '$bdate')";
        if($this->conn->query($sql)){
            header('location:../display.php');
            exit;
        }else{
            die("ERROR: unable to add user");
        }

    }
    public function display() {
        $sql = "SELECT * FROM users";
        $result = $this->conn->query($sql);
    
        if ($result) {
            return $result;
        } else {
            die("Error retrieving all users: " . $this->conn->error);
        }
    }
    
    public function update($firstname,$lastname,$email,$bdate, $id) {

        $sql = "UPDATE users SET `first_name' = $firstname, `last_name' = $lastname, `email' = $email, `bdate' = $bdate WHERE id = $id";

        if($this->conn->query($sql)){
            header("location:display.php");
            exit;
        } else {
            die("Error updating the product: " .$this->conn->error);
        }
    }

    public function delete(){

    }
}
?>