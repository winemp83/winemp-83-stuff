<?php
namespace Login;

class action{
	
	public function show($what = 0){
		switch ($what){
			case 1 :
					echo $this->createUser();
					break;
			case 2 :
					$this->LogOut();
					break;
			default : return $this->checkLoginData();
			break;
		}
	}
	
	
	
	protected function createUser(){
		$login = trim(substr($_POST['login'], 0, 100));
		if(($_POST['passA'] === $_POST['passB']) && (strlen($_POST['passA']) > 6)){
			$pass = trim(substr($_POST['passA'], 0, 100));
		}
		else{
			return 2;
		}
		$mail = trim(substr($_POST['email'], 0, 100));
		
		
		$SQL = "SELECT COUNT(id) FROM ".USER." WHERE user='".$login."' OR email='".$mail."'";
		$result = $GLOBALS['DB']->query($SQL);
		foreach($result as $check){
			if($check['COUNT(id)'] != 0){
				return 3;
			}			
		}
		$sql = "INSERT INTO ".USER." SET user='".$login."', password='".md5($pass)."', email='".$mail."'";
		$GLOBALS['DB']->query($sql);
		return 0;
	}
	
	protected function checkLoginData(){
		$login = trim(substr($_POST['login'],0,100));
		$password = trim(substr($_POST['pass'],0,100));
		
		$loginlist = $GLOBALS['DB']->query("SELECT * FROM ".USER."");
		foreach ($loginlist as $combi){
			if(($login == $combi['user']) && (md5($password) == $combi['password'])){
				session_regenerate_id();
				$_SESSION['user'] = $login;
				$_SESSION['logIn'] = time();
				return true;
			}
		}
		return false;
	}
	
	protected function LogOut(){
		session_destroy();
		header("Location: index.php");
	}
	
}
