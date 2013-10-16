<?php

namespace SYSTEM;

class Security{
	
	public static function checkLogin(){
		$prueftime = time() - (60*60*5);
		if ($_SESSION['logIn'] < $prueftime){
			return false;
		}
		else{
			$_SESSION['login'] = time();
			return true;
		}
	}
}
?>