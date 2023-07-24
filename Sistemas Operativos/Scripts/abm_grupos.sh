#!/bin/bash
clear
op=0
while [ $op -ne 3 ]
do
echo "Bienvenido!, Seleccione una opcion"
echo "1. Usuarios"
echo "2. Grupos"
echo "3. Salir"
read op

case $op in

1)
    ./usuarios.sh
    ;;
2)
    ./grupos.sh
    ;;
3)
    echo "¡Hasta Luego!"
    exit
    ;;
*)
    echo "Selecciona una opcion valida"
    ;;
esac
done 
