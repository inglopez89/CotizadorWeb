<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/estilos2.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script src="javascript/jquery-1.1.3.1.pack.js" type="text/javascript"></script>
<script language="javascript" src="javascript/jquery-1.3.min.js"></script>
<script type="text/javascript" src="javascript/jquery.js"></script>
<script src="javascript/jquery.history_remote.pack.js" type="text/javascript"></script>
<script src="javascript/jquery.tabs.pack.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/jquery.tabs-ie.css" type="text/css" media="projection, screen">
<link rel="stylesheet" href="css/jquery.tabs.css" type="text/css" media="print, projection, screen">
<script type="text/javascript">
$(document).ready(function() {
   // Esta primera parte crea un loader no es necesaria
    $().ajaxStart(function() {
        $('#loading').show();
        $('#result').hide();
    }).ajaxStop(function() {
        $('#loading').hide();
        $('#result').fadeIn('slow');
    });
   // Interceptamos el evento submit
    $('#form, #fat, #fo3').submit(function() {
  // Enviamos el formulario usando AJAX
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            // Mostramos un mensaje con la respuesta de PHP
            success: function(data) {
                $('#result').html(data);
            }
        })        
        return false;
    }); 
})
</script>
        <style type="text/css" media="screen, projection">

            /* Not required for Tabs, just to make this demo look better... */

            body {
                font-size: 16px; /* @ EOMB */
				background-color:#FFFFFF;
            }
            * html body {
                font-size: 100%; /* @ IE */
            }
            body * {
                font-size: 87.5%;
                font-family: "Trebuchet MS", Trebuchet, Verdana, Helvetica, Arial, sans-serif;
            }
            body * * {
                font-size: 100%;
            }
            h1 {
                margin: 1em 0 1.5em;
                font-size: 18px;
            }
            h2 {
                margin: 2em 0 1.5em;
                font-size: 16px;
            }
            p {
                margin: 0;
            }
            pre, pre+p, p+p {
                margin: 1em 0 0;
            }
            code {
                font-family: "Courier New", Courier, monospace;
            }
        </style>

<title></title>
</head>
<body>
<fieldset style="width:830px; height:auto;">
<form action="actest.php" method="post" id="form" name="form" class="det label">
<table width="729">
<tr>
<td>Nº.Cotizacion</td>
<td><?php $nocotiza=$_REQUEST['nocotiza']; 
echo "<input type='text' size='5' value='"; echo $nocotiza; echo "' readonly='readonly' name='nocotiza1' id='nocotiza1'/>"; 
?></td>
</tr>
<tr>
<td width="134">Documento</td>
<td width="136"><?php 
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER); 
$nocotiza=$_REQUEST['nocotiza'];
$doccli=odbc_exec($conexion,"select * from fit.dbo.tb_cotiza where No_cotiza='$nocotiza'");
while($row=odbc_fetch_array($doccli)){
$doccli1=$row['cc_cliente'];
echo $doccli1;
}
?></td>
<td width="61">Nombre</td>
<td width="166"><?php 
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER); 
$nocotiza=$_REQUEST['nocotiza'];
$doccli=odbc_exec($conexion,"select * from fit.dbo.tb_cotiza where No_cotiza='$nocotiza'");
while($row=odbc_fetch_array($doccli)){
$doccli1=$row['cc_cliente'];
}
$selnom=odbc_exec($conexion,"select * from fit.dbo.tb_cliente where documento_cliente='$doccli1'");
while($row1=odbc_fetch_array($selnom)){
$nomcli=$row1['nombre_cliente'];
echo $nomcli;
}

?></td>
<td width="51">Apellido</td>
<td width="153"><?php 
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER); 
$nocotiza=$_REQUEST['nocotiza'];
$doccli=odbc_exec($conexion,"select * from fit.dbo.tb_cotiza where No_cotiza='$nocotiza'");
while($row=odbc_fetch_array($doccli)){
$doccli1=$row['cc_cliente'];
}
$selape=odbc_exec($conexion,"select * from fit.dbo.tb_cliente where documento_cliente='$doccli1'");
while($row1=odbc_fetch_array($selape)){
$apecli=$row1['apellido_cliente'];
echo $apecli;
}

?></td>
</tr>
<tr>
<td>Direccion</td>
<td><?php 
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER); 
$nocotiza=$_REQUEST['nocotiza'];
$doccli=odbc_exec($conexion,"select * from fit.dbo.tb_cotiza where No_cotiza='$nocotiza'");
while($row=odbc_fetch_array($doccli)){
$doccli1=$row['cc_cliente'];
}
$seldir=odbc_exec($conexion,"select * from fit.dbo.tb_cliente where documento_cliente='$doccli1'");
while($row1=odbc_fetch_array($seldir)){
$dircli=$row1['direccion_cliente'];
echo $dircli;
}

?></td>
<td>Telefono</td>
<td><?php 
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER); 
$nocotiza=$_REQUEST['nocotiza'];
$doccli=odbc_exec($conexion,"select * from fit.dbo.tb_cotiza where No_cotiza='$nocotiza'");
while($row=odbc_fetch_array($doccli)){
$doccli1=$row['cc_cliente'];
}
$seltel=odbc_exec($conexion,"select * from fit.dbo.tb_cliente where documento_cliente='$doccli1'");
while($row1=odbc_fetch_array($seltel)){
$telcli=$row1['tel_cliente'];
echo $telcli;
}

?></td>
<td>Email</td>
<td><?php 
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER); 
$nocotiza=$_REQUEST['nocotiza'];
$doccli=odbc_exec($conexion,"select * from fit.dbo.tb_cotiza where No_cotiza='$nocotiza'");
while($row=odbc_fetch_array($doccli)){
$doccli1=$row['cc_cliente'];
}
$selemail=odbc_exec($conexion,"select * from fit.dbo.tb_cliente where documento_cliente='$doccli1'");
while($row1=odbc_fetch_array($selemail)){
$emailcli=$row1['email_cliente'];
echo $emailcli;
}

?></td>
</tr>
</table>
<fieldset style="width:800px; height:auto;">
<div id="container-5">
            <ul>
                <li><a href="#fragment-13"><span>Vehiculo de Interes</span></a></li>
                <li><a href="#fragment-14"><span>Retoma Vehiculo</span></a></li>
            </ul>
<div id="fragment-13">
<table width="788" border="1" id="tbl" style="border-collapse:separate" name=tbl class="label">
          <tr> 
          
			   <th width="51" style="border-collapse:collapse; color:White" border="1">Cod</th>
            <th width="113" style="border-collapse:collapse; color:White" border="1">Vehículo</th>
            <th width="116" style="border-collapse:collapse; color:White" border="1">Valor</font></th>
            <th width="69" style="border-collapse:collapse; color:White" border="1">Cta Inicial</font></th>
            <th width="62" style="border-collapse:collapse; color:White" border="1">Saldo</font></th>
            <th width="38" style="border-collapse:collapse; color:White" border="1">Meses</th>
            <th width="138" style="border-collapse:collapse; color:White" border="1">Cta Mensual</th>
            <th width="159" style="border-collapse:collapse; color:White" border="1">Accesorios</th>
          </tr>
		
		  <?php 
		  $conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER); 
		  $nocotiza=$_REQUEST['nocotiza'];
		  $vhcint=odbc_exec($conexion,"select * from fit.dbo.tb_vhc_interes where No_cotizacion='$nocotiza'");
		  while($row=odbc_fetch_array($vhcint)){
		  $vhcint1=$row['versvhc_cod'];
		  $val=$row['valor_vhc'];
		  $cuotaini=$row['cuota_ini'];
          $saldo=$row['saldo'];
		  $mesplaz=$row['plazo_meses'];
		  $acces=$row['acces_vhc'];
		  $valcuota=$row['valor_cuota_aproxi'];
		  $nomvhc=odbc_exec($conexion,"select * from fit.dbo.tb_versionesvehi where VRSCOD='$vhcint1'");
		  while($row1=odbc_fetch_array($nomvhc)){
		  $nomvhc1=$row1['VRSNOM'];
		  }
		  echo "<tr>";
		  echo "<td style='border-collapse:collapse; color:White'; border='1'>";echo $vhcint1;echo"</td>";
		  echo "<td style='border-collapse:collapse; color:White' border='1'>";echo $nomvhc1;echo"</td>";
		  echo "<td style='border-collapse:collapse; color:White' border='1'>";echo $val;echo"</td>";
		  echo "<td style='border-collapse:collapse; color:White' border='1'>";echo $cuotaini;echo"</td>";
		  echo "<td style='border-collapse:collapse; color:White' border='1'>";echo $saldo;echo"</td>";
		  echo "<td style='border-collapse:collapse; color:White' border='1'>";echo $mesplaz;echo"</td>";
		  echo "<td style='border-collapse:collapse; color:White' border='1'>";echo $valcuota;echo"</td>";
		  echo "<td style='border-collapse:collapse; color:White' border='1'>";echo $acces;echo"</td>";
		  echo "</tr>";
		  }
		
		  ?>
		
    </table>
</div>
<div id="fragment-14">
<table width="729" border="1" id="tblr" style="border-collapse:separate" name=tbl class="label">
  <tr>
    <th width="120"  style="border-collapse:collapse; color:White" border="1">Retoma</th>
    <th width="120" style="border-collapse:collapse; color:White" border="1">Version</th>
    <th width="63" style="border-collapse:collapse; color:White" border="1">Año</th>
    <th width="123" style="border-collapse:collapse; color:White" border="1">Placa</th>
    <th width="77" style="border-collapse:collapse; color:White" border="1">Kilometraje</th>
    <th width="165" style="border-collapse:collapse; color:White" border="1">Val retoma</th>
  </tr>
    <?php 
		  $conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER); 
		  $nocotiza=$_REQUEST['nocotiza'];
		  $retoma=odbc_exec($conexion,"select * from fit.dbo.tb_retoma where No_cotizacion='$nocotiza'");
		  while($row=odbc_fetch_array($retoma)){
		  $retoma1=$row['nombre_ret'];
		  $version=$row['version'];
		  $ano=$row['año_retoma'];
          $placa=$row['placa'];
		  $kmmarca=$row['kilomet_marca'];
		  $valaproxi=$row['val_retoma_aproxi'];
		  echo "<tr>";
		  echo "<td style='border-collapse:collapse; color:White' border='1' >";echo $retoma1;echo"</td>";
		  echo "<td style='border-collapse:collapse; color:White' border='1'>";echo $version;echo"</td>";
		  echo "<td style='border-collapse:collapse; color:White' border='1'>";echo $ano;echo"</td>";
		  echo "<td style='border-collapse:collapse; color:White' border='1'>";echo $placa;echo"</td>";
		  echo "<td style='border-collapse:collapse; color:White' border='1'>";echo $kmmarca;echo"</td>";
		  echo "<td style='border-collapse:collapse; color:White' border='1'>";echo $valaproxi;echo"</td>";
		  echo "</tr>";
		  }
		  ?>
  </table>
</div>
</div>
<script type="text/javascript">
            $(function() {
              $('#container-5').tabs({ fxSlide: true, fxFade: true, fxSpeed: 'normal' });
            });
        </script>
</fieldset>
<table width="588">
<tr class="cuadro">
<td height="24"><div align="left" class="Estilo11">Estado del Cliente:</div></td>
<?php 
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER); 
$nocotiza=$_REQUEST['nocotiza'];
$estcli=odbc_exec($conexion,"select * from fit.dbo.tb_cotiza where No_cotiza='$nocotiza'");
while($rw=odbc_fetch_array($estcli)){
$estcli1=$rw['esta_cli'];
}
if($estcli1==1){
echo "<td><span class='Estilo11'>Frio</span></td>";
echo "<td><input type='radio' value='1' id='radio1' name='estcli' checked='checked'></td>";
echo "<td><span class='Estilo11'>Tibio</span></td>";
echo "<td><input type='radio' value='2' id='radio2' name='estcli'></td>";
echo "<td><span class='Estilo11'>Caliente</span></td>";
echo "<td><input type='radio' value='3' id='radio3'name='estcli'></td>";
}
elseif($estcli1==2){
echo "<td><span class='Estilo11'>Frio</span></td>";
echo "<td><input type='radio' value='1' id='radio1' name='estcli' ></td>";
echo "<td><span class='Estilo11'>Tibio</span></td>";
echo "<td><input type='radio' value='2' id='radio2' name='estcli' checked='checked'></td>";
echo "<td><span class='Estilo11'>Caliente</span></td>";
echo "<td><input type='radio' value='3' id='radio3'name='estcli'></td>";
}
elseif($estcli1==3){
echo "<td><span class='Estilo11'>Frio</span></td>";
echo "<td><input type='radio' value='1' id='radio1' name='estcli' ></td>";
echo "<td><span class='Estilo11'>Tibio</span></td>";
echo "<td><input type='radio' value='2' id='radio2' name='estcli' checked='checked'></td>";
echo "<td><span class='Estilo11'>Caliente</span></td>";
echo "<td><input type='radio' value='3' id='radio3'name='estcli' checked='checked'></td>";
}

?>
</tr>
<tr class="cuadro">
<td width="160" height="25"><div align="left" class="Estilo11">Estado del Negocio:</div></td>
<?php 
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER); 
$nocotiza=$_REQUEST['nocotiza'];
$estneg=odbc_exec($conexion,"select * from fit.dbo.tb_cotiza where No_cotiza='$nocotiza'");
while($rw=odbc_fetch_array($estneg)){
$estneg1=$rw['esta_neg'];
}
if($estneg1==1){
echo "<td width='72'><span class='Estilo11'>Cotizacion</span></td>";
echo "<td><input type='radio' value='1' id='radio4' name='estneg' checked='checked'></td>";
echo "<td><span class='Estilo11'>Separacion</span></td>";
echo "<td><input type='radio' name='estneg' id='radio5' value='2'></td>";
echo "<td><span class='Estilo11'>OR. De Compra</span></td>";
echo "<td><input type='radio' id='radio6' value='3' name='estneg'></td>";
}
elseif($estneg1==2){
echo "<td width='72'><span class='Estilo11'>Cotizacion</span></td>";
echo "<td><input type='radio' value='1' id='radio4' name='estneg' ></td>";
echo "<td><span class='Estilo11'>Separacion</span></td>";
echo "<td><input type='radio' name='estneg' id='radio5' value='2' checked='checked'></td>";
echo "<td><span class='Estilo11'>OR. De Compra</span></td>";
echo "<td><input type='radio' id='radio6' value='3' name='estneg'></td>";
}
elseif($estneg1==3){
echo "<td width='72'><span class='Estilo11'>Cotizacion</span></td>";
echo "<td><input type='radio' value='1' id='radio4' name='estneg' ></td>";
echo "<td><span class='Estilo11'>Separacion</span></td>";
echo "<td><input type='radio' name='estneg' id='radio5' value='2' ></td>";
echo "<td><span class='Estilo11'>OR. De Compra</span></td>";
echo "<td><input type='radio' id='radio6' value='3' name='estneg' checked='checked'></td>";
}
?>
</tr>
<tr class="cuadro">
<td height="24"><div align="left" class="Estilo11">Que Detiene la compra?:</div></td>
<?php 
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER); 
$nocotiza=$_REQUEST['nocotiza'];
$qdtecompra=odbc_exec($conexion,"select * from fit.dbo.tb_cotiza where No_cotiza='$nocotiza'");
while($rw=odbc_fetch_array($qdtecompra)){
$qdtecompra1=$rw['qdetiene_compra'];
}
if($qdtecompra1==1){
echo "<td><span class='Estilo11'>Retoma</span></td>";
echo "<td width='22'><input type='radio' value='1' id='radio7' name='dtecom' checked='checked'></td>";
echo "<td width='82'><span class='Estilo11'>Financiacion</span></td>";
echo "<td width='23'><input type='radio' value='2' id='radio8' name='dtecom'></td>";
echo "<td width='98'><span class='Estilo11'>Documentos</span></td>";
echo "<td width='21'><input type='radio' id='radio9' value='3' name='dtecom'></td>";
echo "<td width='46'><span class='Estilo11'>Precio</span></td>";
echo "<td width='24'><input type='radio' id='radio10' name='dtecom' value='4'></td>";
}
elseif($qdtecompra1==2){
echo "<td><span class='Estilo11'>Retoma</span></td>";
echo "<td width='22'><input type='radio' value='1' id='radio7' name='dtecom' ></td>";
echo "<td width='82'><span class='Estilo11'>Financiacion</span></td>";
echo "<td width='23'><input type='radio' value='2' id='radio8' name='dtecom' checked='checked'></td>";
echo "<td width='98'><span class='Estilo11'>Documentos</span></td>";
echo "<td width='21'><input type='radio' id='radio9' value='3' name='dtecom'></td>";
echo "<td width='46'><span class='Estilo11'>Precio</span></td>";
echo "<td width='24'><input type='radio' id='radio10' name='dtecom' value='4'></td>";
}
elseif($qdtecompra1==3){
echo "<td><span class='Estilo11'>Retoma</span></td>";
echo "<td width='22'><input type='radio' value='1' id='radio7' name='dtecom' ></td>";
echo "<td width='82'><span class='Estilo11'>Financiacion</span></td>";
echo "<td width='23'><input type='radio' value='2' id='radio8' name='dtecom' ></td>";
echo "<td width='98'><span class='Estilo11'>Documentos</span></td>";
echo "<td width='21'><input type='radio' id='radio9' value='3' name='dtecom' checked='checked'></td>";
echo "<td width='46'><span class='Estilo11'>Precio</span></td>";
echo "<td width='24'><input type='radio' id='radio10' name='dtecom' value='4'></td>";
}
elseif($qdtecompra1==4){
echo "<td><span class='Estilo11'>Retoma</span></td>";
echo "<td width='22'><input type='radio' value='1' id='radio7' name='dtecom' ></td>";
echo "<td width='82'><span class='Estilo11'>Financiacion</span></td>";
echo "<td width='23'><input type='radio' value='2' id='radio8' name='dtecom' ></td>";
echo "<td width='98'><span class='Estilo11'>Documentos</span></td>";
echo "<td width='21'><input type='radio' id='radio9' value='3' name='dtecom' ></td>";
echo "<td width='46'><span class='Estilo11'>Precio</span></td>";
echo "<td width='24'><input type='radio' id='radio10' name='dtecom' value='4' checked='checked'></td>";
}
?>
</tr>
</table>
<center><input type="submit" value="Actualizar estado" class="botonR"/></center>
</form>
</fieldset>
<div id="result"></div>
</body>
</html>