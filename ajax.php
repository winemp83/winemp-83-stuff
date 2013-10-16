<?php
/*
if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || $_SERVER['HTTP_X_REQUESTED_WITH'] != 'XMLHttpRequest' ){
    die();
}
else{
 * 
 */
	require_once "common.php";
	switch ($_POST['menue']){
		case 1 : echo "Hier wird das Login erscheien";
				break;
		case 2 : echo "Hier werden die ergebnisse sich breit machen!";
				break;
		case 3 : echo "Termine, Termine und nix als Termine sollen hier erscheien!";
				break;
		case 4 : echo "Das wir ein Impressum brauchen ist ja blöd!";
				break;
		case 11: echo "Hier kann man seine persönlichen Ergebnisse sehen";
				break;
		case 12: echo "Hier darfste Ergebnisse eingeben!(als normaler User nur eigene als Admin für alle)";
				break;
		case 13: echo "Hier werden die letzten Infos angezeigt!(Als Admin darf man auch welche eingeben)";
				break;
		case 14: echo "Logout sit selsterklärend!";
				break;
		case 21: echo "Hier kann man neue User anlegen!";
				break;
		case 22: echo "Hier darfste Informationen eingeben!";
				break;
		case 23: $content = new \ADM\Rounds;
				 $content->show();
				break;
		case 24: 
				$content = new \ADM\createRights;
				break;
		case 25: echo "Hier kannst du ein Support Ticket an den Seiten Betreiber schicken!";
				break;
		default: echo $_POST['menue'];
				break;
	}
	/*
}
	*/
?>