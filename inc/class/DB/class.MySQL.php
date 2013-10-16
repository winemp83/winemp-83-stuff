<?php
namespace SYSTEM\DATABASE;

class MySQL extends \mysqli{
	public $MySQLiObj;
	public $lastSQLQuery;
	public $lastSQLStatus;
	
	public function __construct($server, $user, $password, $db, $port){
		$this->MySQLiObj = new \mysqli($server, $user, $password, $db, $port = "3306");
		if(mysqli_connect_errno()){
			echo "keine Verbindung zum Datenbank Server möglich.";
			trigger_error("MySQL-Connection-Error", E_USER_ERROR);
			die();
		}
		
		$this->query("SET NAMES utf8");
	}
	
	public function __destruct(){
		$this->MySQLiObj->close();
	}
	
	public function escape($string, $flag = false)
    {
		return $this->sql_escape($string, $flag);
    }
	
    public function sql_escape($string, $flag = false)
    {
		return ($flag === false) ? parent::escape_string($string): addcslashes(parent::escape_string($string), '%_');
    }
	
	public function query($sqlQuery, $resultset = false){
		$this->lastSQLQuery = $sqlQuery;
		$result = $this->MySQLiObj->query($sqlQuery);
		
		if($resultset == true){
			if($result == false){
				$this->lastSQLStatus = false;
			}
			else{
				$this->lastSQLStatus = true;
			}
			return $result;
		}
		$return = $this->makeArrayResult($result);
		return $return;
	}
	
	public function lastSQLError(){
		$error  = $this->MySQLiObj->error;
		$error .= "</br>".$this->MySQLiObj->errno; 
		return $error;
	}
	
	private function makeArrayResult($ResultObj){
		if($ResultObj === false){
			$this->lastSQLStatus = false;
			return false;
		}
		elseif($ResultObj === true) {
			$this->lastSQLStatus = true;
			return true;
		}
		elseif ($ResultObj->num_rows == 0) {
			$this->lastSQLStatus = true;
			return array();
		}
		else{
			$array = array();
			while($line = $ResultObj->fetch_array(MYSQLI_ASSOC)){
				array_push($array, $line);
			}
			$this->lastSQLStatus = true;
			return $array;
		}
	}
}
?>