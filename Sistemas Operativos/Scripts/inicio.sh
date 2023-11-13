#!/bin/bash
clear
op=0
while [ $op -ne 7 ]
do 
echo "Bienvenido a el menu principal elija una opcion"
echo "1)_Usuarios"
echo "2)_Grupos"
echo "3)_Redes"
echo "4)_Servicios"
echo "5)_Firewall"
echo "6)_Respaldo"
echo "7)_Salir"
read op

case $op in

1)
./usuarios.sh
;;
2)
./grupos.sh
;;
3)
./redes.sh
;;
4)
./servicios.sh
;;
5)
./firewall.sh
;;
6)
./respaldos.sh
;;
7)
echo "Esta es la opcion de salida gracias por usar nuestro sistema"
exit
;;
*)
echo "Elija una opcion valida"
;;
esac 
done