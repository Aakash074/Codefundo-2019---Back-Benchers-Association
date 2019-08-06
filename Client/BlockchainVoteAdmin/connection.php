<?php
define("HOST",'azure wali site');
define("PASSWORD",'uska pasword');
define("USERNAME","wo username");
define("DB","blockchainvoting");
$connection=@mysql_connect(HOST,USERNAME,PASSWORD,DB);
if(!$connection)
{
	die("NOT Connected....");
}
else
{
//echo"Connected"
	
}
mysql_select_db(DB) or die(mysql_error());
?>
