<?php 
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER);  
$doc=$_REQUEST['doc'];
if($conexion){
if($doc){
$res=odbc_exec($conexion,"select * from fit.dbo.tb_cliente where documento_cliente='$doc'");
while($row=odbc_fetch_array($res)){
$nombre=$row['email_cliente'];
echo $nombre;
}
}
else{
$nombre='';
echo $nombre;
}
}
else{
echo "no se conecto a la BD";
}
?>