<div style="font-family: Poppins;">

# Estudio de los diferentes roles de los usuarios del servidor

* Administrativo: Administrador del S.O
* Jueces: Administrador del servidor
* Participante: Usuario
* Escuela: Grupo al que pertenece el usuario

###### Relevamiento y justificación del Sistema Operativo a utilizar tanto en las terminales de los usuarios como en el servidor.

##### Nosotros vamos a utilizar fedora server porque:
1. Fedora es la vanguardia. El sistema operativo de Fedora se denomina distribución de Linux de vanguardia porque siempre se está implementando con el software más reciente, las actualizaciones de controladores y las características de Linux. Esto contribuye a la razón por la que puede usar Fedora con confianza tan pronto como se complete la instalación: se entrega con el último kernel estable junto con todos sus beneficios. Por ejemplo, Fedora es la primera distribución importante en usar systemd como su sistema de init por defecto y la primera distribución principal en usar Wayland como su protocolo de servidor de pantalla por defecto. 
   <br>
2. Una buena comunidad Fedora tiene una de las comunidades más grandes del mundo con un foro poblado por muchos usuarios que con gusto lo ayudarán a resolver cualquier problema que pueda atascarse al usar la distro. Esto está separado del canal IRC de Fedora y de la gran comunidad Reddit a la que también puede acceder de forma gratuita para aprender de otros usuarios y compartir experiencias. 
<br>
3. Fedora Spins Fedora está disponible en diferentes sabores a los que la comunidad hace referencia como "SPINS" y cada giro (spins en inglés) utiliza un entorno de escritorio diferente del Gnome Desktop predeterminado. Los giros disponibles actualmente son KDE Plasma, XFCE, LXQT, Mate-Compiz, Cinnamon, LXDE, SOAS y i3 Tiling WM.
<br>
4. Mejor gestión de paquetes A diferencia de Debian y Ubuntu, que usan dpkg con un front-end oficial apto, Fedora usa el administrador de paquetes RPM con un front-end dnf y los paquetes RPM son generalmente más fáciles de construir. RPM también tiene más funciones que dpkg, como la confirmación de paquetes instalados, el historial y la reversión, etc. 
<br>
5. Una experiencia única de Gnome El proyecto Fedora trabaja en estrecha colaboración con la Fundación Gnome, por lo que Fedora siempre obtiene la última versión de Gnome Shell y sus usuarios comienzan a disfrutar de sus nuevas funciones e integraciones antes que los usuarios de otras distribuciones. 
<br>
6. Seguridad de alto nivel Los usuarios de Linux disfrutan de la máxima seguridad gracias al kernel de Linux que se encuentra debajo de cada distribución, pero los desarrolladores de Fedora han ido más allá para integrar funciones de seguridad avanzadas dentro de la distribución a través del módulo Linux con seguridad mejorada ( SELinux ). SELinux es un módulo de seguridad del kernel de Linux que permite el soporte para acceder a las políticas de seguridad, por ejemplo, administrar los derechos de permiso. 
<br>
7. Fedora está respaldada por Red Hat Red Hat es el proveedor líder mundial de software empresarial de código abierto con un enfoque impulsado por la comunidad para ofrecer soluciones en la nube, contenedores y tecnologías Kubernetes. Fedora cuenta con el respaldo de la comunidad de Red Hat , por lo que sus usuarios disfrutan de las ventajas de obtener soporte de la comunidad de Red Hat , que incluye soporte comercial y actualizaciones de seguridad constantes. 
<br>
8. Soporte de hardware prolífico Fedora disfruta de muchos beneficios gracias a las comunidades que lo respaldan y un buen ejemplo es la facilidad con la que Fedora funcionará en las PC, impresoras, escáneres, cámaras, etc. de diferentes proveedores directamente. Si desea una distribución de Linux que no le cause problemas de compatibilidad, Fedora es una buena opción.
<br>
9. Énfasis en el softwre de código abierto Las posibilidades de descubrir software propietario o de código abierto dependen de la distribución de Linux que esté utilizando. Ubuntu , por ejemplo, es la distribución más popular entre los usuarios domésticos, pero cuenta con software patentado que incluye códecs y controladores multimedia, y Adobe Flash, por mencionar algunos. Incluso el kernel de Linux presenta algunos bits binarios cerrados, por lo que Fedora se envía con el kernel de Linux-libre como un reemplazo del kernel. No estoy diciendo que el software propietario sea malo, pero muchas personas prefieren usar software de código abierto siempre que pueden y algunos se niegan a usar el software cerrado por completo. Fedora no prohíbe que los usuarios instalen el software que desean, pero todas sus aplicaciones predeterminadas son de código abierto y su repo no tiene una política de software no libre. El único inconveniente de esto es que deberá recurrir a la descarga de software privativo de recursos de terceros. En cualquier caso, el punto es que la filosofía de código abierto de Fedora se encuentra entre las más estrictas de la comunidad y puede que te guste.
<br>
10.  Fedora es fácil de usar Las distribuciones de Linux más comunes son bien conocidas por su facilidad de uso y Fedora se encuentra entre las distribuciones más fáciles de usar. Su sencilla interfaz de usuario es lo suficientemente simple para que cualquiera pueda iniciarse por primera vez y acostumbrarse después de un par de clics y todo su software ofrece la misma experiencia de usuario que le da a los usuarios una sensación de coherencia y familiaridad.


<br><br>

# Manual de instalación de fedora server

* Características: OS opensource moderno con moderno software
* Repositorio de modularidad brindando diferentes versiones de software (maneja diferentes servicios con diferentes versiones)
* Manejo y administración sencilla por medio de interfaz web Cockpit
* Manejo de bases de datos opensource (PostgreSQL, MariaDB, etc)
* Completa solución de dominio empresarial con FreeIPA

##### Requisitos mínimos para descargar un servidor:

* Procesador de 64Bits o aarch64
* 1GB RAM (mas es mejor)
* 10 GB disco (dependiendo de los servicios a montar, mas es mejor)
* DVD o puerto USB
* 1 puerto ethernet

**Donde se descarga**: Para descargar el Fedora Server vamos a a su página oficial y allí encontraremos los links de descarga para 64bits y aarch64
**Página oficial**: https://fedoraproject.org/en/server/download/

**Que descargar**:
###### Dependiendo de lo siguiente sera el que debes descargar
* Tu conexión a internet es lenta o con poco ancho de banda: Netinstall te parecerá pequeño el ISO pero en el DVD encuentras ya casi todo
* El DVD ISO instala casi todo de forma local sin usar internet
* El Netinstall necesita una conexión a internet para instalar

## Verificamos la imagen del servidor Fedora

1. Como buena política que nos puede evitar dolores de cabeza comenzamos verificando el medio de instalación (sea una USB booteable o un DVD)

2. Apenas hacemos boot ingresamos por la segunda opción, **Test this media & install Fedora 29** presionando **Enter**

3. Comienza el boot con la verificación, esperamos hasta que termine

## Instalación de Fedora Server

4. Terminado de cargar el escritorio gráfico se nos dará la bienvenida y elegimos el idioma con su región

5. Damos click al botón **Continuar**

## Resumen instalación Fedora Server

6. En este paso realizaremos casi todo el trabajo de instalación y debemos tener en cuenta lo siguiente:
<br>
    * Toda opción con un <strong style="color: red; text">mensaje inferior en rojo</strong> es que tiene un error o falta por configurarse
     
    * Una opción con símbolo amarillo de **Atención** significa que hay algo que necesita que se confirme por parte nuestra
     
    * Opciones en negro sin mensaje de atención o rojo inferior quiere decir que sus defaults son suficientes
  
    * Tenemos 3 columnas, Regionalizacion, Software y Sistema con opciones a personalizar o dejar con sus defaults

    * Damos click a **Destino de la instalación** en la columna **Sistema**
  
<br><br>

<div style="font-family: Poppins;">

# Instalacion de Docker

#### Pasos para instalar Docker en Ubuntu

* Loguéate con root a tu consola de comandos.

* Primero, instala los requisitos iniciales corriendo estos comandos.

```bash
sudo apt-get update

sudo apt-get install \
 apt-transport-https \
 ca-certificates \
 curl \
 gnupg-agent \
 software-properties-common
```

* Ahora instala la llave.

```bash
curl -fsSL https://download.docker.com/linux/ubuntu/gpg|
sudo apt-key add -
```

* Agregaremos en este paso el repositorio de Docker.

```bash
sudo add-apt-repository \
 "deb [arch=amd64] https://download.docker.com/linux
 /ubuntu \
 $(lsb_release -cs) \
 stable"
```

* Instala los paquetes.

```bash
sudo apt-get update
sudo apt-get install docker-ce 
docker-ce-cli containerd.io
```

<span style="color: green; background-color: #A2BF68;">Si durante el proceso de instalación arroja el error</span>

```bash 
dpkg: error processing package linux-image-unsigned-... 
```
<span style="color: green; background-color: #A2BF68;">puedes desestimarlo sin problema.</span>

* Prueba la instalación usando comando de "hola mundo".

```bash
sudo docker run hello-world
```

* Si todo salió bien veremos el siguiente mensaje.

```bash
latest: Pulling from library/hello-world
0e03bdcc26d7: Pull complete
Digest: sha256:49a1c8800c94df04e9658809b006fd8a686cab8028d33cfba2cc049724254202
Status Downloaded newer image for hello-world:latest
Hello from Docker!
This message shows that your installation appears to be working correctly.
To generate this message, Docker took the following steps:
 1. The Docker client contacted the Docker daemon.
 2. The Docker daemon pulled the "hello-world" image from the Docker Hub.
 (amd64)
 1. The Docker daemon created a new container from that image which runs the
 executable that produces the output you are currently reading.
 1. The Docker daemon streamed that output to the Docker client, which sent it
 to your terminal.
To try something more ambitious, you can run an Ubuntu container with:
 $ docker run -it ubuntu bash
Share images, automate workflows, and more with a free Docker ID:
 https://hub.docker.com/
For more examples and ideas, visit:
 https://docs.docker.com/get-started/
```

* Listo, Docker ya está instalado en tu servidor.
 
 
## Asuntos a tener en cuenta luego de instalar Docker

Docker está pensado para ser usado a nivel usuario y no es recomendable usarlo como root. Es por eso que si no tienes un usuario para correr Docker, te propondremos crear uno y agregarlo a los grupos de usuario correspondiente.
 Aquí cómo hacerlo:

<span style="color: green; background-color: #A2BF68;">Recuerda reemplazar USUARIO por el usuario real que estés creando en sistema.</span>
* Crea el usuario.

```bash
adduser USUARIO
```

*Agrégalo ahora a los grupos de sudo y Docker.

```bash
usermod -aG sudo USUARIO
usermod -aG docker USUARIO
```

* Toma control de la consola con el nuevo usuario.

```bash
su USUARIO
```

* Intenta correr el "hola mundo" con el usuario para ver si todo va bien.

```bash
sudo docker run hello-world
```

<br><br>

<div style="font-family: Poppins;">

# Instalacion para un Servidor LAMP


#### Requisitos:
Un servidor dedicado, un VPS o una instancia de Public Cloud en su cuenta de OVHcloud (excepto sistemas Windows) Tienes acceso a tu área de cliente de OVHcloud Acceso administrativo al servicio por SSH

#### Procedimiento:
Si ya tiene instalada una distribución Debian o Ubuntu en el servidor, realice la reinstalación desde el área de cliente de OVHcloud. Es la mejor manera de tener un sistema propio para su servidor web y las aplicaciones que se ejecutan en él. Consulte la guía correspondiente para instalar una distribución en su servicio OVHcloud y conecte a él por SSH: Servidor dedicado: VPS Instancia Public Cloud

##### Sigue los siguientes pasos:

1. Actualización del sistema Una vez que se haya conectado al servidor por SSH, asegúrese de que todos los paquetes estén actualizados:

```bash
sudo apt update && sudo apt upgrade –y
```

Ahora podria instalar los paquetes LAMP actuales.


2. Instalación de Apache Instale los paquetes Apache (incluida la documentación):

```bash
sudo apt install -y apache2 apache2-doc
```

Para comprobar la instalación se utilizaría el siguiente comando

```bash
sudo systemctl status apache2
```

También puede abrir http://server_IP en un navegador web.

 Se abrirá la página **Apache2 Debian Default Page**. 

3. Instalar el servidor de bases de datos y PHP 
   
    *Instale los paquetes de MariaDB y PHP*:

```bash
sudo apt install -y php php-pdo php-mysql
php-zip php-gd php-mbstring php-curl php-xml
php-pear php-bcmath mariadb-server
```

4. Configuración del servidor de bases de datos MariaDB proporciona un script para ayudarle con la configuración inicial y aplicar algunos parámetros de seguridad.
   
 Para ejecutarlo, introduzca el siguiente comando:

```bash
sudo mysql_secure_installation
```

Confirme el salto pulsando **enter**

A continuación, seleccione una forma de proteger los accesos al servidor de bases de datos.

```bash
Switch to unix_socket authentication [Y/n]
```

Se recomienda utilizar el método de autenticación propuesto (unix_socket) en lugar del acceso con contraseña root. Pulse y y, a continuación, Intro. Si decide utilizar el acceso de usuario root en su lugar, elija n y establezca una contraseña root en la siguiente imagen. Introduzca n en el siguiente comando:

```bash
Change the root password? [Y/n]
```

Las siguientes visitas relativas a las medidas de seguridad, confírmelas todas con y hasta el final del script

```bash
Reloading the privilege tables will ensure that all changes made so far
will take effect immediately.
Reload privilege tables now? [Y/n] y
 ... Success!
Cleaning up...
All done!  If you've completed all of the above steps, your MariaDB
installation should now be secure.
Thanks for using MariaDB!
Si ha configurado el acceso MariaDB como se recomienda (unix_socket), dispondrá de un acceso de administrador automático (root) cada vez que se conecte al servidor como usuario con altos permisos (sudo).
Manual de Instalación de MySQL/MariaDB
Requisitos: Un servidor en la nube con Linux (CentOS 7 o Ubuntu 16.04)
Install MySQL en Ubuntu 16.04
MySQL suele estar instalado por defecto en un servidor en la nube estándar con Ubuntu 16.04. Utiliza el comando sudo mysql --version para verificar que MySQL ya está instalado:
user@localhost:~# sudo mysql --version
mysql  Ver 14.14 Distrib 5.7.17, for Linux (x86_64) using  EditLine wrapper
Copy
Si MySQL no está instalado, puedes instalarlo actualizando primero tus paquetes:
sudo apt-get update
Copy
A continuación, instala MySQL:
sudo apt-get install mysql-server
Copy
Sigue las indicaciones para instalar MySQL.
MySQL debería iniciarse automáticamente cuando se instala. Si no se inicia, puedes arrancarlo con el siguiente comando:
sudo systemctl start mysql
Copy
Activa el inicio de MySQL en el arranque con el siguiente comando:
sudo systemctl enable mysql
Copy
Si necesitas parar o reiniciar MySQL, utiliza los comandos:
sudo systemctl stop mysql
sudo systemctl restart mysql
```


<br><br>

<div style="font-family: Poppins;">

# Manual de instalacion de MariaDB

### Install MariaDB en CentOS 7
A diferencia de MySQL, MariaDB suele estar instalada por defecto en un servidor cloud estándar que ejecuta CentOS 7. Utiliza el comando sudo mysql --version para verificar que MariaDB está instalado:

```bash
[user@localhost ~]# sudo mysql --version
mysql  Ver 15.1 Distrib 5.5.52-MariaDB, 
for Linux (x86_64) using readline 5.1
```

Si MariaDB no está instalado, puedes instalar el **sistema gestor de base de datos** actualizando primero tu sistema:

```bash
sudo yum update
```

A continuación, instala **MariaDB**:
```bash
sudo yum install mariadb-server
```

MariaDB debería iniciarse automáticamente cuando se instala. Si no se inicia, puedes arrancarlo con el comando:

```bash
sudo systemctl start mariadb
```

Activa que MariaDB se inicie en el arranque con el comando:
```bash
sudo systemctl enable mariadb
```

Si necesitas parar o reiniciar MariaDB, utiliza los siguientes comandos:
```bash
sudo systemctl stop mariadb
sudo systemctl restart mariadb
```

Inicia sesión en el cliente MySQL/MariaDB
Desde la línea de comandos, introduce el siguiente comando para acceder al cliente MySQL/MariaDB:
```bash
mysql -u root -p
```

En una instalación por defecto de MySQL/MariaDB, utiliza la contraseña de root que se estableció cuando se creó el servidor. Si has instalado MySQL/MariaDB, introduce la contraseña que estableciste para el usuario raíz durante el proceso de instalación.
Después de introducir la contraseña, serás dirigido al panel de control del cliente MySQL/MariaDB.
```bash
[root@localhost ~]# mysql -u root -p
Enter password:
Welcome to the MariaDB monitor. Commands end with ; or 
\g.
Your MariaDB connection id is 83
Server version: 5.5.52-MariaDB MariaDB Server
Copyright (c) 2000, 2016, Oracle, MariaDB Corporation 
Ab and others.
Type 'help;' or '\h' for help. Type '\c' to clear the 
current input statement.
MariaDB [(none)]>
```
