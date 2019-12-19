<?php
header('Content-Type: text/html; charset=iso-8859-1');
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER); 
$selec_count=odbc_exec($conexion,"select max(no_cotiza) as no_cotiza from fit.dbo.tb_cotiza");
while($rowcount=odbc_fetch_array($selec_count)){
$concotiza=$rowcount['no_cotiza'];
echo $concotiza;
}


?>