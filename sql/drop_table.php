<?php
include("../../../engine/start.php");

elgg_admin_gatekeeper();

$dbprefix = elgg_get_config('dbprefix');

mysql_query("DROP TABLE IF EXISTS `".$dbprefix."company_entity`") or die('Invalid query: ' . mysql_error());
mysql_query("DROP TABLE IF EXISTS `".$dbprefix."cv_rating`") or die('Invalid query: ' . mysql_error());
mysql_query("DROP TABLE IF EXISTS `".$dbprefix."language_entity`") or die('Invalid query: ' . mysql_error());
mysql_query("DROP TABLE IF EXISTS `".$dbprefix."QS12`") or die('Invalid query: ' . mysql_error());
mysql_query("DROP TABLE IF EXISTS `".$dbprefix."university_entity`") or die('Invalid query: ' . mysql_error());

Echo "Table Dropped<br><br>";
?>