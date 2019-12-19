<?php
$con=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER);  

if($con){
//echo"<script language='Javascript'>alert('se conecto a la base de datos')</script>";

}
else 
{
echo "no se conecto a la base de datos";
}

odbc_close_all();

?>

 