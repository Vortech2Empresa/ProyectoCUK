#!/bin/bash
clear
op=0
while [ $op -ne 4 ]
do
echo "bienvenido a Grupos seleccione una opcion"
echo "1_Altas"
echo "2_Bajas"
echo "3_Modif"
echo "4_Volver"
read op
 
case $op in
1)
    read -p "Esta es la opcion de Altas ingrese un grupo a sumar: " grupo
    sudo groupadd $grupo 
    ;;
2)
    read -p "Esta es la opcion de bajas inrese un grupo a eliminar: " grupo
    sudo delgroup $grupo
    ;;
3)
    read -p "Esta es la opcion de modificacion ingrese un grupo a modificar: "
    sudo groupmod $grupo
    ;;
4)
    echo "Volviendo al menu principal..."
    ./abm_grupos.sh
    ;;
*)
    echo "Opcion Invalida"
    ;;
esac
done
