#!/bin/bash
clear
op=0
while [ $op -ne 5 ]
do
echo "Bienvenido a Usuario! Seleccione una opcion"
echo "1. Altas"
echo "2. Bajas"
echo "3. Modif"
echo "4. Listado"
echo "5. Volver"

read op
case $op in
1) 
    read -p "Esta es la opcion de altas ingrese a un usuario nuevo: " usuario
    sudo useradd $usuario
    ;;
2) 
    read -p "Esa es la opcion de bajas seleccione un usuario a eliminar: " usuario
    sudo userdel $usuario
    ;;
3) 
    read -p "Esta es la opcion de modificar ingrese un usuario a modificar: " usuario
    sudo usermod $usuario 
    ;;
4) 
    read -p "Esta es la opcion de listado inrese un usuario a listar: " usuario
    ls $usuario
    ;;
5) 
    echo "Volviendo al menu principal..."
    ./abm_grupos.sh
;;
*)echo "Seleccione una opcion valida"
;;
esac
done
