<?php
date_default_timezone_set("America/Argentina/Cordoba");
include ("config.php");
include ("funciones.php");
//Última ejecución
include ("ultimoBackUp.php");

echo "Analizando directorio ".$ruta.":\n";
contarArchivos($ruta);

echo " \n\n--------------------------------------------------------------\n";
echo "--------------------------------------------------------------\n";
echo "Creando resguardo de archivos.\n";
echo "--------------------------------------------------------------\n";
echo "--------------------------------------------------------------\n\n";
backup($ruta, $rutaBackup);
actUltimoAccesoBackUpArchivos();
echo "\n\n--------------------------------------------------------------\n";
echo "--------------------------------------------------------------\n";
echo "Finalizado el BackUp de archivos.\n";
echo "Script por Ezequiel Crosa.\n";
echo "--------------------------------------------------------------\n";
echo "--------------------------------------------------------------\n\n";

?>