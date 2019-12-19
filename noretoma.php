<?php 
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER);
$no_cotiza=$_REQUEST['no_cotiza'];
$no_retoma=$_REQUEST['no_retoma'];
if($no_retoma==''){
$selec_noretoma=odbc_exec($conexion,"select max(rtm_x_cotiza)as rtm_x_cotiza from fit.dbo.tb_retoma where no_cotizacion='$no_cotiza'");
while($rowcount=odbc_fetch_array($selec_noretoma)){
$no_retoma=$rowcount['rtm_x_cotiza'];
echo $no_retoma;
}
}
else{

echo $no_retoma;
}
?>