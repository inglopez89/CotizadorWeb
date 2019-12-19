<?php
	
	$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER);  
	/*$rs= odbc_exec($conexion," select * from toycli "); 	
	if ($rs)
	{
	$res= odbc_exec($conexion," select * from toycli ");
while(odbc_fetch_row($res)){
$var1=odbc_result($res,'nombre');
echo 'var 1: '.$var1;echo '</br>';
*/

//}

	//echo 'se conecto a sql server';
  //  $resul=odbc_result_all($rs,"border=1");
	//}
/*else 
{	

echo 'No se conecto a la base ';
	echo "No ok";
}

odbc_close_all();
*/
?>

 