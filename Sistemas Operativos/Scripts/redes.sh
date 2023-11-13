#!/bin/bash
clear
op=0

while [ $op -ne 5 ]
do
	echo "Seleccione una opcion a configurar"
	echo "1_Asignar una ip"
	echo "2_Modificar una ip"
	echo "3_Ver registro inverso de la ip"
	echo "4_ver lista de los servidores root"
    echo "5_Volver"
	read op
	case $op in
		1)
			ip addr 192.168.1.64/24 dev eth0
            ;;
		2)
		sudo nmcli connection modify d IPv4.address 192.168.2.70/24
            ;;
		3)
		dig -x
			;;
		4)
        dig .ns
        ;;
        5)
			echo "esta es la opcion de regresar "
			
            ./inicio.sh
            ;;
	
		*)echo "elija una opcion valida"
			;;
	esac
done