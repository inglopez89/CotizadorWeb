<?php 
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER);
$no_cotiza=$_REQUEST['no_cotiza'];
if($no_cotiza==''){
$selec_nocotiza=odbc_exec($conexion,"select max(no_cotiza)as no_cotiza from fit.dbo.tb_cotiza");
while($rowcount=odbc_fetch_array($selec_nocotiza)){
$concotiza=$rowcount['no_cotiza'];
echo $concotiza;
}
}
else{
echo $no_cotiza;

}
?>