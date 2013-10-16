<?php
namespace SYSTEM;
class HTML{
	public static function printHead(){
		header('Content-Type: text/html; charset=UTF-8');
		$data  = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">';
		$data .= '<html>';
		$data .= '<head>';
		$data .= '<title>'.HTML_TITLE.'</title>';
		$data .= '<meta http-equiv="content-type" content="text/html;charset=UTF-8">'."\n";
		$data .= '<link rel="stylesheet" type="text/css" href="'.PROJECT_HTTP_ROOT.'/inc/css/main.css">';
		$data .= '<script src="'.PROJECT_HTTP_ROOT.'/inc/js/jquery.js" type="text/javascript"></script>';
		$data .= '<script src="'.PROJECT_HTTP_ROOT.'/inc/js/default.js" type="text/javascript"></script>';
		return $data;
	}
	
	public static function printBody($css = null){
		$data  = '</head>';
		$data .= '<body';
		if($css != null){
			$data .= ' style="'.$css.'"';
		}
		$data .= '>';
		return $data;
	}
	
	public static function printFoot(){
		$data = "</body></html>";
		return $data;
	}
}
?>