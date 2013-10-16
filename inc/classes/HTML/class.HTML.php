<?php
namespace SYSTEM;
class HTML{
	public static function printHead(){
		header('Content-Type: text/html; charset=UTF-8');
		echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">';
		echo '<html>';
		echo '<head>';
		echo '<title>'.HTML_TITLE.'</title>';
		echo '<meta http-equiv="content-type" content="text/html;charset=UTF-8">'."\n";
		echo '<link rel="stylesheet" type="text/css" href="'.PROJECT_HTTP_ROOT.'/inc/css/main.css.php">';
		echo '<script src="'.PROJECT_HTTP_ROOT.'/inc/js/jquery.js" type="text/javascript"></script>';
		echo '<script src="'.PROJECT_HTTP_ROOT.'/inc/js/default.js" type="text/javascript"></script>';
	}
	
	public static function printBody($css = null){
		echo '</head>';
		echo '<body';
		if($css != null){
			echo ' style="'.$css.'"';
		}
		echo '>';
	}
	
	public static function printFoot(){
		echo "</body></html>";
	}
}
?>