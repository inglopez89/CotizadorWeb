<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/blccbx.css" rel="stylesheet" type="text/css"/>
<script src="javascript/bljjShadowbx1.js" type="text/javascript"/></script>
<script type="text/javascript">
Shadowbox.init({
overlayColor: "#000",
overlayOpacity: "0.6",
});
</script>
<title></title>

<style type="text/css">
<!--
.Estilo7 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; }
-->
</style>
</head>

<body>
<form id="forrescon" name="forrescon" target="rsconsul" >
<table width="748" border="1">
<tr>
<td width="54"><span class="Estilo7">Detalle</span></td>
<td width="119"><span class="Estilo7">Noº.Cotizacion</span></td>
<td width="90"><span class="Estilo7">Documento</span></td>
<td width="66"><span class="Estilo7">Nombre</span></td>
<td width="66"><span class="Estilo7">Apellido</span></td>
<td width="133"><span class="Estilo7">Observaciones</span></td>
<td width="80"><span class="Estilo7">Asesores</span></td>
<td width="88"><span class="Estilo7">Evento</span></td>
</tr>
<?php  
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER); 
$doc=$_REQUEST['doc'];
$nocotiza=$_REQUEST['nocotiza'];
$seleven=$_REQUEST['seleeven'];
$selase=$_REQUEST['selase'];
if($doc!=''){
$consul=odbc_exec($conexion,"select * from fit.dbo.tb_cotiza where cc_cliente='$doc'");
while($row=odbc_fetch_array($consul)){
$nocotiza1=$row['No_cotiza'];
$docase=$row['cc_asesor'];
$doccli=$row['cc_cliente'];
$obse=$row['obser_general'];
$even=$row['cod_lugar_evento'];
$cli=odbc_exec($conexion,"select * from fit.dbo.tb_cliente where documento_cliente='$doccli'");
while($row1=odbc_fetch_array($cli)){
$nomcli=$row1['nombre_cliente'];
$apecli=$row1['apellido_cliente'];
}
$asesor=odbc_exec($conexion,"select * from fit.dbo.tb_emple_toy");
while($row2=odbc_fetch_array($asesor)){
$nomemple=$row2['nombre_emple_toy'];
}
$even=odbc_exec($conexion,"select * from fit.dbo.tb_lugar_even where id_lugar_even='$even'");
while($row3=odbc_fetch_array($even)){
$nomeven=$row3['nombre_even'];
}
echo "<tr>";
echo "<td></td>";
echo "<td>"; echo $nocotiza1; echo"</td>";
echo "<td>"; echo $doccli; echo"</td>";
echo "<td>"; echo $nomcli; echo"</td>";
echo "<td>"; echo $apecli; echo "</td>";
echo "<td>"; echo $obse; echo"</td>";
echo "<td>"; echo $nomemple; echo"</td>";
echo "<td>"; echo $nomeven; echo "</td>";
echo "</tr>";
}
}
if($nocotiza!=''){
$consul=odbc_exec($conexion,"select * from fit.dbo.tb_cotiza where No_cotiza='$nocotiza'");
while($row4=odbc_fetch_array($consul)){
$nocotiza1=$row4['No_cotiza'];
$docase=$row4['cc_asesor'];
$doccli=$row4['cc_cliente'];
$obse=$row4['obser_general'];
$even=$row4['cod_lugar_evento'];
$cli=odbc_exec($conexion,"select * from fit.dbo.tb_cliente where documento_cliente='$doccli'");
while($row5=odbc_fetch_array($cli)){
$nomcli=$row5['nombre_cliente'];
$apecli=$row5['apellido_cliente'];
}
$asesor=odbc_exec($conexion,"select * from fit.dbo.tb_emple_toy");
while($row6=odbc_fetch_array($asesor)){
$nomemple=$row6['nombre_emple_toy'];
}
$even=odbc_exec($conexion,"select * from fit.dbo.tb_lugar_even where id_lugar_even='$even'");
while($row7=odbc_fetch_array($even)){
$nomeven=$row7['nombre_even'];
}
echo "<tr>";
echo "<td></td>";
echo "<td>"; echo $nocotiza1; echo"</td>";
echo "<td>"; echo $doccli; echo"</td>";
echo "<td>"; echo $nomcli; echo"</td>";
echo "<td>"; echo $apecli; echo "</td>";
echo "<td>"; echo $obse; echo"</td>";
echo "<td>"; echo $nomemple; echo"</td>";
echo "<td>"; echo $nomeven; echo "</td>";
echo "</tr>";
}
}

if($seleven!='0'){
$ideven=odbc_exec($conexion,"select * from fit.dbo.tb_lugar_even where nombre_even='$seleven'");
while($row12=odbc_fetch_array($ideven)){
$leven=$row12['id_lugar_even'];
}
$consul=odbc_exec($conexion,"select * from fit.dbo.tb_cotiza where cod_lugar_evento='$leven'");
while($row8=odbc_fetch_array($consul)){
$nocotiza1=$row8['No_cotiza'];
$docase=$row8['cc_asesor'];
$doccli=$row8['cc_cliente'];
$obse=$row8['obser_general'];
$even=$row8['cod_lugar_evento'];
$cli=odbc_exec($conexion,"select * from fit.dbo.tb_cliente where documento_cliente='$doccli'");
while($row9=odbc_fetch_array($cli)){
$nomcli=$row9['nombre_cliente'];
$apecli=$row9['apellido_cliente'];
}
$asesor=odbc_exec($conexion,"select * from fit.dbo.tb_emple_toy");
while($row10=odbc_fetch_array($asesor)){
$nomemple=$row10['nombre_emple_toy'];
}
$even=odbc_exec($conexion,"select * from fit.dbo.tb_lugar_even where id_lugar_even='$even'");
while($row11=odbc_fetch_array($even)){
$nomeven=$row11['nombre_even'];
}
echo "<tr>";
echo "<td></td>";
echo "<td>"; echo $nocotiza1; echo"</td>";
echo "<td>"; echo $doccli; echo"</td>";
echo "<td>"; echo $nomcli; echo"</td>";
echo "<td>"; echo $apecli; echo "</td>";
echo "<td>"; echo $obse; echo"</td>";
echo "<td>"; echo $nomemple; echo"</td>";
echo "<td>"; echo $nomeven; echo "</td>";
echo "</tr>";
}
}
elseif($selase!='0'){
$docase=odbc_exec($conexion,"select * from fit.dbo.tb_emple_toy where nombre_emple_toy='$selase'");
while($row12=odbc_fetch_array($docase)){
$docases=$row12['CC_empleado'];
}
$consul=odbc_exec($conexion,"select * from fit.dbo.tb_cotiza where cc_asesor='$docases'");
while($row13=odbc_fetch_array($consul)){
$nocotiza1=$row13['No_cotiza'];
$docase=$row13['cc_asesor'];
$doccli=$row13['cc_cliente'];
$obse=$row13['obser_general'];
$even=$row13['cod_lugar_evento'];
$cli=odbc_exec($conexion,"select * from fit.dbo.tb_cliente where documento_cliente='$doccli'");
while($row14=odbc_fetch_array($cli)){
$nomcli=$row14['nombre_cliente'];
$apecli=$row14['apellido_cliente'];
}
$asesor=odbc_exec($conexion,"select * from fit.dbo.tb_emple_toy");
while($row15=odbc_fetch_array($asesor)){
$nomemple=$row15['nombre_emple_toy'];
}
$even=odbc_exec($conexion,"select * from fit.dbo.tb_lugar_even where id_lugar_even='$even'");
while($row16=odbc_fetch_array($even)){
$nomeven=$row16['nombre_even'];
}
echo "<tr>";
echo "<td></td>";
echo "<td>"; echo $nocotiza1; echo"</td>";
echo "<td>"; echo $doccli; echo"</td>";
echo "<td>"; echo $nomcli; echo"</td>";
echo "<td>"; echo $apecli; echo "</td>";
echo "<td>"; echo $obse; echo"</td>";
echo "<td>"; echo $nomemple; echo"</td>";
echo "<td>"; echo $nomeven; echo "</td>";
echo "</tr>";
}
}
?>
</table>
</form>
<a rel="shadowbox;width=1000;height=600" title='TITULO' href='http://www.cun.edu.co' >TITULO DEL ENLACE</a>

</body>
</html>
