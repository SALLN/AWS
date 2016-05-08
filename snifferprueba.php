<?php

date_default_timezone_set('America/Bogota');

$datos=">RTX\0D\0A&237#@;EV001895275869+1095466-0747962900000011;ID=Peso_Ticol<";
$s1=strpos($datos,"&");    $s2=strpos($datos,"#");    

$lon=strlen($datos);
echo $datos;
if (!empty($s1) && !empty($s2) && $lon<80 && $lon>62){
$tim=strpos($datos,"+");    $latlon=strpos($datos,"-");
$i=strpos($datos,"ID=");    $j=strpos($datos,"_");    $k=strpos($datos,"<"); $time=substr($datos,$tim-10,10);  
$weeksTosecond=substr($time,0,4)*7*24*60*60;    $daysToseconds=substr($time,4,1)*24*60*60;    $seconds=substr($time,5,5);
$tiempogps=$weeksTosecond+$daysToseconds+$seconds+315964800; 

$latitud=substr($datos,$tim+1,2).'.'.substr($datos,$tim+3,5);
$longitud='-'.substr($datos,$latlon+2,2).'.'.substr($datos,$latlon+4,5);
$usuario=substr($datos,$i+3,$j-$i-3);
$idv=substr($datos,$j+1,$k-$j-1);
$peso=substr($datos,$s1+1,$s2-$s1-1);
$fecha=date('Y-m-d H:i:s', $tiempogps);
$fecha_servidor = date('Y-m-d H:i:s');
    
echo    
echo $longitud;

}
?>