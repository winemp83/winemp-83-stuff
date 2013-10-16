<?php
namespace ADM;

class Rounds{
	public function show(){
		if(!isset($_POST['rounds']) || empty($_POST['rounds'])){
			$menue = 0;
		}
		else{
			$menue = $_POST['rounds'];
		}
		switch ($menue){
			case 1 :
					$content  = $this->main();
					$content .= '<br/>'.$this->setTeams();				
					break;
			case 2 :
					$content  = $this->main();
					$content .= '<br/>'.$this->getTeams();					
					break;
			case 3 :
					$content  = $this->main();
					$content .= '<br/>'.$this->setTermin();	
					break;
			case 4 :
					$content  = $this->main();
					$content .= '<br/>'.$this->getTermin();
					break;
			case 5 :
					$content  = $this->main();
					$content .= '<br/>'.$this->insertResults();
					break;
			case 6 :
				 	break;
			default: 
					$content = $this->main();
					$content .= "<p>Hier könnne Sie alles Verwalten was mit den Rundne Wettkämpfen direkt oder Indirekt zu tun hat.<br/>";
					$content .= "Sie können :<br/><ul><li>Teams anlegen</li>";
					$content .= "<li>sich Teams anzeigen lassen</li>";
					$content .= "<li>Termine eingeben</li>";
					$content .= "<li>sich alle Termine Anzeigen lassen</li>";
					$content .= "<li>Ergebnisse für alle Schützen ansehen</li>";
					$content .= "<li>Ergebnisse erfassen (hierbei ist egal ob Trainings Ergebnisse oder Wettkampf Ergebnisse)</li></ul></p>";
					break;
		}
		echo $content;	
	}
	
	protected function insertResults(){
		switch ($_POST['wahl']){
			case 1 :
					$site .= '<fieldset style="padding:10px;width:300px;border:2px outset gold;">';
					$site .= '<legend>Schütze auswählen</legend>';
					$site .= '<table width="300px">';
					$site .= '<tr width="300px">';
					$site .= '<th>Schütze :</th>';
					$site .= '<td><select id="schuetze" size="1">';
					$result = $GLOBALS['DB']->query("SELECT (user) FROM ".USER."");
					foreach($result as $data){
						$site .= '<option>'.$data['user'].'</option>';
					}
					$site .= '</select></td>';
					$site .= '</tr></table>';
					$site .= '</fieldset>';
					$site .= '<fieldset style="padding:10px;width:300px;border:2px outset gold;">';
					$site .= '<legend>Schuss eingeben</legend>';
					$site .= '<table width="300px" rules="all">';
					$site .= '<tr>';
					$site .= '<th>1</th>';
					$site .= '<th>2</th>';
					$site .= '<th>3</th>';
					$site .= '<th>4</th>';
					$site .= '<th>5</th>';
					$site .= '<th>6</th>';
					$site .= '<th>7</th>';
					$site .= '<th>8</th>';
					$site .= '<th>9</th>';
					$site .= '<th>10</th>';
					$site .= '</tr><tr>';
					$site .= '<th><input type="text" id="schuss1" name="schuss_1" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss2" name="schuss_2" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss3" name="schuss_3" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss4" name="schuss_4" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss5" name="schuss_5" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss6" name="schuss_6" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss7" name="schuss_7" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss8" name="schuss_8" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss9" name="schuss_9" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss10" name="schuss_10" maxLength="2" size="2"></th>';
					$site .= '</tr><tr>';
					$site .= '<th>11</th>';
					$site .= '<th>12</th>';
					$site .= '<th>13</th>';
					$site .= '<th>14</th>';
					$site .= '<th>15</th>';
					$site .= '<th>16</th>';
					$site .= '<th>17</th>';
					$site .= '<th>18</th>';
					$site .= '<th>19</th>';
					$site .= '<th>20</th>';
					$site .= '</tr><tr>';
					$site .= '<th><input type="text" id="schuss11" name="schuss_11" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss12" name="schuss_12" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss13" name="schuss_13" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss14" name="schuss_14" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss15" name="schuss_15" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss16" name="schuss_16" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss17" name="schuss_17" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss18" name="schuss_18" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss19" name="schuss_19" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss20" name="schuss_20" maxLength="2" size="2"></th>';
					$site .= '</tr><tr>';
					$site .= '<th>21</th>';
					$site .= '<th>22</th>';
					$site .= '<th>23</th>';
					$site .= '<th>24</th>';
					$site .= '<th>25</th>';
					$site .= '<th>26</th>';
					$site .= '<th>27</th>';
					$site .= '<th>28</th>';
					$site .= '<th>29</th>';
					$site .= '<th>30</th>';
					$site .= '</tr><tr>';
					$site .= '<th><input type="text" id="schuss21" name="schuss_21" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss22" name="schuss_22" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss23" name="schuss_23" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss24" name="schuss_24" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss25" name="schuss_25" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss26" name="schuss_26" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss27" name="schuss_27" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss28" name="schuss_28" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss29" name="schuss_29" maxLength="2" size="2"></th>';
					$site .= '<th><input type="text" id="schuss30" name="schuss_30" maxLength="2" size="2"></th>';
					$site .= '</tr></table>';
					$site .= '</fieldset>';
					$site .= '<fieldset style="padding:10px;width:300px;border:2px outset gold;">';
					$site .= '<legend>Daten Absenden</legend>';
					$site .= '<table width="300px">';
					$site .= '<tr>';
					$site .= '<input type="hidden" name="menue_a" id="menue_zc" value="23">';
					$site .= '<input type="hidden" name="rounds_a" id="rounds_zc" value="5">';
					$site .= '<input type="hidden" name="rounds_a" id="wahl_ac" value="11">';
					$site .= '<th><button class="enter_team" name="enter_team" onClick="javascript:setRequest(93);">Daten absenden</button></th>';
					$site .= '</tr></table>';
					$site .= '</fieldset>';
					break;
			case 2 :
					$site .= '<fieldset style="padding:10px;width:300px;border:2px outset gold;">';
					$site .= '<legend>Wettkampf auswählen</legend>';
					$site .= '<table width="300px">';
					$site .= '<tr width="300px">';
					$site .= '<th>Wettkampf :</th>';
					$site .= '<td><select id="nr" size="1">';
					$result = $GLOBALS['DB']->query("SELECT (wettNr) FROM ".TERMIN."");
					foreach($result as $data){
						$site .= '<option>'.$data['wettNr'].'</option>';
					}
					$site .= '</select></td>';
					$site .= '</tr></table>';
					$site .= '</fieldset>';
					$site .= '<fieldset style="padding:10px;width:300px;border:2px outset gold;">';
					$site .= '<legend>Ergebniss eingeben</legend>';
					$site .= '<table width="300px">';
					$site .= '<tr width="300px">';
					$site .= '<th colspan="2">Heimmanschaft :</th>';
					$site .= '</tr><tr>';
					$site .= '<td> Erster Schütze:</td>';
					$site .= '<td><input type="text" name="heim_p" id="heim_pa" size="3" maxLenght="3"></td>';
					$site .= '</tr><tr>';
					$site .= '<td> Zweiter Schütze:</td>';
					$site .= '<td><input type="text" name="heim_p" id="heim_pb" size="3" maxLenght="3"></td>';
					$site .= '</tr><tr>';
					$site .= '<td> Dritter Schütze:</td>';
					$site .= '<td><input type="text" name="heim_p" id="heim_pc" size="3" maxLenght="3"></td>';
					$site .= '</tr><tr>';
					$site .= '<td> Vierter Schütze:</td>';
					$site .= '<td><input type="text" name="heim_p" id="heim_pd" size="3" maxLenght="3"></td>';
					$site .= '</tr><tr>';
					$site .= '<td>Gesamt: </td>';
					$site .= '<td><input type="text" name="heim_p" id="heim_gs" size="3" maxLenght="3"></td>';
					$site .= '</tr>';
					$site .= '<tr width="300px">';
					$site .= '<th colspan="2">Gastmanschaft :</th>';
					$site .= '</tr><tr>';
					$site .= '<td> Erster Schütze:</td>';
					$site .= '<td><input type="text" name="gast_p" id="gast_pa" size="3" maxLenght="3"></td>';
					$site .= '</tr><tr>';
					$site .= '<td> Zweiter Schütze:</td>';
					$site .= '<td><input type="text" name="heim_p" id="gast_pb" size="3" maxLenght="3"></td>';
					$site .= '</tr><tr>';
					$site .= '<td> Dritter Schütze:</td>';
					$site .= '<td><input type="text" name="heim_p" id="gast_pc" size="3" maxLenght="3"></td>';
					$site .= '</tr><tr>';
					$site .= '<td> Vierter Schütze:</td>';
					$site .= '<td><input type="text" name="heim_p" id="gast_pd" size="3" maxLenght="3"></td>';
					$site .= '</tr><tr>';
					$site .= '<td>Gesamt:</td>';
					$site .= '<td><input type="text" name="heim_p" id="gast_gs" size="3" maxLenght="3"></td>';
					$site .= '</tr></table>';
					$site .= '</fieldset>';
					$site .= '<fieldset style="padding:10px;width:300px;border:2px outset gold;">';
					$site .= '<legend>Daten Absenden</legend>';
					$site .= '<table width="300px">';
					$site .= '<tr>';
					$site .= '<input type="hidden" name="menue_a" id="menue_zd" value="23">';
					$site .= '<input type="hidden" name="rounds_a" id="rounds_zd" value="5">';
					$site .= '<input type="hidden" name="rounds_a" id="wahl_ad" value="12">';
					$site .= '<th><button class="enter_team" name="enter_team" onClick="javascript:setRequest(94);">Daten absenden</button></th>';
					$site .= '</tr></table>';
					$site .= '</fieldset>';
					break;
			case 11:
					$help_a = 0;
					$result= $GLOBALS['DB']->query("SELECT (id) FROM ".USER." WHERE user='".$_POST['schuetze']."'");
					foreach($result as $data){
						$help_a = $data['id'];
					}
					$sql = ("INSERT INTO ".EINZEL." SET
							 schuss1	= '".$_POST['schuss_1']."',
							 schuss2	= '".$_POST['schuss_2']."',
							 schuss3	= '".$_POST['schuss_3']."',
							 schuss4	= '".$_POST['schuss_4']."',
							 schuss5	= '".$_POST['schuss_5']."',
							 schuss6	= '".$_POST['schuss_6']."',
							 schuss7	= '".$_POST['schuss_7']."',
							 schuss8	= '".$_POST['schuss_8']."',
							 schuss9	= '".$_POST['schuss_9']."',
							 schuss10	= '".$_POST['schuss_10']."',
							 schuss11	= '".$_POST['schuss_11']."',
							 schuss12	= '".$_POST['schuss_12']."',
							 schuss13	= '".$_POST['schuss_13']."',
							 schuss14	= '".$_POST['schuss_14']."',
							 schuss15	= '".$_POST['schuss_15']."',
							 schuss16	= '".$_POST['schuss_16']."',
							 schuss17	= '".$_POST['schuss_17']."',
							 schuss18	= '".$_POST['schuss_18']."',
							 schuss19	= '".$_POST['schuss_19']."',
							 schuss20	= '".$_POST['schuss_20']."',
							 schuss21	= '".$_POST['schuss_21']."',
							 schuss22	= '".$_POST['schuss_22']."',
							 schuss23	= '".$_POST['schuss_23']."',
							 schuss24	= '".$_POST['schuss_24']."',
							 schuss25	= '".$_POST['schuss_25']."',
							 schuss26	= '".$_POST['schuss_26']."',
							 schuss27	= '".$_POST['schuss_27']."',
							 schuss28	= '".$_POST['schuss_28']."',
							 schuss29	= '".$_POST['schuss_29']."',
							 schuss30	= '".$_POST['schuss_30']."',
							 user_id	= '".$help_a."'");
					$GLOBALS['DB']->query($sql);
					$gesamt  = ($_POST['schuss_1'] + $_POST['schuss_2'] + $_POST['schuss_3'] + $_POST['schuss_4'] + $_POST['schuss_5'] + $_POST['schuss_6'] + $_POST['schuss_7'] + $_POST['schuss_8'] + $_POST['schuss_9']);
					$gesamt += ($_POST['schuss_10'] + $_POST['schuss_11'] + $_POST['schuss_12'] + $_POST['schuss_13'] + $_POST['schuss_14'] + $_POST['schuss_15'] + $_POST['schuss_16'] + $_POST['schuss_17']);
					$gesamt += ($_POST['schuss_18'] + $_POST['schuss_19'] + $_POST['schuss_20'] + $_POST['schuss_21'] + $_POST['schuss_22'] + $_POST['schuss_23'] + $_POST['schuss_24'] + $_POST['schuss_25']);
					$gesamt += ($_POST['schuss_26'] + $_POST['schuss_27'] + $_POST['schuss_28'] + $_POST['schuss_29'] + $_POST['schuss_30']); 
					$site .= '<p>Sie haben erfolgreich folgende ergebnisse Eingegeben: <br/>';
					$site .= '<fieldset style="padding:10px;width:300px;border:2px outset gold;">';
					$site .= '<legend>Schütze :</legend>';
					$site .= '<table width="300px">';
					$site .= '<tr width="300px">';
					$site .= '<th colspan="3">Schütze :</th>';
					$site .= '<td colspan="7">'.$_POST['schuetze'].'</td>';
					$site .= '</tr><tr>';
					$site .= '<th colspan="10">Einzelschüsse : </th>';
					$site .= '</tr><tr>';
					$site .= '<td colspan="10"><table rules="all" width="100%">';
					$site .= '<tbody><tr>';
					$site .= '<th>1</th>';
					$site .= '<th>2</th>';
					$site .= '<th>3</th>';
					$site .= '<th>4</th>';
					$site .= '<th>5</th>';
					$site .= '<th>6</th>';
					$site .= '<th>7</th>';
					$site .= '<th>8</th>';
					$site .= '<th>9</th>';
					$site .= '<th>10</th>';
					$site .= '</tr><tr>';
					$site .= '<td>';
					if($_POST['schuss_1'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_1'].'</b></span>';
					}
					elseif($_POST['schuss_1'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_1'].'</b></span>';
					}
					elseif($_POST['schuss_1'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_1'].'</b></span>';
					}
					elseif($_POST['schuss_1'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_1'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_2'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_2'].'</b></span>';
					}
					elseif($_POST['schuss_2'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_2'].'</b></span>';
					}
					elseif($_POST['schuss_2'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_2'].'</b></span>';
					}
					elseif($_POST['schuss_2'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_2'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_3'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_3'].'</b></span>';
					}
					elseif($_POST['schuss_3'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_3'].'</b></span>';
					}
					elseif($_POST['schuss_3'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_3'].'</b></span>';
					}
					elseif($_POST['schuss_3'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_3'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_4'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_4'].'</b></span>';
					}
					elseif($_POST['schuss_4'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_4'].'</b></span>';
					}
					elseif($_POST['schuss_4'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_4'].'</b></span>';
					}
					elseif($_POST['schuss_4'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_4'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_5'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_5'].'</b></span>';
					}
					elseif($_POST['schuss_5'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_5'].'</b></span>';
					}
					elseif($_POST['schuss_5'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_5'].'</b></span>';
					}
					elseif($_POST['schuss_5'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_5'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_6'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_6'].'</b></span>';
					}
					elseif($_POST['schuss_6'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_6'].'</b></span>';
					}
					elseif($_POST['schuss_6'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_6'].'</b></span>';
					}
					elseif($_POST['schuss_6'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_6'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_7'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_7'].'</b></span>';
					}
					elseif($_POST['schuss_7'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_7'].'</b></span>';
					}
					elseif($_POST['schuss_7'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_7'].'</b></span>';
					}
					elseif($_POST['schuss_7'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_7'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_8'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_8'].'</b></span>';
					}
					elseif($_POST['schuss_8'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_8'].'</b></span>';
					}
					elseif($_POST['schuss_8'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_8'].'</b></span>';
					}
					elseif($_POST['schuss_8'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_8'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_9'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_9'].'</b></span>';
					}
					elseif($_POST['schuss_9'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_9'].'</b></span>';
					}
					elseif($_POST['schuss_9'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_9'].'</b></span>';
					}
					elseif($_POST['schuss_9'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_9'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_10'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_10'].'</b></span>';
					}
					elseif($_POST['schuss_10'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_10'].'</b></span>';
					}
					elseif($_POST['schuss_10'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_10'].'</b></span>';
					}
					elseif($_POST['schuss_10'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_10'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '</tr><tr>';
					$site .= '<th>11</th>';
					$site .= '<th>12</th>';
					$site .= '<th>13</th>';
					$site .= '<th>14</th>';
					$site .= '<th>15</th>';
					$site .= '<th>16</th>';
					$site .= '<th>17</th>';
					$site .= '<th>18</th>';
					$site .= '<th>19</th>';
					$site .= '<th>20</th>';
					$site .= '</tr><tr>';
					$site .= '<td>';
					if($_POST['schuss_11'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_11'].'</b></span>';
					}
					elseif($_POST['schuss_11'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_11'].'</b></span>';
					}
					elseif($_POST['schuss_11'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_11'].'</b></span>';
					}
					elseif($_POST['schuss_11'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_11'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_12'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_12'].'</b></span>';
					}
					elseif($_POST['schuss_12'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_12'].'</b></span>';
					}
					elseif($_POST['schuss_12'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_1'].'</b></span>';
					}
					elseif($_POST['schuss_12'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_12'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_13'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_13'].'</b></span>';
					}
					elseif($_POST['schuss_13'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_13'].'</b></span>';
					}
					elseif($_POST['schuss_13'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_13'].'</b></span>';
					}
					elseif($_POST['schuss_13'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_13'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_14'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_14'].'</b></span>';
					}
					elseif($_POST['schuss_14'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_14'].'</b></span>';
					}
					elseif($_POST['schuss_14'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_14'].'</b></span>';
					}
					elseif($_POST['schuss_14'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_14'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_15'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_15'].'</b></span>';
					}
					elseif($_POST['schuss_15'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_15'].'</b></span>';
					}
					elseif($_POST['schuss_15'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_15'].'</b></span>';
					}
					elseif($_POST['schuss_15'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_15'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_16'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_16'].'</b></span>';
					}
					elseif($_POST['schuss_16'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_16'].'</b></span>';
					}
					elseif($_POST['schuss_16'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_16'].'</b></span>';
					}
					elseif($_POST['schuss_16'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_16'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_17'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_17'].'</b></span>';
					}
					elseif($_POST['schuss_17'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_17'].'</b></span>';
					}
					elseif($_POST['schuss_17'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_17'].'</b></span>';
					}
					elseif($_POST['schuss_17'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_17'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_18'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_18'].'</b></span>';
					}
					elseif($_POST['schuss_18'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_18'].'</b></span>';
					}
					elseif($_POST['schuss_18'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_18'].'</b></span>';
					}
					elseif($_POST['schuss_18'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_18'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_19'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_19'].'</b></span>';
					}
					elseif($_POST['schuss_19'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_19'].'</b></span>';
					}
					elseif($_POST['schuss_19'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_19'].'</b></span>';
					}
					elseif($_POST['schuss_19'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_19'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_20'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_20'].'</b></span>';
					}
					elseif($_POST['schuss_20'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_20'].'</b></span>';
					}
					elseif($_POST['schuss_20'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_20'].'</b></span>';
					}
					elseif($_POST['schuss_20'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_20'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '</tr><tr>';
					$site .= '<th>21</th>';
					$site .= '<th>22</th>';
					$site .= '<th>23</th>';
					$site .= '<th>24</th>';
					$site .= '<th>25</th>';
					$site .= '<th>26</th>';
					$site .= '<th>27</th>';
					$site .= '<th>28</th>';
					$site .= '<th>29</th>';
					$site .= '<th>30</th>';
					$site .= '</tr><tr>';
					$site .= '<td>';
					if($_POST['schuss_21'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_21'].'</b></span>';
					}
					elseif($_POST['schuss_21'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_21'].'</b></span>';
					}
					elseif($_POST['schuss_21'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_21'].'</b></span>';
					}
					elseif($_POST['schuss_21'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_21'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_22'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_22'].'</b></span>';
					}
					elseif($_POST['schuss_22'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_22'].'</b></span>';
					}
					elseif($_POST['schuss_22'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_22'].'</b></span>';
					}
					elseif($_POST['schuss_22'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_22'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_23'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_23'].'</b></span>';
					}
					elseif($_POST['schuss_23'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_23'].'</b></span>';
					}
					elseif($_POST['schuss_23'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_23'].'</b></span>';
					}
					elseif($_POST['schuss_23'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_23'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_24'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_24'].'</b></span>';
					}
					elseif($_POST['schuss_24'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_24'].'</b></span>';
					}
					elseif($_POST['schuss_24'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_24'].'</b></span>';
					}
					elseif($_POST['schuss_24'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_24'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_25'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_25'].'</b></span>';
					}
					elseif($_POST['schuss_25'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_25'].'</b></span>';
					}
					elseif($_POST['schuss_25'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_25'].'</b></span>';
					}
					elseif($_POST['schuss_25'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_25'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_26'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_26'].'</b></span>';
					}
					elseif($_POST['schuss_26'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_26'].'</b></span>';
					}
					elseif($_POST['schuss_26'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_26'].'</b></span>';
					}
					elseif($_POST['schuss_26'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_26'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_27'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_27'].'</b></span>';
					}
					elseif($_POST['schuss_27'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_27'].'</b></span>';
					}
					elseif($_POST['schuss_27'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_27'].'</b></span>';
					}
					elseif($_POST['schuss_27'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_27'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_28'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_28'].'</b></span>';
					}
					elseif($_POST['schuss_28'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_28'].'</b></span>';
					}
					elseif($_POST['schuss_28'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_28'].'</b></span>';
					}
					elseif($_POST['schuss_28'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_28'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_29'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_29'].'</b></span>';
					}
					elseif($_POST['schuss_29'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_29'].'</b></span>';
					}
					elseif($_POST['schuss_29'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_29'].'</b></span>';
					}
					elseif($_POST['schuss_29'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_29'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '<td>';
					if($_POST['schuss_30'] == 10){
						$site .= '<span style="color:gold;"><b>'.$_POST['schuss_30'].'</b></span>';
					}
					elseif($_POST['schuss_30'] == 9){
						$site .= '<span style="color:silver;"><b>'.$_POST['schuss_30'].'</b></span>';
					}
					elseif($_POST['schuss_30'] == 8){
						$site .= '<span style="color:bronze;"><b>'.$_POST['schuss_30'].'</b></span>';
					}
					elseif($_POST['schuss_30'] < 8){
						$site .= '<span style="color:red;"><b>'.$_POST['schuss_30'].'</b></span>';
					}
					$site .= '</td>';
					$site .= '</tr></tbody></table></td><tr>';
					$site .= '<th colspan="8">Gesamt: </th>';
					$site .= '<td colspan="2">';
					if($gesamt >= 295){
						$site .= '<span style="color:gold;"><b>'.$gesamt.'</b></span>';
					}
					elseif ($gesamt < 295 && $gesamt >= 285) {
						$site .= '<span style="color:silver;"><b>'.$gesamt.'</b></span>';
					}
					elseif ($gesamt < 285 && $gesamt >= 275) {
						$site .= '<span style="color:bronze;"><b>'.$gesamt.'</b></span>';
					}
					else{
						$site .= '<span style="color:green;"><b>'.$gesamt.'</b></span>';
					}
					$site .= '</td></tr></table>';
					$site .= '</fieldset></p>';
					break;
			case 12:
					print_r($_POST); 
					break;
			default:
					$site .= '<input type="hidden" name="menue_a" id="menue_za" value="23">';
					$site .= '<input type="hidden" name="rounds_a" id="rounds_za" value="5">';
					$site .= '<input type="hidden" name="rounds_a" id="wahl_aa" value="1">';
					$site .= '<button class="enter_team" name="enter_team" onClick="javascript:setRequest(91);">Training Eingeben</button>';
					$site .= '<input type="hidden" name="menue_a" id="menue_zb" value="23">';
					$site .= '<input type="hidden" name="rounds_a" id="rounds_zb" value="5">';
					$site .= '<input type="hidden" name="rounds_a" id="wahl_ab" value="2">';
					$site .= '<button class="enter_team" name="enter_team" onClick="javascript:setRequest(92);">Wettkampf eingeben</button>';
					break;
		}
		return $site;
	}
	
	
	protected function setTeams(){
		if($_POST['step'] != 1){
			if($_POST['edit'] != 1){
				$site .= '<label for="team_name">Team Name :</label>';
				$site .= '<input type="text" name="team_name" id="team_name" size="30" max-size="30"><br/>';
				$site .= '<input type="hidden" name="rounds_a" id="rounds_f" value="1">';
				$site .= '<input type="hidden" name="edit_a"  id="step_a" value="1">';
				$site .= '<input type="hidden" name="edit_a"  id="edit_f" value="false">';
				$site .= '<input type="hidden" name="menue_a" id="menue_f" value="23">';
				$site .= '<button class="enter_team" name="enter_team" onClick="javascript:setRequest(6);">Team Eintragen</button>';
				return $site;
			}
			else{
				$site .= '<label for="team_name">Team Name :</label>';
				$site .= '<input type="text" name="team_name" id="team_name" size="30" max-size="30"><br/>';
				$site .= '<input type="hidden" name="rounds_a" id="rounds_g" value="1">';
				$site .= '<input type="hidden" name="edit_a"  id="step_b" value="1">';
				$site .= '<input type="hidden" name="menue_a" id="menue_g" value="23">';
				$site .= '<input type="hidden" name="edit_a"  id="edit_g" value="1">';
				$site .= '<input type="hidden" name="team_id" id="team_id_b" value="'.$_POST['team_id'].'">';
				$site .= '<button class="enter_team" name="enter_team" onClick="javascript:setRequest(7);">Team Eintragen</button>';
				return $site;
			}
		}
		else{
			if($_POST['edit'] != 1){
				$GLOBALS['DB']->query("INSERT INTO ".TEAMS." SET team_name='".$_POST['t_n']."'");
				$site = "Sie haben erfolgreich folgendes Team eingetragen : ".$_POST['t_n'];
				return $site;
			}
			else{
				$GLOBALS['DB']->query("UPDATE ".TEAMS." SET team_name='".$_POST['t_n']."' WHERE id='".$_POST['t_i']."'");
				$site = "Sie haben erfolgreich folgendes Team bearbeitet : ".$_POST['t_n'];
				return $site;
			}
		}
	}
	
	protected function getTeams(){
		$site .= "<table rules='all'>";
		$site .= "<tr>";
		$site .= "<th>Team Name</th>";
		$site .= "</tr>";
		$result = $GLOBALS['DB']->query("SELECT * FROM ".TEAMS."");
		foreach($result as $data){
			$site .= '<tr>';
			$site .= '<td>'.$data['team_name'].'</td>';
			$site .= '</tr>';
		}
		$site .= '</table>';
		return $site;
	}
	
	protected function setTermin(){
		if($_POST['step'] != 1){
			$site .= '<fieldset style="padding:10px;width:300px;border:2px outset gold;">';
			$site .= '<legend>Datum</legend>';
			$site .= '<table width="300px">';
			$site .= '<tr width="300px">';
			$site .= '<th><label for="day">Tag des Monats :</label></th><td><input type="text" name="day" id="day" size="2" maxLength="2"></td>';
			$site .= '</tr><tr>';
			$site .= '<th><label for="month">Monat :</label></th><td><input type="text" name="month" id="month" size="2" maxLength="2"></td>';
			$site .= '</tr><tr>';
			$site .= '<th><label for="year">Jahr :</label></th><td><input type="text" name="year" id="year" size="2" maxLength="2"></td>';
			$site .= '</tr></table>';
			$site .= '</fieldset>';
			$site .= '<fieldset style="padding:10px;width:300px;border:2px outset gold;">';
			$site .= '<legend>Uhrzeit</legend>';
			$site .= '<table width="300px">';
			$site .= '<tr width="300px">';
			$site .= '<th><label for="hour">Stunde :</label></th><td><input type="text" name="hour" id="hour" size="2" maxLength="2"></td>';
			$site .= '</tr><tr>';
			$site .= '<th><label for="minute">Minuten :</label></th><td><input type="text" name="minute" id="minute" size="2" maxLength="2"></td>';
			$site .= '</tr></table>';
			$site .= '</fieldset>';
			$site .= '<fieldset style="padding:10px;width:300px;border:2px outset gold;">';
			$site .= '<legend>Manschaften</legend>';
			$site .= '<table width="300px">';
			$site .= '<tr width="300px">';
			$site .= '<th><label for="heim">Heimmanschaft :</label></th><td><select name="heim" id="heim" size="1">';
			$result = $GLOBALS['DB']->query("SELECT * FROM ".TEAMS."");
			foreach($result as $data){
				$site .= '<option>'.$data['team_name'].'</option>';
			}
			$site .= '</select></td></tr>';
			$site .= '<tr><th><label for="gast">Gastmanschaft :</label></th><td><select name="gast" id="gast" size="1">';
			$result = $GLOBALS['DB']->query("SELECT * FROM ".TEAMS."");
			foreach($result as $data){
				$site .= '<option>'.$data['team_name'].'</option>';
			}
			$site .= '</select></td>';
			$site .= '</tr><tr>';
			$site .= '<th colspan="2"><input type="hidden" name="edit_a"  id="step_c" value="1">';
			$site .= '<input type="hidden" name="menue_a" id="menue_h" value="23">';
			$site .= '<input type="hidden" name="rounds_a" id="rounds" value="3">';
			$site .= '<button class="enter_termin" name="enter_termin" onClick="javascript:setRequest(8);">Termin Eintragen</button></th>';
			$site .= '</tr></table>';
			$site .= '</fieldset>';
			return $site;
		}
		else{
			$timestr = $_POST['d_m'].'/'.$_POST['d_d'].'/20'.$_POST['d_y'].' '.$_POST['d_h'].':'.$_POST['d_mi'];
			$result = $GLOBALS['DB']->query("SELECT (id) FROM ".TEAMS." WHERE team_name='".$_POST['heim']."'");
			$help_a ='';
			$help_b = '';
			foreach($result as $data){
				$help_a = $data['id'];
			}
			$result = $GLOBALS['DB']->query("SELECT (id) FROM ".TEAMS." WHERE team_name='".$_POST['gast']."'");
			foreach($result as $data){
				$help_b = $data['id'];
			}
			$GLOBALS['DB']->query("INSERT INTO ".TERMIN." SET datum='".strtotime($timestr)."', heim='".$help_a."', gast='".$help_b."'");
			return "Sie haben erfolgreich einen Wettkampf eingetragen!";
		}
	}
	
	protected function getTermin(){
		$result = $GLOBALS['DB']->query("SELECT * FROM ".TERMIN."");
		$help_a = '';
		$help_b = '';
		$c = 0;
		foreach($result as $data){
			$c ++;
			$SQL = $GLOBALS['DB']->query("SELECT (team_name) FROM ".TEAMS." WHERE id='".$data['heim']."'");
			foreach($SQL as $data_help){
				$help_a = $data_help['team_name'];
			}
			$sql = $GLOBALS['DB']->query("SELECT (team_name) FROM ".TEAMS." WHERE id='".$data['gast']."'");
			foreach($sql as $Data_help){
				$help_b = $Data_help['team_name'];
			}
			time() >$data['datum'] ? $help_c = PROJECT_HTTP_ROOT.'/images/true.png' : $help_c = PROJECT_HTTP_ROOT.'/images/false.png';
			$site .= '<fieldset style="padding:10px;width:500px;border:2px outset gold;">';
			$site .= '<legend>Runden Wettkämpfe Runde '.$c.'</legend>';
			$site .= '<table width="500px">';
			$site .= '<tr width="500px">';
			$site .= '<th width="20%">Wettkampf Nr.</th>';
			$site .= '<th width="20%">Datum</th>';
			$site .= '<th width="20%">Heimmanschaft</th>';
			$site .= '<th width="20%">Gastmanschaft</th>';
			$site .= '<th width="20%">Abgeschlossen</th>';
			$site .= '</tr><tr>';
			$site .= '<td>'.$data['wettNr'].'</td>';
			$site .= '<td>'.date("d.m.Y H:i:s",$data['datum']).'</td>';
			$site .= '<td>'.$help_a.'</td>';
			$site .= '<td>'.$help_b.'</td>';
			$site .= '<td><img src="'.$help_c.'"></img></td>';
			$site .= '</tr></table>';
			$site .= '</fieldset>';

		}
		return $site;
	}
	
	protected function main(){
		$site .= '<script type="text/javascript">
  <!--
	var request = false;

	// Request senden
	function setRequest(id) {
		// Request erzeugen
		if (window.XMLHttpRequest) {
			request = new XMLHttpRequest(); // Mozilla, Safari, Opera
		} else if (window.ActiveXObject) {
			try {
				request = new ActiveXObject(\'Msxml2.XMLHTTPß\'); // IE 5
			} catch (e) {
				try {
					request = new ActiveXObject(\'Microsoft.XMLHTTP\'); // IE 6
				} catch (e) {}
			}
		}

		// überprüfen, ob Request erzeugt wurde
		if (!request) {
			alert("Kann keine XMLHTTP-Instanz erzeugen");
			return false;
		} else {
			var url = "ajax.php";
			// Name auslesen
			switch (id) {
				case 1 : var value = document.getElementById(\'menue_a\').value;
						 var value_a = document.getElementById(\'rounds_a\').value;
						 var value_b = document.getElementById(\'edit_a\').value;
						 var req = 2;
						 break;
				case 2 : var value = document.getElementById(\'menue_b\').value;
						 var value_a = document.getElementById(\'rounds_b\').value;
						 var value_b = document.getElementById(\'edit_b\').value;
						 var req = 2;
						 break;
				case 3 : var value = document.getElementById(\'menue_c\').value;
						 var value_a = document.getElementById(\'rounds_c\').value;
						 var value_b = document.getElementById(\'edit_c\').value;
						 var req = 2;
						 break;
				case 4 : var value = document.getElementById(\'menue_d\').value;
						 var value_a = document.getElementById(\'rounds_d\').value;
						 var value_b = document.getElementById(\'edit_d\').value;
						 var req = 2;
						 break;
				case 5 : var value = document.getElementById(\'menue_e\').value;
						 var value_a = document.getElementById(\'rounds_e\').value;
						 var value_b = document.getElementById(\'edit_e\').value;
						 var value_c = document.getElementById(\'team_id_a\').value;
						 var req = 1;
						 break;
				case 6 : var value = document.getElementById(\'menue_f\').value;
						 var value_a = document.getElementById(\'rounds_f\').value;
						 var value_d = document.getElementById(\'edit_f\').value;
						 var value_b = document.getElementById(\'step_a\').value;
						 var value_c = document.getElementById(\'team_name\').value;
						 var req = 3;
						 break;
				case 7 : var value = document.getElementById(\'menue_g\').value;
						 var value_a = document.getElementById(\'rounds_g\').value;
						 var value_d = document.getElementById(\'edit_g\').value;
						 var value_b = document.getElementById(\'step_b\').value;
						 var value_c = document.getElementById(\'team_name\').value;
						 var value_e = document.getElementById(\'team_id_b\').value;
						 var req = 4;
						 break;
				case 8 : var value = document.getElementById(\'menue_h\').value;
						 var value_a = document.getElementById(\'rounds\').value;
						 var value_b = document.getElementById(\'step_c\').value;
						 var value_c = document.getElementById(\'day\').value;
						 var value_d = document.getElementById(\'month\').value;
						 var value_e = document.getElementById(\'year\').value;
						 var value_f = document.getElementById(\'hour\').value;
						 var value_g = document.getElementById(\'minute\').value;
						 var value_h = document.getElementById(\'heim\').value;
						 var value_i = document.getElementById(\'gast\').value;
						 var req = 5;
						 break;
				case 9 : var value = document.getElementById(\'menue_z\').value;
						 var value_a = document.getElementById(\'rounds_z\').value;
						 var value_b = document.getElementById(\'wahl_a\').value;
						 var req = 6;
						 break;
				case 91 : var value = document.getElementById(\'menue_za\').value;
						 var value_a = document.getElementById(\'rounds_za\').value;
						 var value_b = document.getElementById(\'wahl_aa\').value;
						 var req = 6;
						 break;
				case 92 : var value = document.getElementById(\'menue_zb\').value;
						 var value_a = document.getElementById(\'rounds_zb\').value;
						 var value_b = document.getElementById(\'wahl_ab\').value;
						 var req = 6;
						 break;
				case 93	: var value1 = document.getElementById(\'schuss1\').value;
						  var value2 = document.getElementById(\'schuss2\').value;
						  var value3 = document.getElementById(\'schuss3\').value;
						  var value4 = document.getElementById(\'schuss4\').value;
						  var value5 = document.getElementById(\'schuss5\').value;
						  var value6 = document.getElementById(\'schuss6\').value;
						  var value7 = document.getElementById(\'schuss7\').value;
						  var value8 = document.getElementById(\'schuss8\').value;
						  var value9 = document.getElementById(\'schuss9\').value;
						  var value10 = document.getElementById(\'schuss10\').value;
						  var value11 = document.getElementById(\'schuss11\').value;
						  var value12 = document.getElementById(\'schuss12\').value;
						  var value13 = document.getElementById(\'schuss13\').value;
						  var value14 = document.getElementById(\'schuss14\').value;
						  var value15 = document.getElementById(\'schuss15\').value;
						  var value16 = document.getElementById(\'schuss16\').value;
						  var value17 = document.getElementById(\'schuss17\').value;
						  var value18 = document.getElementById(\'schuss18\').value;
						  var value19 = document.getElementById(\'schuss19\').value;
						  var value20 = document.getElementById(\'schuss20\').value;
						  var value21 = document.getElementById(\'schuss21\').value;
						  var value22 = document.getElementById(\'schuss22\').value;
						  var value23 = document.getElementById(\'schuss23\').value;
						  var value24 = document.getElementById(\'schuss24\').value;
						  var value25 = document.getElementById(\'schuss25\').value;
						  var value26 = document.getElementById(\'schuss26\').value;
						  var value27 = document.getElementById(\'schuss27\').value;
						  var value28 = document.getElementById(\'schuss28\').value;
						  var value29 = document.getElementById(\'schuss29\').value;
						  var value30 = document.getElementById(\'schuss30\').value;
						  var schuetze = document.getElementById(\'schuetze\').value;
						  var value = document.getElementById(\'menue_zc\').value;
						  var value_a = document.getElementById(\'rounds_zc\').value;
						  var value_b = document.getElementById(\'wahl_ac\').value;
						  var req = 7;
						  break;
				case 94 : var value = document.getElementById(\'menue_zd\').value;
						 var value_a = document.getElementById(\'rounds_zd\').value;
						 var value_b = document.getElementById(\'wahl_ad\').value;
						 var nr = document.getElementById(\'nr\').value;
						 var heim_pa = document.getElementById(\'heim_pa\').value;
						 var heim_pb = document.getElementById(\'heim_pb\').value;
						 var heim_pc = document.getElementById(\'heim_pc\').value;
						 var heim_pd = document.getElementById(\'heim_pd\').value;
						 var gast_pa = document.getElementById(\'gast_pa\').value;
						 var gast_pb = document.getElementById(\'gast_pb\').value;
						 var gast_pc = document.getElementById(\'gast_pc\').value;
						 var gast_pd = document.getElementById(\'gast_pd\').value;
						 var gast_gs = document.getElementById(\'gast_gs\').value;
						 var heim_gs = document.getElementById(\'heim_gs\').value;
						 var req = 8;
						 break;
			}
			// Request öffnen
			request.open(\'post\', url, true);
			// Requestheader senden
			request.setRequestHeader(\'Content-Type\', \'application/x-www-form-urlencoded\');
			// Request senden
			switch (req){
				case 1 : request.send(\'menue=\'+value+\'&rounds=\'+value_a+\'&edit=\'+value_b+\'&team_id=\'+value_c);
						 break;
				case 2 : request.send(\'menue=\'+value+\'&rounds=\'+value_a+\'&edit=\'+value_b);
						 break;
				case 3 : request.send(\'menue=\'+value+\'&rounds=\'+value_a+\'&step=\'+value_b+\'&t_n=\'+value_c);
						 break;
				case 4 : request.send(\'menue=\'+value+\'&rounds=\'+value_a+\'&step=\'+value_b+\'&t_n=\'+value_c+\'&t_i=\'+value_e+\'&edit=\'+value_d);
						 break;
				case 5 : request.send(\'menue=\'+value+\'&rounds=\'+value_a+\'&step=\'+value_b+\'&d_d=\'+value_c+\'&d_m=\'+value_d+\'&d_y=\'+value_e+\'&d_h=\'+value_f+\'&d_mi=\'+value_g+\'&heim=\'+value_h+\'&gast=\'+value_i);
						 break;
				case 6 : request.send(\'menue=\'+value+\'&rounds=\'+value_a+\'&wahl=\'+value_b);
						 break;
				case 7 : request.send(\'menue=\'+value+\'&rounds=\'+value_a+\'&wahl=\'+value_b+\'&schuss_1=\'+value1+\'&schuss_2=\'+value2+\'&schuss_3=\'+value3+\'&schuss_4=\'+value4+\'&schuss_5=\'+value5+\'&schuss_6=\'+value6+\'&schuss_7=\'+value7+\'&schuss_8=\'+value8+\'&schuss_9=\'+value9+\'&schuss_10=\'+value10+\'&schuss_11=\'+value11+\'&schuss_12=\'+value12+\'&schuss_13=\'+value13+\'&schuss_14=\'+value14+\'&schuss_15=\'+value15+\'&schuss_16=\'+value16+\'&schuss_17=\'+value17+\'&schuss_18=\'+value18+\'&schuss_19=\'+value19+\'&schuss_20=\'+value20+\'&schuss_21=\'+value21+\'&schuss_22=\'+value22+\'&schuss_23=\'+value23+\'&schuss_24=\'+value24+\'&schuss_25=\'+value25+\'&schuss_26=\'+value26+\'&schuss_27=\'+value27+\'&schuss_28=\'+value28+\'&schuss_29=\'+value29+\'&schuss_30=\'+value30+\'&schuetze=\'+schuetze);
						 break;
				case 8 : request.send(\'menue=\'+value+\'&rounds=\'+value_a+\'&wahl=\'+value_b+\'&nr=\'+nr+\'&heim_1=\'+heim_pa+\'&heim_2=\'+heim_pb+\'&heim_3=\'+heim_pc+\'&heim_4=\'+heim_pd+\'&gast_1=\'+gast_pa+\'&gast_2=\'+gast_pb+\'&gast_3=\'+gast_pc+\'&gast_4=\'+gast_pd);
						 break;
			}
			// Request auswerten
			request.onreadystatechange = interpretRequest;
		}
	}

	// Request auswerten
	function interpretRequest() {
		switch (request.readyState) {
			// wenn der readyState 4 und der request.status 200 ist, dann ist alles korrekt gelaufen
			case 4:
				if (request.status != 200) {
					alert("Der Request wurde abgeschlossen, ist aber nicht OK\nFehler:"+request.status);
				} else {
					var content = request.responseText;
					// den Inhalt des Requests in das <div> schreiben
					document.getElementById(\'content\').innerHTML = content;
				}
				break;
			default:
				break;
		}
	}
  //-->
  </script>';
		$site .= '<input type="hidden" name="menue_a" id="menue_a" value="23">';
		$site .= '<input type="hidden" name="rounds_a" id="rounds_a" value="1">';
		$site .= '<input type="hidden" name="edit_a"  id="edit_a" value="false">';
		$site .= '<button class="enter_team" name="enter_team" onClick="javascript:setRequest(1);">Team Eintragen</button>';
		$site .= '<input type="hidden" name="menue_a" id="menue_b" value="23">';
		$site .= '<input type="hidden" name="rounds_a" id="rounds_b" value="2">';
		$site .= '<input type="hidden" name="edit_a"  id="edit_b" value="false">';
		$site .= '<button class="enter_team" name="enter_team" onClick="javascript:setRequest(2);">Teams Anzeigen</button>';
		$site .= '<input type="hidden" name="menue_a" id="menue_c" value="23">';
		$site .= '<input type="hidden" name="rounds_a" id="rounds_c" value="3">';
		$site .= '<input type="hidden" name="edit_a"  id="edit_c" value="false">';
		$site .= '<button class="enter_team" name="enter_team" onClick="javascript:setRequest(3);">Termin eingeben</button>';
		$site .= '<input type="hidden" name="menue_a" id="menue_d" value="23">';
		$site .= '<input type="hidden" name="rounds_a" id="rounds_d" value="4">';
		$site .= '<input type="hidden" name="edit_a"  id="edit_d" value="false">';
		$site .= '<button class="enter_team" name="enter_team" onClick="javascript:setRequest(4);">Termine Anzeigen</button>';
		$site .= '<input type="hidden" name="menue_a" id="menue_z" value="23">';
		$site .= '<input type="hidden" name="rounds_a" id="rounds_z" value="5">';
		$site .= '<input type="hidden" name="rounds_a" id="wahl_a" value="0">';
		$site .= '<button class="enter_team" name="enter_team" onClick="javascript:setRequest(9);">Ergebnisse eingeben</button>';
		$site .= '<input type="hidden" name="menue_a" id="menue_d" value="23">';
		$site .= '<input type="hidden" name="rounds_a" id="rounds_d" value="4">';
		$site .= '<input type="hidden" name="edit_a"  id="edit_d" value="false">';
		$site .= '<button class="enter_team" name="enter_team" onClick="javascript:setRequest(4);">Ergebnisse Anzeigen</button>';
		return $site;
	}
	
}
?>