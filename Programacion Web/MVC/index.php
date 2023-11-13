<?php

	require_once "Logic/controllers/Competidores.php";
	require_once "Persistency/config/config.php";
	require_once "Persistency/core/routes.php";
	require_once "Persistency/config/database.php";

	
	if(isset($_GET['c'])){
		
		$controlador = cargarControlador($_GET['c']);
		
		if(isset($_GET['a'])){
			if(isset($_GET['ID'])){
				cargarAccion($controlador, $_GET['a'], $_GET['ID']);
				} else {
				cargarAccion($controlador, $_GET['a']);
			}
			} else {
			cargarAccion($controlador, ACCION_PRINCIPAL);
		}
		
		} else {
		
		$controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
		$accionTmp = ACCION_PRINCIPAL;
		$controlador->$accionTmp();
	}
?>