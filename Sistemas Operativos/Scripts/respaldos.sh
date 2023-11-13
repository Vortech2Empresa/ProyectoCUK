#!/bin/bash
clear
op=0

while [ $op -ne 4 ]
do
	echo "Seleccione una opcion de respaldo"
	echo "1_Crear un respaldo"
	echo "2_Eliminar un resplado"
	echo "3_Sincronizar un respaldo"
	echo "4_Comprimir un respaldo"
    echo "5_Volver"
	read op
	case $op in
		1)
			mkdir original
    mkdir duplicate
    touch original/file{1..3}
    rsync original/* duplicate/
            ;;
		2)
        rsync --delete  original/ duplicate/
		
            ;;
		3)
		    rsync -r original duplicate/
			;;
		4)
        rsync  --compress original/duplicate
        ;;
        5)
			echo "esta es la opcion de regresar "
			
            ./inicio.sh
            ;;
	
		*)echo "elija una opcion valida"
			;;
	esac
done