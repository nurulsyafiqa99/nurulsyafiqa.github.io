<?php
class Conn{
	private $db_host;
    private $db_username; 				
    private $db_password; 
	private $link_id;
    private $db_name;
	function __construct(){
        $this->db_host = "localhost";
        $this->db_username = "root";
        $this->db_password = "";
        $this->db_name = "db_resepmakanan";
        $this->openConn();
    }
    public function getDbUsername(){
        return $this->db_username;
    }
    public function getDbHost(){
        return $this->db_host;
    }
    public function getDBpass(){
        return $this->db_password;
    }
    public function getDbName(){
        return $this->db_name;
    }
    public function openConn(){
        $this->link_id=mysql_connect($this->db_host,$this->db_username,$this->db_password);
        return mysql_select_db($this->db_name,$this->link_id)or die("UNABLE TO SELECT DATABASE");
    }
}
?>