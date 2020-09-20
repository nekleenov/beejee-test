<?php
/*
=========================================
Autor:  Nekleenov M.Y
E-Mail: m.nekleenov@yandex.com
=========================================
*/

@session_start();
ob_start();

@error_reporting ( E_ALL ^ E_NOTICE );
@ini_set ( 'display_errors', true );
@ini_set ( 'html_errors', false );
@ini_set ( 'error_reporting', E_ALL ^ E_NOTICE );

require_once "application/init.php";

?>