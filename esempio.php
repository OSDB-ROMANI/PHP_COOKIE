<?php
	$name= "colore";
	$valore = "rosso";
	//controllo se il cookie esiste
	if(!isset ($_COOKIE[$name])){
		echo "<h2>Cookie non presente o scaduto</h2>";
		setcookie($name,$valore,time()+3600);
	}else{
		echo"<h2>Valore Cookie --> $_COOKIE[$name]</h2>";
	}
?>