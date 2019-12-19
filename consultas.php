<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link href="css/estilos.css" rel="stylesheet" type="text/css">
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
<style>
	input {border:1px solid #ABABAB}
	BODY{
	background-color:#FFFFFF;
	}
.Estilo2 {color: #000000}
</style>
<title>Consultas</title>
	
</head>

<body>
<fieldset style="width:780px; height:auto; ">
<form action="consultas.php"  class="labelW" method="GET">
  <table width="748" height="87" class="tabs" >
    <tr height="10"></tr>
    <tr>
      <td><span >Fecha de Cotizaci&oacute;n </span></td>
      <td><input name="fecha" id="fecha" type="text" onfocus="this.select();lcs(this)" onclick="event.cancelBubble=true;this.select();lcs(this)"  size="12" />
          <script type="text/javascript">
    filePath = 'images/';
    </script>
          <script src="javascript/swazzcalendar.js" type="text/javascript"></script></td>
      <td><span >No. Documento de Cliente </span></td>
      <td><input type="text" id="doc" name="doc" size="15" /></td>
      <td><span >No..Cotizacion</span></td>
      <td><input type="text" size="10"  id="nocotiza" name="nocotiza"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><span >Nombre de Evento </span></td>
      <td><select id="seleven" name="seleeven" >
          <option value="0">--seleccione--</option>
          <?php 
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER);
$consu=odbc_exec($conexion,"select * from fit.dbo.tb_lugar_even");
while($row1=odbc_fetch_array($consu)){
$ideven=$row1['id_lugar_even'];
$nomeven=$row1['nombre_even'];
echo "<option value'$ideven'>";echo $nomeven;echo"</option>";
}
?>
      </select></td>
      <td><span >C&oacute;digo de Asesor </span></td>
      <td><select id="selase" name="selase">
          <option value="0">--seleccione--</option>
          <?php 
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER);
$consu=odbc_exec($conexion,"select * from fit.dbo.tb_emple_toy");
while($row1=odbc_fetch_array($consu)){
$doccli=$row1['CC_empleado'];
$nomemple=$row1['nombre_emple_toy'];
echo "<option value'$doccli'>";echo $nomemple;echo"</option>";
}
?>
        </select>
      </td>
    </tr>
    <tr height="10"></tr>
    <tr >
      <td colspan="7" align="center"><input name="submit" type="submit" class="botonG" value="Consultar"/>
      </td>
    </tr>
  </table>
</form>
<form id="forrescon" name="forrescon" target="rsconsul" >
<table width="748" border="1" cellpadding="1" cellspacing="1" class="det label">
<tr>
<td width="54" ><span ><strong>Detalle</strong></span></td>
<td width="119"><span ><strong>Noº.Cotizacion</strong></span></td>
<td width="90"><span ><strong>Documento</strong></span></td>
<td width="66"><span ><strong>Nombre</strong></span></td>
<td width="66"><span ><strong>Apellido</strong></span></td>
<td width="133"><span ><strong>Observaciones</strong></span></td>
<td width="80"><span ><strong>Asesores</strong></span></td>
<td width="88"><span ><strong>Evento</strong></span></td>
</tr>
<?php  
//echo $_GET["nocotiza"];
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER); 

if($_GET['doc']){
$doc="'".$_GET['doc']."'";
}
else{
$doc="c.documento_cliente";
}
if($_GET['nocotiza']){
$nocotiza="'".$_GET['nocotiza']."'";
}
else{
$nocotiza="d.No_cotiza";
}


if($_GET['seleeven']){
$even="'".$_GET['seleeven']."'";
}
else{
$even="b.nombre_even";
}

if($_GET['selase']){
$ase="'".$_GET['selase']."'";
}
else{
$ase="a.nombre_emple_toy";
}
if($_GET['fecha']){
$fecha="'".$_GET['fecha']."'";
}
else{
$fecha="CONVERT (date, d.fecha_cotiza)";
}


$query="select  d.No_cotiza no_cotiza,c.documento_cliente docli,c.nombre_cliente nomcli,c.apellido_cliente apecli,
d.obser_general obser,a.nombre_emple_toy nomemple,b.nombre_even nomeven 
from fit.dbo.tb_cotiza d,fit.dbo.tb_cliente c,fit.dbo.tb_emple_toy a,fit.dbo.tb_lugar_even b 
where c.documento_cliente=d.cc_cliente and d.cod_lugar_evento=b.id_lugar_even and
d.cc_asesor=a.CC_empleado  and d.No_cotiza=$nocotiza  and c.documento_cliente=$doc and b.nombre_even=$even and a.nombre_emple_toy=$ase
and CONVERT (date, d.fecha_cotiza)=$fecha ";


$consul=odbc_exec($conexion,$query);

while($row=odbc_fetch_array($consul)){
$nocotiza1=$row['no_cotiza'];
$doccli=$row['docli'];
$nomcli=$row['nomcli'];
$apecli=$row['apecli'];
$obse=$row['obser'];
$nomemple=$row['nomemple'];
$nomeven=$row['nomeven'];
echo "<tr>";
echo "<td><a rel='shadowbox;width=900;height=600' title='Detalle de la cotizacion' href='detalle.php?nocotiza=";echo $nocotiza1;echo"'>ver</a></td>";
echo "<td>"; echo $nocotiza1; echo"</td>";
echo "<td>"; echo $doccli; echo"</td>";
echo "<td>"; echo $nomcli; echo"</td>";
echo "<td>"; echo $apecli; echo "</td>";
echo "<td>"; echo $obse; echo"</td>";
echo "<td>"; echo $nomemple; echo"</td>";
echo "<td>"; echo $nomeven; echo "</td>";
echo "</tr>";
}
?>
</table>
</form>
</fieldset>
</body>
</html>
