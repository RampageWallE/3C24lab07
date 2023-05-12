<?php 
$contrasena = "AVNS_MQt7Ofh9QJaLWV5yK5Y";
$usuario = "doadmin";
$nombre_bd = "LAB08";
$host= "db-mysql-nyc1-79367-do-user-14090344-0.b.db.ondigitalocean.com";
	
try {
	$bd = new PDO (
		'mysql:host='.$host.';
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>