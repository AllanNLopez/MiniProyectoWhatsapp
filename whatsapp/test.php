<?php

			/*$file = fopen("data/mensajes.txt","r");
          	while(!feof($file)) {
          	$m =  fgets($file)."<br />";
         	}
          	fclose($file);

          	echo $m;*/

          	include_once("../whatsapp/class/class-mensaje.php");
          	$msg = new Mensaje("krilin", "pedro", "mensaje", "12:00");
          	$msg1 = new Mensaje("goku", "pedro", "mensaje", "12:45");
          	$msg2 = new Mensaje("trunks", "pedro", "mensaje", "12:10");
          	//echo $msg->getEmisor();
          	echo $msg->toJSON()." ".$msg1->toJSON()." ".$msg2->toJSON(); 

          	

          	 

?>