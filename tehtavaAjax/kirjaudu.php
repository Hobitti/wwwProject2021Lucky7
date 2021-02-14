<?php
include("./kirjkasto/functions.php");
if(isset($_POST["henkilo"]) && !empty($_POST["henkilo"])) {
	$data=json_decode($_POST["henkilo"]);
	$tunnus=$data->tunnus;
	$salasana=$data->salasana;
	$tulos=kirjaudu($tunnus,$salasana);
	echo $tulos;
}
else echo"Täytä kentät";
?>