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

		}

		public function readMsg(){
			$file = fopen("data/mensajes.txt","r");
          	while(!feof($file)) {
          	$m =  fgets($file)."<br />";
         	}
          	fclose($file);

          return $m;
		}
	}


?>