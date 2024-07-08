<?php
/*Edited by Hery Septyadi*/
require_once "conn.class.php";
class Sql extends Conn{
    private $sql;
    private $result;
    private $num_rows;
    private $row;
	function __construct(){
        parent::__construct();
	}
    function execute($query){
        $this->sql=$query;
        $this->result=mysql_query($this->sql) or die(mysql_error()."".$query);
    }
    function delete($isTable,$isCriteria){
        $this->execute("DELETE FROM $isTable WHERE $isCriteria");
        return true;
    }
    function update($isTable,$isValues,$isCriteria){
		$getValues;
		foreach($isValues as $key=>$values){
			$getValues[]= $key."='".$values."'";
		}
        return $this->execute("UPDATE $isTable SET ".implode(',',$getValues)." WHERE $isCriteria");
    }
    function insert($isTable,$isValues){
		$getValues;
		foreach($isValues as $values){
			$getValues[]= "'".$values."'";
		}
		$this->execute("INSERT INTO $isTable VALUES(".implode(',',$getValues).")");
		return true;
        //return $this->execute("INSERT INTO $isTable VALUES(".implode(',',$getValues).")");
    }
    function getArray(){
        $this->row=mysql_fetch_array($this->result,MYSQL_NUM);
        return $this->row;
    }
    function getRecord($thisField,$thisTable){
        return $Q=$this->execute("SELECT $thisField FROM $thisTable");
    }
    function recordCount(){
        $this->num_rows=mysql_num_rows($this->result);
        return $this->num_rows;
    }
    function listField($table_name){
        $this->l_field=mysql_list_fields($this->db_name,$table_name);
        $this->l_field;
    }
    function numFields(){
        $this->field_count=mysql_num_fields($this->l_field);
        return $this->field_count;
    }
}
?>
