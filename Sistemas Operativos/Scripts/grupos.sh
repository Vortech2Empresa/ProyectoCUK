#!/bin/bash
clear
op=0

while [ $op -ne 4 ]
do
	echo "Bienvenidoa grupos seleccione una opcion"
	echo "1_Altas"
	echo "2_Bajas"
	echo "3_Modificar"
	echo "4_Volver"
	read op
	case $op in
		1)
			read -p "esta es la opcion de altas seleccione un grupo a sumar: " grupo
			sudo groupadd $grupo;;
		2)
		read -p "esta es la opcion de bajas elija un grupo a eliminar: " grupo
			sudo delgroup $grupo;;
		3)
			read -p "esta es la opcion de modificacion elija un grupo a modificar: " grupo
            sudo groupmod $grupo
			;;
		4)
			echo "esta es la opcion de regresar "
			
            ./inicio.sh
            ;;
	
		*)echo "elija una opcion valida"
			;;
	esac
done