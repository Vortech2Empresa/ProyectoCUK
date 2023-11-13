#!/bin/bash
clear
op=0

while [ $op -ne 6 ]
do
	echo"seleccione un servicio a utulizar"
	echo "1_Encender servicio"
	echo "2_Apagar servicio"
	echo "3_Habilitar servicio"
	echo "4_Deshabilitar servicio"
	echo "5_Lisar servicios"
	echo "6_Volver"
	read op
	case $op in
		1)
			sudo systemctl start application
			;;
		2)
			sudo systemctl stop application
			;;
		3)
			sudo systemctl enable application
			;;
		4)
			sudo systemctl disable application
			;;
		5)
			systemctl list-units
			;;
		6)echo "esta es la opcion de salida nos vemos"
			;;
		*)echo "elija una opcion valida"
			;;
	esac
done
