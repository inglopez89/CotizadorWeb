<?php 
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER);
$doc=$_REQUEST['doc'];
if($doc!=''){
$selec_rcli=odbc_exec($conexion,"select id_cliente from fit.dbo.tb_cliente where documento_cliente='$doc'");
while($rowcount=odbc_fetch_array($selec_rcli)){
$r_cli=$rowcount['id_cliente'];
echo $r_cli;
}
}
else{
$r_cli='';
echo $r_cli;
}
?>