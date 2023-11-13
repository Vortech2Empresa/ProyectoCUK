#!/bin/bash

clear
op=0

while [ $op -ne 5 ]
do
	echo "elija una opcion"
	echo "1_Permitir un acceso"
	echo "2_Negar un acceso"
	echo "3_Listar reglas"
	echo "4_Reiniciar"
	echo "5_Volver"
	read op
	case $op in
		1)
                  read -p "escriba la ip que quiere permitir: " ipPerm
			sudo firewall-cmd --permanent --zone=public --add-source=$ipPerm
			;;
		2)
		read -p "Escriba laip a bloquear: " ipBlock
	sudo firewall-cmd --permanent --zone=public --remove-source=$ipBlock	
			;;

		3) 
		firewall-cmd --permanent --get-servicios
			;;
		4)
			firewall-cmd --reload
			;;
		5) 
		./inicio.sh
			;;
		*)
			echo "elija una opcion valida"
			;;
	esac
done