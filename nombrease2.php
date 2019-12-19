<?php 
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER);  
$doc=$_REQUEST['doc'];
if($conexion){
if($doc){
$res=odbc_exec($conexion,"select * from fit.dbo.tb_emple_toy where CC_empleado='$doc'");
while($row=odbc_fetch_array($res)){
$nombre2=$row['nombre2_emple_toy'];
echo $nombre2;
}
}
else{
$nombre2='ND';
echo $nombre2;
}
}
else{
echo "no se conecto a la BD";
}
?>