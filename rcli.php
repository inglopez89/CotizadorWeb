<?php 
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER);
$r_cli=$_REQUEST['r_cli'];
if($r_cli==''){
$selec_rcli=odbc_exec($conexion,"select max(id_cliente)as id_cliente from fit.dbo.tb_cliente");
while($rowcount=odbc_fetch_array($selec_rcli)){
$r_cli=$rowcount['id_cliente'];
echo $r_cli;
}
}
else{
echo $r_cli;

}
?>