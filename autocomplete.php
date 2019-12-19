<?php
$q=strtolower($_GET["q"]);
if (!$q) return;
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER);  	
	if ($conexion)
	{
    $res= odbc_exec($conexion," select vrsnom from fit.dbo.tb_versionesvehi where vrsnom like '%$q%' and VRSESTVIG='s'");
     while(odbc_fetch_array($res)){
       $val1=odbc_result($res,'vrsnom');
         		 //echo $val1;
           
         	if (strpos(strtolower($val1), $q) !== false) {
		     echo "$val1\n";
	         }
        
		 }
  
    }
  else
  {
echo "no hay resultados";
 }
odbc_close_all();

?>