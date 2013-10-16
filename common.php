<?php
include(__DIR__.'/paths.php');
require_once PROJECT_DOCUMENT_ROOT.'/settings.php';

require_once PROJECT_DOCUMENT_ROOT.'/inc/includeAllClasses.php';


if(!isset($GLOBALS['DB'])){
	$DB = new System\Database\MySQL(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);	
}

?>