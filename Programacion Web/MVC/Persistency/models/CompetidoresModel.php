<?php
	
	class Competidores_model {
		
		private $db;
		private $Competidores;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->Competidores = array();
		}
		
		public function get_Competidores()
		{
			$sql = "SELECT * FROM Competidores";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->Competidores[] = $row;
			}
			return $this->Competidores;
		}
		
		public function insertar($CI, $nombreCom, $apellidoCom, $fechaNac, $altura, $peso, $genero, $escuela, $dojo){
			
			$resultado = $this->db->query("INSERT INTO Competidores (CI, nombreCom, apellidoCom, fechaNac, altura, peso, genero, escuela, dojo) VALUES ('$CI', '$nombreCom', '$apellidoCom', '$fechaNac', '$altura', '$peso', '$genero', '$escuela', '$dojo')");
			
		}
		
		public function modificar($ID, $CI, $nombreCom, $apellidoCom, $fechaNac, $altura, $peso, $genero, $escuela, $dojo){
			
			$resultado = $this->db->query("UPDATE Competidores SET CI='$CI', nombreCom='$nombreCom', apellidoCom='$apellidoCom', fechaNac='$fechaNac', altura='$altura', genero='$genero', escuela='$escuela', dojo='$dojo'  WHERE ID = '$ID'");			
		}
		
		public function eliminar($ID){
			
			$resultado = $this->db->query("DELETE FROM Competidores WHERE ID = '$ID'");
			
		}
		
		public function get_competidor($ID)
		{
			$sql = "SELECT * FROM Competidores WHERE ID='$ID' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>