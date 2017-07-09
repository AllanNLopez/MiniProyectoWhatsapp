<?php 
	

	class Mensaje 
	{
		private $emisor;
		private $receptor;
		private $mensaje;
		private $tiempo;
		
		function __construct($emisor, $receptor, $mensaje, $tiempo)
		{
			 $this->emisor= $emisor;
			 $this->receptor=$receptor;
			 $this->mensaje = $mensaje;
			 $this->tiempo = $tiempo;
		}


		public function getEmisor(){
			return $this->emisor;
		}

		public function getReceptor(){
			return $receptor;
		}

		public function getMesaje(){
			return $mensaje;
		}

		public function getTiempo(){
			return $tiempo;
		}

		public function toJSON(){
        	return json_encode(get_object_vars($this));
    	}
	}


?>