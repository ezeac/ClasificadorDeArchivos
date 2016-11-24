<?php
date_default_timezone_set("America/Argentina/Cordoba");
include ("config.php");
include ("funciones.php");
//Última ejecución
$ultimaEjecucion = 0;

echo "Analizando directorio ".$ruta.":\n";
contarArchivos($ruta);

echo "\n\n--------------------------------------------------------------\n";
echo "--------------------------------------------------------------\n";
echo "Organizando archivos...\n";
echo "--------------------------------------------------------------\n";
echo "--------------------------------------------------------------\n\n";
ordenar_archivos($ruta, $grupo, $rutaBackup);
actUltimoAccesoOrdenarArchivos();
echo "\n\n--------------------------------------------------------------\n";
echo "--------------------------------------------------------------\n";
echo "Finalizada la distribucion de archivos.\n";
echo "Script por Ezequiel Crosa.\n";
echo "--------------------------------------------------------------\n";
echo "--------------------------------------------------------------\n\n";


?>