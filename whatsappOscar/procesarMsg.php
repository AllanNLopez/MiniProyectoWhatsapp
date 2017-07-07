<?php 


	$emisor=$_POST['emisor'];
	$receptor=$_POST['receptor'];
	$mensaje= $_POST['mensaje'];
	$tiempo=$_POST['hora'];



	$myfile = fopen("data.txt", "a+") or die("no se pudo guardar");
	$cadena=$mensaje.",".$receptor.",".$emisor.",".$tiempo.",\n";
	fwrite($myfile, $cadena);
	fclose($myfile);

	echo "mensaje enviado"




?>	