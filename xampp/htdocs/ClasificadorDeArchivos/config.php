<?php
set_time_limit(0);
//Última ejecución
include ("ultimoOrdenamiento.php");

//Otras configuraciones
$totalArchivos = 0;
$horaParaActUltimaEjecucion = mktime();


//Cambiar contenido entre comillar para editar la ruta:
$ruta = "W:\ONIXFTP\Onix\SFTPGlobal\In";
$rutaBackup = "T:\Backup";

//Cambiar contenido entre comillas para editar los grupos y sus archivos correspondientes:


//Grupo 1:
$grupo[0][0]="T:\Comercial GP";
//Archivos del grupo 1:
$grupo[0][1]="R1001D";
$grupo[0][2]="T0100";
$grupo[0][3]="T0101";
$grupo[0][4]="T0200";
$grupo[0][5]="T0201";
$grupo[0][6]="T0201";
$grupo[0][7]="T0400";
$grupo[0][8]="T0401";
$grupo[0][9]="T0402";
$grupo[0][10]="T0403";
$grupo[0][11]="T0500";
$grupo[0][12]="T0501";
$grupo[0][13]="T0550";
$grupo[0][14]="T0551";
$grupo[0][15]="T0560";
$grupo[0][16]="T0561";
$grupo[0][17]="T0600";
$grupo[0][18]="T0700";
$grupo[0][19]="T0800";
$grupo[0][20]="T0801";
$grupo[0][21]="T0900";
$grupo[0][22]="T1001D";
$grupo[0][23]="R1002D";
$grupo[0][24]="T1002D";
$grupo[0][25]="T1010S";
$grupo[0][26]="T1090M";
$grupo[0][27]="R3030D";
$grupo[0][28]="T3030D";
$grupo[0][29]="T2001D";
$grupo[0][30]="RP";



//Grupo 2
$grupo[1][0]="T:\Administracion GP";
//Archivos del grupo 2:
$grupo[1][1]="T1001D";
$grupo[1][2]="T1002D";
$grupo[1][3]="T1010S";
$grupo[1][4]="R3030D";
$grupo[1][5]="T3030D";
$grupo[1][6]="T1111D";
$grupo[1][7]="T2001D";
$grupo[1][8]="T2000D";
$grupo[1][9]="T2020D";
$grupo[1][10]="T2030D";
$grupo[1][11]="T2010S";
$grupo[1][12]="T7510M";
$grupo[1][13]="T7501M";
$grupo[1][14]="T7502M";
$grupo[1][15]="RP";


//Grupo 3:
$grupo[2][0]="T:\Operaciones GP";
//Archivos del grupo 3:
$grupo[2][1]="R1001D";
$grupo[2][2]="T0100";
$grupo[2][3]="T0101";
$grupo[2][4]="T0200";
$grupo[2][5]="T0201";
$grupo[2][6]="T0201";
$grupo[2][7]="T0400";
$grupo[2][8]="T0401";
$grupo[2][9]="T0402";
$grupo[2][10]="T0403";
$grupo[2][11]="T0500";
$grupo[2][12]="T0501";
$grupo[2][13]="T0550";
$grupo[2][14]="T0551";
$grupo[2][15]="T0560";
$grupo[2][16]="T0561";
$grupo[2][17]="T0600";
$grupo[2][18]="T0700";
$grupo[2][19]="T0800";
$grupo[2][20]="T0801";
$grupo[2][21]="T0900";
$grupo[2][22]="T1001D";
$grupo[2][23]="R1002D";
$grupo[2][24]="T1002D";
$grupo[2][25]="T1010S";
$grupo[2][26]="T1030S";
$grupo[2][27]="T1090M";
$grupo[2][28]="R6001D";
$grupo[2][29]="T6001D";
$grupo[2][30]="T6005S";
$grupo[2][31]="T7001D";
$grupo[2][32]="T1111D";
$grupo[2][33]="T2001D";
$grupo[2][34]="T2000D";
$grupo[2][35]="T2020D";
$grupo[2][36]="T2030D";
$grupo[2][37]="T4309M";
$grupo[2][38]="RP";



//Grupo 4:
$grupo[3][0]="T:\Cobranzas GP";
//Archivos del grupo 4:
$grupo[3][1]="R3020D";
$grupo[3][2]="T3022D";
$grupo[3][3]="RP";




//Grupo 5:
$grupo[4][0]="T:\Creditos GP";
//Archivos del grupo 5:
$grupo[4][1]="R3030D";
$grupo[4][2]="T3030D";
$grupo[4][3]="T2030D";
$grupo[4][4]="T3001S";
$grupo[4][5]="T5000S";
$grupo[4][6]="T5001S";
$grupo[4][7]="T5002S";
$grupo[4][8]="T5003S";
$grupo[4][9]="T5004S";
$grupo[4][10]="T5005S";
$grupo[4][11]="T5006S";
$grupo[4][12]="T5007S";
$grupo[4][13]="T5008S";
$grupo[4][14]="T5009S";
$grupo[4][15]="T5010S";
$grupo[4][16]="T3001S";
$grupo[4][17]="R3020D";
$grupo[4][18]="T3022D";
$grupo[4][19]="T3010S";
$grupo[4][20]="T2010S";
$grupo[4][21]="RP";



//Grupo 6:
$grupo[5][0]="T:\Auditoria GP";
//Archivos del grupo 6:
$grupo[5][1]="T4309M";
$grupo[5][2]="RP";



//Grupo 7:
$grupo[6][0]="T:\Legales GP";
//Archivos del grupo 7:
$grupo[6][1]="T4309M";
$grupo[6][2]="RP";




//Grupo 8:
$grupo[7][0]="T:\Sistemas GP";
//Archivos del grupo 6:




//Copiar la misma estructura para más grupos...//



?>