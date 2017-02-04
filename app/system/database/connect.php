<?php
try {
	 $db_conf = @parse_ini_file('DB_CONFIG.ini');
	 if(!$db_conf)
	 	print "DB_CONFIG.ini dosyası açılamadı.<br>";
     $db = new PDO("mysql:host={$db_conf["host"]};dbname={$db_conf["dbname"]}", "{$db_conf["user"]}", "{$db_conf["pass"]}");
} catch ( PDOException $e ){
     print $e->getMessage();
}
?>