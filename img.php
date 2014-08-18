<?php
### Datenbankverbindung
$db_connect	= mysql_pconnect('', '', '');
$db	= mysql_select_db('', $db_connect);

### Daten sammeln
$page = isset($_GET['page']) ? $_GET['page'] : '';
$ref = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
$domain = str_replace('http://', '', $page);
$domain = str_replace('www.', '', $domain);
$domain = substr($domain, 0, strpos($domain, '/'));
$datetime = date('Y-m-d H:i:s');
$browser = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
$domainlookup = isset($_GET['dlt']) ? $_GET['dlt'] : NULL;
$connection = isset($_GET['ct']) ? $_GET['ct'] : NULL;
$waiting = isset($_GET['wt']) ? $_GET['wt'] : NULL;
$transfer = isset($_GET['tt']) ? $_GET['tt'] : NULL;
$dombuilding = isset($_GET['dt']) ? $_GET['dt'] : NULL;
$onloadevents = isset($_GET['let']) ? $_GET['let'] : NULL;
$sum = isset($_GET['sum']) ? $_GET['sum'] : NULL;
$originalstring = http_build_query($_GET);

### Datenbankeintrag
$insertSpeedtrackingString = '
INSERT INTO tbl_speedtracking
(		
	domain, 
	page, 
	datetime, 
	browser, 
	domainlookup, 
	connection,
	waiting,
	transfer,
	dombuilding,
	onloadevents,
	sum,
	referer,
	originalstring
)
VALUES
(
	"'.$domain.'",
	"'.$page.'",
	"'.$datetime.'",
	"'.$browser.'",
	"'.$domainlookup.'",
	"'.$connection.'",
	"'.$waiting.'",
	"'.$transfer.'",
	"'.$dombuilding.'",
	"'.$onloadevents.'",
	"'.$sum.'",
	"'.$ref.'",
	"'.$originalstring.'"
)';
$insertSpeedtrackingQuery	= mysql_query($insertSpeedtrackingString);
mysql_close();

### leeres Bild erstellen und ausliefern
header('Content-Type: image/png');
$image = @imagecreate(1, 1);
$background_color = @imagecolorallocate($image, 255, 255, 255);
@imagepng($image) or die('imagepng error!');
@imagedestroy($image);