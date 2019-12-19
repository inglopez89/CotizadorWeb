<?php
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER); 
$nocotiza=$_REQUEST['nocotiza1'];
$estcli=$_REQUEST['estcli'];
$estneg=$_REQUEST['estneg'];
$dtecom=$_REQUEST['dtecom'];
$actualiza=odbc_exec($conexion,"update fit.dbo.tb_cotiza set esta_cli='$estcli',esta_neg='$estneg',qdetiene_compra='$dtecom' where No_cotiza='$nocotiza'");
if($actualiza){
echo "Estados Actualizados Correctamente";
}

?>