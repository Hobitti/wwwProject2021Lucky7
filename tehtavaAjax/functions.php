<?php
 function connect() {
	$connection=parse_ini_file(".ht_dbase_inifile.ini");

	$pdo = new PDO("mysql:host=localhost;dbname=".$connection["dbname"].",".$connection["username"].",".$connection["password"]);
	return $pdo;
 }
 function hasher($sana) {
	return md5($sana);
 }
 function kirjaudu($user,$pass) {
	$pass=hasher($pass);
	$stmt = connect()->prepare("SELECT COUNT(Id) FROM Lucky7_Kayttaja WHERE Nimi=? AND Salasana=?");
	$stmt->execute([$user,$pass]); 
	$user = $stmt->fetch();
	if($user>0) return true;
	else return false;
 }
 function rekisteroidy($user,$pass){
	$pass=hasher($pass);
	$sql = "INSERT INTO Lucky7_Kayttaja (nimi, snimi) VALUES (?,?)";
	$stmt= connect()->prepare($sql);
	$stmt->execute([$user,$pass]); 
	return true;
 }



?>