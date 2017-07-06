<?php 

	$emisor=$_POST['emisor'];
	$receptor=$_POST['receptor'];
	



	$archivo = fopen("data.txt","r") or die('fallo al cargar');
	while($row = fgets($archivo)) {
  		list( $mensaje, $receptor1, $emisor1) = explode( ",", $row );

  		if ($emisor==$emisor1 && $receptor==$receptor1) {
  			
  			$arregloMsg[]=array($mensaje,$emisor1);
  			
  			
  		}else{
  		if($emisor==$receptor1 && $receptor==$emisor1){

  			$arregloMsg[]=array($mensaje,$emisor1);

  		}
  	}

  	}
  	echo json_encode($arregloMsg);

	
	/*
	$archivo = fopen("archivo.csv","r");
	while(!feof($archivo)){
			$linea = fgets($archivo);
			if ($linea!=''){
				$partes = explode(",", $linea);
				echo "<tr><td>".$partes[0]."</td><td>".$partes[1]."</td></tr>";
			}
		} 
	*/

	


?>