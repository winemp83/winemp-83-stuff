<?php
namespace ADM;

class createRights{
	public function __construct(){
		if($this->checkRight()){
			$this->show();
		}
		else{
			echo "Sie haben keine Rechte hierfür!";
		}
	}
	
	protected function show(){
		echo $this->getData();
	}
	
	protected function getData(){
		$SQL = "SELECT * FROM ".RIGHTS."";
		$resultList = $GLOBALS['DB']->query($SQL);
		$site  = '<table rules="all">';
		$site .= '<tr>';
		$site .= '<th>Mitglied</th>';
		$site .= '<th>Termine eintragen</th>';
		$site .= '<th>Ergebnisse eintragen</th>';
		$site .= '<th>News Eintragen</th>';
		$site .= '<th>Rechte Verwalten</th>';
		$site .= '<th>Benutzer eingeben</th>';
		$site .= '<th>Rechte Editieren</th>';
		$site .= '</tr>';
		foreach($resultList as $data){
			$site .= '<tr>';
			$user = $GLOBALS['DB']->query("SELECT (user) FROM ".USER." WHERE id='".$data['user_id']."'");
			foreach ($user as $User){
				$site .= '<td>'.$User['user'].'</td>';
			}
			if($data['termine'] != 0){
				$site .= '<td><img src="'.PROJECT_HTTP_ROOT.'/images/true.png"></img></td>';
			}
			else{
				$site .= '<td><img src="'.PROJECT_HTTP_ROOT.'/images/false.png"></img></td>';
			}
			if($data['ergbenisse'] != 0){
				$site .= '<td><img src="'.PROJECT_HTTP_ROOT.'/images/true.png"></img></td>';
			}
			else{
				$site .= '<td><img src="'.PROJECT_HTTP_ROOT.'/images/false.png"></img></td>';
			}
			if($data['news'] != 0){
				$site .= '<td><img src="'.PROJECT_HTTP_ROOT.'/images/true.png"></img></td>';
			}
			else{
				$site .= '<th><img src="'.PROJECT_HTTP_ROOT.'/images/false.png"></img></td>';
			}
			if($data['rechte'] != 0){
				$site .= '<td><img src="'.PROJECT_HTTP_ROOT.'/images/true.png"></img></td>';
			}
			else{
				$site .= '<td><img src="'.PROJECT_HTTP_ROOT.'/images/false.png"></img></td>';
			}
			if($data['user'] != 0){
				$site .= '<td><img src="'.PROJECT_HTTP_ROOT.'/images/true.png"></img></td>';
			}
			else{
				$site .= '<td><img src="'.PROJECT_HTTP_ROOT.'/images/false.png"></img></td>';
			}
			$site .= '<td><a href="">User ändern!</a>';
			$site .= '</tr>';
		}
		$site .= '</table>';
		return $site;
	}
	
	protected function setData($id){
		
	}
	
	protected function checkRight(){
		return true;
	}
}
