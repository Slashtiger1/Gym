<?php


class connection{


    private $db_name = 'gyn';
    private $db_user_name = 'root';
    private $db_host = 'localhost';
    private $password = '';

    private $con = '';

    public function __construct()
    {
        $this->con =  mysqli_connect($this->db_host, $this->db_user_name, $this->password) or die(mysqli_error("database"));
        mysqli_select_db($this->con,$this->db_name) or die(mysqli_error("database"));
    }


    public function get_connection_details(){
        return $this->con->client_info();
    }

    public function close_connection(){
       return $this->con->close();
    }


}