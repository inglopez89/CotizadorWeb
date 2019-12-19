<?php 
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER);
$no_cotiza=$_REQUEST['no_cotiza'];
$no_vehi=$_REQUEST['no_vehi'];
if($no_vehi==''){
$selec_novhci=odbc_exec($conexion,"select max(vhc_int_x_cotiza)as vhc_int_x_cotiza from fit.dbo.tb_vhc_interes where no_cotizacion='$no_cotiza'");
while($rowcount=odbc_fetch_array($selec_novhci)){
$no_vehi=$rowcount['vhc_int_x_cotiza'];
echo $no_vehi;
}
}
else{

echo $no_vehi;
}
?>