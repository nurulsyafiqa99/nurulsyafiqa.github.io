<?php
require_once "sql.class.php";
class Manipulation extends Sql{
	function __construct(){
		parent::__construct();
	}

	function autonumber($thisTable, $thisField, $length, $prefix){
		$this->getRecord($thisField,"$thisTable order by $thisField desc limit 1");
		$hasil = $this->getArray();
		$count = $this->recordCount();
		if($count == 0){
			$number=1;
		}else{
			$row=$hasil;
			$number=intval(substr($row[0],strlen($prefix)))+1;
		}
		if($length>0)
			$angka = $prefix.str_pad($number,$length,"0",STR_PAD_LEFT);
		else
			$angka = $prefix.$number;
		return $angka;
	}

	function securitySqlInjection($data){
		$filter=mysql_real_escape_string(
		stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
	return $filter;

	}
}

?>