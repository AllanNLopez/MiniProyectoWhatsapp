<?php

	$emisor = $_POST['emisor'];
	$retorno = "";
	$contactsLine ="";
	$vectorContacts;

	$file = fopen("../data/conversaciones.txt","r");
          	
  	while(!feof($file)) {
  		$contactsLine = fgets($file);
  		$vectorContacts = explode(",", $contactsLine);
  		if (strcmp ($vectorContacts[0] , $emisor ) == 0 ) {
  			$retorno = $retorno.rtrim($vectorContacts[1],"\r\n").",";
  		}
 	}
  	fclose($file);

  	echo rtrim($retorno,",");
?>