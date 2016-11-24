<?php



function actUltimoAccesoOrdenarArchivos() {
	 //cambiando archivo de última ejecución
	 global $horaParaActUltimaEjecucion;
	 $arch2 = fopen (getcwd()."/ultimoOrdenamiento.php", "w+");
	 fwrite($arch2, "<?php\r\n//Último ordenamiento de archivos ejecutado: \r\n\$ultimaEjecucion = ".$horaParaActUltimaEjecucion."; \r\n?>" . PHP_EOL);
}



function actUltimoAccesoBackUpArchivos() {
	 //cambiando archivo de última ejecución
	 global $horaParaActUltimaEjecucion;
	 $arch2 = fopen (getcwd()."/ultimoBackUp.php", "w+");
	 fwrite($arch2, "<?php\r\n//Último backup de archivos ejecutado: \r\n\$ultimaEjecucion = ".$horaParaActUltimaEjecucion."; \r\n?>" . PHP_EOL);
}




function contarArchivos($ruta){
	//Contar el total de archivos para calculador de progreso
	global $totalArchivos;
	$totalArchivos = count(glob($ruta."/{*.*}",GLOB_BRACE));
	$totalArchivos += count(glob($ruta."/{*}/{*.*}",GLOB_BRACE));
	$totalArchivos += count(glob($ruta."/{*}/{*}/{*.*}",GLOB_BRACE));
	echo "Total de Archivos = ".$totalArchivos.".\n";
}






function backup ($ruta, $rutaBackup){
	global $totalArchivos, $ultimaEjecucion;
	global $n, $m;
	if (!is_dir($rutaBackup)){
		 mkdir($rutaBackup);
	   }
   	if (is_dir($ruta)) {
	 	echo "Analizando ruta a copiar...\n";
	 	echo "Buscando directorio destino...\n";
	 	$carpetaBackup = $rutaBackup."/Backup ".date("Y-m-d");
	 	if (!is_dir($carpetaBackup)){
	    		mkdir($carpetaBackup);
	 	}
	 	$n=0; $m=0;
	 	echo "Creada carpeta temporal en memoria. \n";
	 	$primerCarpeta = opendir($ruta);
	 	while (($file = readdir($primerCarpeta)) !== false) {
	    	if ($file!="." && $file!=".."){
		  	
		  	if (!is_dir($ruta."/".$file) && filectime($ruta."/".$file) > $ultimaEjecucion){
				//echo "Copiando archivo numero: ".($n+1)."\n";
				copy($ruta."/".$file, $carpetaBackup."/".$file);
				$n++;
		  	} 
		  	else 
		  	{
			  	$segundaCarpeta = opendir($ruta."/".$file);
			  	$m++;
				if(!is_dir($carpetaBackup."/".$file)){
			   	mkdir($carpetaBackup."/".$file);
			   	//echo "Creando directorio nro: ".($m+1)."\n";
				}
				while(($file2 = readdir($segundaCarpeta)) !== false){
					if($file2 !== "." && $file2 !== ".." && filectime($ruta."/".$file."/".$file2) > $ultimaEjecucion){
						//echo "Copiando archivo nro: ".($n+1)."\n";
						echo "Progreso de Backup: ".number_format(($n+1)*100/$totalArchivos,2)."% Completado \n";
			   			copy($ruta."/".$file."/".$file2, $carpetaBackup."/".$file."/".$file2);
			   			$n++;
			   		}
				}
		  	}
			  
	    	}
	 	}
	 	echo "Copiados ".$n." archivos de ".$m." directorios en la carpeta Backup.\n";
   	}
}






function ordenar_archivos($ruta, $grupo, $rutaBackup){
	global $totalArchivos, $registro, $ruta, $ultimaEjecucion;
	global $conteoArchivos;
	$conteoArchivos = 0;
	$registro = "";
	$conteoProgreso = 0;
   	if(is_dir($ruta)){
   		$primerCarpeta = opendir($ruta);
	 	while (($file = readdir($primerCarpeta)) !== false){
	 		compararFicheros($ruta, $file);
	 		if(!is_dir($ruta."/".$file)){
	 			$porcentaje = number_format($conteoProgreso*100/$totalArchivos,2);
	 			if ($porcentaje < 99)
	 				{
	 				echo "Analizando archivos. ".$porcentaje."% Completado.\n";
	 				$conteoProgreso++;
	 				}
	    	} else {
	 		$segundaCarpeta = opendir($ruta."/".$file);
	 		}
	    	while (($file2 = readdir($segundaCarpeta)) !== false){
	    		compararFicheros($ruta."/".$file, $file2);
	    		if(!is_dir($ruta."/".$file."/".$file2)){
	    			$porcentaje = number_format($conteoProgreso*100/$totalArchivos,2);
	 				if ($porcentaje < 99)
	 				{
	 				echo "Analizando archivos. ".$porcentaje."% Completado.\n";
	 				$conteoProgreso++;
	 				}
	    		}

	    	}
	 	}
	 	echo "Analizando archivos. 100% Completado.\n";
	 	echo "------------------------------------------------\n------------------------------------------------\n";
	 	echo "Se organizaron en total: $conteoArchivos archivos.\n";
	 	echo "------------------------------------------------\n------------------------------------------------\n";
	 	//Creando resgistro de salida
	 	$arch = fopen ($rutaBackup."/Registro Clasificador De Archivos ".date("Y-m-d")." ".date("h;i;sa").".txt", "w+");
	 	fwrite($arch, "\r\nOrganizados ".$conteoArchivos." archivos en total durante esta ejecución.\r\n\r\nDetalle de archivos clasificados:\r\n".$registro . PHP_EOL);
	 	echo "\n\nArchivo de registro guardado en: ".$rutaBackup."\n";

   	}
}







function compararFicheros($ruta, $nombre){
			global $conteoArchivos, $registro, $grupo, $ultimaEjecucion;
		  	for ($i = 0; $i < count($grupo); $i++){
				for ($j = 0; $j < count($grupo[$i]); $j++){
			   	if (strncmp($nombre,$grupo[$i][$j],strlen($grupo[$i][$j])) == 0){
				 	$carpetaGrupo = $grupo[$i][0];
				 	if (is_dir($carpetaGrupo) == false){
				    		mkdir($carpetaGrupo);
				 	}
				 	if (!is_dir($ruta."/".$nombre) && filectime($ruta."/".$nombre) > $ultimaEjecucion){
				 		copy($ruta."/".$nombre, $carpetaGrupo."/".$nombre);
				 		touch($ruta."/".$nombre);
				 		$registro .= "Copiado archivo ".$nombre." a la carpeta de ".$grupo[$i][0].". \r\nRegistrado: ".date("Y/m/d")." a las ".date("h:i:sa")."\r\n\r\n";
				 		$conteoArchivos++;
				 	}
				}
				}
		  	}

}





?>