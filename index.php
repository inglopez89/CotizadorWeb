<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/estilos.css" rel="stylesheet" type="text/css">
<title>Iniciar</title>
<script language="javascript" src="javascript/jquery-1.3.min.js"></script>
<script type="text/javascript">
function getDataServer(url, vars){
     var xml = null;
     try{
         xml = new ActiveXObject("Microsoft.XMLHTTP");
     }catch(expeption){
         xml = new XMLHttpRequest();
     }
     xml.open("GET",url + vars, false);
     xml.send(null);
     if(xml.status == 404) alert("Url no valida");
     return xml.responseText;
}
function asesor(){
     
    var         id=document.getElementById('doc').value;
	var telefono   = getDataServer("telase.php","?doc="+id);
	var nombre     = getDataServer("nombrease.php","?doc="+id);
	var nombre2    = getDataServer("nombrease2.php","?doc="+id);
	var apellido   = getDataServer("apellidoase.php","?doc="+id);
	var apellido2  = getDataServer("apellidoase2.php","?doc="+id);
	var emailase   = getDataServer("emailase.php","?doc="+id);
    if(nombre!='' ){
		document.form.tel.value=telefono;
		document.form.nom.value=nombre;
		document.form.nom2.value=nombre2;
		document.form.ape.value=apellido;
		document.form.ape2.value=apellido2;
		document.form.email.value=emailase;
	       
    }
    else{
		document.form.nom.value='';
		document.form.nom2.value='';
		document.form.ape.value='';
		document.form.ape2.value='';
		document.form.tel.value='';
        document.form.email.value='';
    }
}
</script>
</head>

<body>
<fieldset style="height:200px; width:900px; margin-left:120px">
<form action="iniciar.php" method="post" id="form" name="form"  class="labelW">
<br />
<table width="849" height="143" border="0" align="center" bgcolor="#990000" id="tbl" style="border-collapse:separate" name=tbl>

      <td width="78">
      <tr  height="5"></tr></td>

    <tr >
      <td>Documento </td>
      <td width="179"><input type="text" id="doc" name="doc" size="25" onblur="asesor()"/></td>
      <td width="126">Primer Nombre</td>
      <td width="146"><input type="text" id="nom" name="nom" disabled="disabled" size="22" style="background-color: #CCCCCC;"/></td>
      <td width="120">Segundo Nombre</td>
      <td width="149"><input type="text" id="nom2" name="nom2" disabled="disabled" size="22" style="background-color: #CCCCCC;"/></td>
    </tr>
	
    <tr>
      <td></td>
      <td></td>
      <td>Primer Apellido</td>
      <td><input type="text" id="ape" name="ape" disabled="disabled" size="22"  style="background-color: #CCCCCC;  "/></td>
      <td>Segundo Apellido</td>
      <td><input type="text" id="ape2" name="ape2" disabled="disabled" size="22" style="background-color: #CCCCCC;"/></td>
    </tr>
    <tr >
      <td>Evento</td>
      <td><select id="seleven"  name="seleeven">
          <option value="0">--Seleccione un Evento--</option>
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
      <td>Telefono</td>
      <td><input type="text" id="tel" name="tel" disabled="disabled" size="22" style="background-color: #CCCCCC;"/></td>
    </tr>
    <tr >
      <td></td>
      <td></td>
      <td>Cuenta de Correo</td>
      <td colspan="6"><input type="text" id="email" name="email" disabled="disabled" size="69" style="background-color: #CCCCCC;"/>
      </td>
    </tr>
    <tr >
      <td></td>
    </tr>
    <tr >
      <td colspan="6" align="center"><input name="Ingresar" type="submit"  class="botonG" id="Ingresar" value="Ingresar" />
      </td>
    </tr>
    <tr height="5">
      <td></td>
    </tr>
  </table>
</form>
</fieldset>
<div id="result"></div>

</body>
</html>
