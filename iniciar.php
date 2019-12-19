<?php
ob_start("ob_gzhandler");
session_start();
$doc=$_REQUEST['doc'];
$evento=$_REQUEST['seleeven'];
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER);
$autenticado=odbc_exec($conexion,"select * from fit.dbo.tb_emple_toy where CC_empleado='$doc'");
$res=odbc_num_rows($autenticado);
if($res>0 and $evento!='0'){
   $_SESSION['autenticado']="si";
   $_SESSION['docase']=$_REQUEST['doc'];
   $_SESSION['evento']=$_REQUEST['seleeven'];
   header('location: cotizacion.php');
	//echo"su usarioes:".$_SESSION['user'];
			}
		
		else {
 $_SESSION['autenticado']="no";
 echo "<script language='Javascript'>alert('Asesor no existe o no Selecciono evento');</script>";
			 header('location:index.php');
		
			
			}
	ob_end_flush();		

?>