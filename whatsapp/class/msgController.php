<?php
	
	/**
	* 
	*/
	class msgController 
	{
		private $emisor;
		private $receptor;
		private $mensaje;
		
		function __construct( )
		{
			 
		}
/*
		function __construct($emisor, $receptor, $mensaje)
		{
			 $this->emisor= $emisor;
			 $this->receptor=$receptor;
			 $this->mensaje = $mensaje;
		}*/


		public function writeMsg($mensaje){
			$archivo = fopen("../data/mensajes.txt","a+") or die ("No se pudo crear el archivo");
			fwrite($archivo, $mensaje."\n");
			fclose($archivo);
		}

		public function getContacts(){
			$file = fopen("data/contactos.txt","r");
          	while(!feof($file)) {
          		$contactsLine =  fgets($file)."<br />";
         	}
          	fclose($file);

          return $contactsLine;
		}

		public function readMsg(){
			$msjLine = "";
			$file = fopen("data/mensajes.csv","r");
          	while($row = fgets($file))
          		$msjLine = $msjLine.$row;

          	fclose($file);
          return $msjLine;
		}
	}


?>