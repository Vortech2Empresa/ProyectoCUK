#!/bin/bash
clear
op=0

while [ $op -ne 5 ]
do
	echo "Bienvenidoa grupos seleccione una opcion"
	echo "1_Altas"
	echo "2_Bajas"
	echo "3_Modificar"
	echo "4_Listado"
    echo "5_Volver"
	read op
	case $op in
		1)
			read -p "esta es la opcion de altas ingrese un usuario nuevo: " usuario
			sudo useradd $usuario;;
		2)
		read -p "esta es la opcion de bajas elija un usuario a eliminar: " usuario		   
        	sudo userdel $usuario;;
        3)
			read -p "esta es la opcion de modificacion elija un usuario a modificar: " usuario
            sudo usermod $usuario
			;;
		4)
		read -p "esta es la opcion de listado elija un usuario a listar" usuario
        sudo cat $usuario
            ;;
	5)
    echo "esta es la opcion de regresar "
			 ./inicio.sh
    ;;
		*)echo "elija una opcion valida"
			;;
	esac
    
done