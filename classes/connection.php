<?php 

class connection{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';

    private $db_name = 'crud_oop';

    public $conn;

    public function __construct() 
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db_name);

        if ($this->conn->connect_error) {
            die('ERROR Connecting to database');
    }

}
}

?>