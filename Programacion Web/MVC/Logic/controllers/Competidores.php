<?php
	
	class CompetidoresController {
		
		public function __construct(){
			require_once "../mvc/Persistency/models/CompetidoresModel.php";
		}
		
		public function index(){
			
			
			$Competidores = new Competidores_model();
			$data["titulo"] = "Competidores";
			$data["Competidores"] = $Competidores->get_Competidores();
			
			require_once "../mvc/Interface/views/Competidores/Competidores.php";	
		}
		
		public function nuevo(){
			
			$data["titulo"] = "Competidores";
			require_once "../mvc/Interface/views/Competidores/Competidores_nuevo.php";
		}
		
		public function guarda(){

			
			$CI = $_POST['CI'];
			$nombreCom = $_POST['nombreCom'];
			$apellidoCom = $_POST['apellidoCom'];
			$fechaNac = $_POST['fechaNac'];
			$altura = $_POST['altura'];
			$peso = $_POST['peso'];
			$genero = $_POST['genero'];
			$escuela = $_POST['escuela'];
			$dojo = $_POST['dojo'];

			
			$Competidores = new Competidores_model();
			$Competidores->insertar($CI, $nombreCom, $apellidoCom, $fechaNac, $altura, $peso, $genero, $escuela, $dojo);
			$data["titulo"] = "Competidores";+
			$this->index();
		}
		
		public function modificar($ID){
			
			$Competidores = new Competidores_model();
			
			$data["ID"] = $ID;
			$data["Competidores"] = $Competidores->get_competidor($ID);
			$data["titulo"] = "Competidores";
			require_once "../mvc/Interface/views/Competidores/Competidores_modifica.php";
		}
		
		public function actualizar(){

			$ID = $_POST['ID'];
			$CI = $_POST['CI'];
			$nombreCom = $_POST['nombreCom'];
			$apellidoCom = $_POST['apellidoCom'];
			$fechaNac = $_POST['fechaNac'];
			$altura = $_POST['altura'];
			$peso = $_POST['peso'];
			$genero = $_POST['genero'];
			$escuela = $_POST['escuela'];
			$dojo = $_POST['dojo'];

			$Competidores = new Competidores_model();
			$Competidores->modificar($ID, $CI, $nombreCom, $apellidoCom, $fechaNac, $altura, $peso, $genero, $escuela, $dojo);
			$data["titulo"] = "Competidores";
			$this->index();
		}
		
		public function eliminar($ID){
			
			$Competidores = new Competidores_model();
			$Competidores->eliminar($ID);
			$data["titulo"] = "Competidores";
			$this->index();
		}	
	}
