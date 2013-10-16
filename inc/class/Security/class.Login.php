<?php
namespace Login;

class Form{
	
	public function show($what = 0){
		switch ($what){
			case 1 :
					$this->printRegisterForm();
					break;
			default : echo $this->printLoginForm();
			break;
		}
	}
	
	protected function printLoginForm(){	
		$site = '<fieldset style="padding:2px;width:180px;border:1px solid steelblue;">';
		$site .= '<legend>Login</legend>';
		$site .= '<form name="login" action="">';
		$site .= 'Login:<br />';
		$site .= '<input type="text" class="standardField" name="login" size="30" maxLength="50"><br/>';
		$site .= 'Password:<br/>';
		$site .= '<input type="password" class="standardField" name="pass" size="30" maxlength="30"><br/>';
		$site .= '<input type="hidden" name="menue" value="10">';
		$site .= '<input type="submit" value="Anmelden"  name="submit" id="submit_btn" class="button" onSubmit="return false;">';
		$site .= '<input type="reset" onfocus="blur();" class="standardSubmit" name="doReset" value="Reset"><br/>';
		$site .= '</form>';
		$site .= '</fieldset>';
		return $site;
	}
	
	protected function printRegisterForm($checkScript = null){
		$site  = '<fieldset style="padding:2px;width:180px;border:1px solid steelblue;">';
		$site .= '<legend>Login</legend>';
		$site .= '<form id="noSpaces" action="'.$checkScript.'" method="post">';
		$site .= 'Benutzername:<br />';
		$site .= '<input type="text" class="standardField" name="login" size="30" maxLength="50"><br/>';
		$site .= 'Password:<br/>';
		$site .= '<input type="text" class="standardField" name="passA" size="30" maxlength="30"><br/>';
		$site .= 'Password wiederhohlen:<br/>';
		$site .= '<input type="password" class="standardField" name="passB" size="30" maxlength="30"><br/>';
		$site .= 'Email-Addresse:<br/>';
		$site .= '<input type="text" class="standardField" name="email" size="30" maxLength="50"><br/>';
		$site .= '<input type="hidden" name="menue" value="10">';
		$site .= '<input type="submit" onfocus="blur();" class="standardSubmit" name="doLogin" value="Regestrieren">';
		$site .= '<input type="reset" onfocus="blur();" class="standardSubmit" name="doReset" value="Reset">';
		$site .= '</form>';
		$site .= '</fieldset>';
		return $site;
	}
	
}
?>