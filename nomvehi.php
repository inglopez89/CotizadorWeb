<?php 
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER);  
$cod=$_REQUEST['cod'];
if($conexion){
if($cod){
$res=odbc_exec($conexion,"select * from fit.dbo.tb_versionesvehi where VRSCOD='$cod'");
while($row1=odbc_fetch_array($res)){
$nombrevehi=$row1['VRSNOM'];
echo $nombrevehi;
}
}
else{
$nombrevehi='';
echo $nombrevehi;
}
}
else{
echo "no se conecto a la BD";
}
?>
