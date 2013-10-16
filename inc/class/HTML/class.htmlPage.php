<?php
namespace SYSTEM;

class htmlPage extends HTML{
		
	public function __construct(){
		echo parent::printHead();
		echo parent::printBody();
		echo $this->printHeader();
		echo $this->wrapper();
		echo $this->menue();
		echo $this->content();
		echo parent::printFoot();
	}
	
	private function printHeader(){
		$site  = "<div id='header'>";
		$site .= "<img src='".PROJECT_HTTP_ROOT."/images/logo1.gif' id='headerjpgl'></img>";
		$site .= "<span id='headline'><h3>Schützenverein Quakenbrück 1589</h3>";
		$site .= "Schiessgruppe 3</span></div>";
		$site .= "<img src='".PROJECT_HTTP_ROOT."/images/logo1.gif' id='headerjpgr'></img>";
		return $site;
	}
	
	private function wrapper(){
		return "<div id='wrapper'>";
	}
	
	private function menue($status = 0){
		switch ($status){
			case 1 :
					$site  = "<div id='menue'>";
					$site .= "<button id='logout' value='10' name='menue'>Logout</button>";
					$site .= "</div>";
					return $site;
					break;
			default:
					$site  = "<div id='menue'>";
					$site .= "<h6>Outer Menue</h6>";
					$site .= "<button id='login' value='1' class='menuea' name='menue' style='width:185px;color:red;'>Login</button>";
					$site .= "<button id='ergebnisse' value='2' class='menueb' name='menue' style='width:185px;color:red;'>Ergebnisse</button>";
					$site .= "<button id='termine' value='3' class='menuec' name='menue' style='width:185px;color:red;'>Termine</button>";
					$site .= "<button id='impressum' value='4' class='menued' name='menue' style='width:185px;color:red;'>Impressum</button>";
					$site .= "<h6>Inner Menue</h6>";
					$site .= "<button id='ergebnisse' value='11' class='menuee' name='menue' style='width:185px;color:red;'>Ergebnisse</button>";
					$site .= "<button id='dateneingabe' value='12' class='menuef' name='menue' style='width:185px;color:red;'>Dateneingabe</button>";
					$site .= "<button id='informationen' value='13' class='menueg' name='menue' style='width:185px;color:red;'>Informationen</button>";
					$site .= "<button id='logout' value='14' class='menueh' name='menue' style='width:185px;color:red;'>Logout</button>";
					$site .= "<h6>Admin Menue</h6>";
					$site .= "<button id='create' value='21' class='menuei' name='menue' style='width:185px;color:red;'>Schützen Verwalten</button>";
					$site .= "<button id='news' value='22' class='menuej' name='menue' style='width:185px;color:red;'>News eingeben</button>";
					$site .= "<button id='runden' value='23' class='menuek' name='menue' style='width:185px;color:red;'>Wettkämpfe Verwalten</button>";
					$site .= "<button id='support' value='25' class='menuem' name='menue' style='width:185px;color:red;'>Support erhalten</button>";
					$site .= "</div>";
					return $site;
					break;
					
		}
	}
	
	private function content(){
		$site  = "<div id='content'>";
		$site .= "<p>Willkommen bei der Schiessgruppe 3 des Schützenvereins Quakenbrück 1589</br>";
		$site .= "Hier erhalten Schützen der Schiessgruppe Informationen über die Rundenwettkämpfe und ihre Ergebnisse</p>";
		$site .= "</div></div>";
		return $site;
	}
}
?>