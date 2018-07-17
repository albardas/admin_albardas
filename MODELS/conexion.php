<?php  
	namespace MODELS;

	class conexion
	{
		
		private $datos = array(
			'host' => 'localhost',
			'user' => 'root',
			'pass' => '',
			'db' => 'albardas'
		);

		private $con;

		public function __construct(){
			$this->con = new \mysqli(
				$this->datos['host'],
				$this->datos['user'],
				$this->datos['pass'],
				$this->datos['db']);
		}

		public function consultaSimple($sql){
			$this->con->query($sql);
		}

		public function consultaRetorno($sql){
			$datos = $this->con->query($sql);
			return $datos;
		}
	}

 ?>