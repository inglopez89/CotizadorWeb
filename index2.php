<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Captura de Pedidos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="Estilos/EstiloFormas.css" rel="stylesheet" type="text/css">

<style type="text/css">
<!--
.Estilo1 {font-size: 11px}
-->}
</style>
</head>
<head>
	<meta http-eq
	uiv="content-type" content="text/html;charset=iso-8859-1">
	<title>Clientes</title>
	<script src="javascript/SpryValidationTextField.js" type="text/javascript"></script>
	<script type="text/javascript" src="javascript/jquery1.js"></script>
	<script type="text/javascript" src="javascript/jquery.js"></script>
    <script type="text/javascript" src="javascript/jquery.autocomplete.js"></script>
	<link rel="stylesheet" href="css/jquery.autocomplete.css" type="text/css" />
    <script type="text/javascript" src="javascript/ajax-dynamic-list.js"></script>
	<script src="javascript/jquery-1.1.3.1.pack.js" type="text/javascript"></script>
    <script src="javascript/jquery.history_remote.pack.js" type="text/javascript"></script>
    <script src="javascript/jquery.tabs.pack.js" type="text/javascript"></script>
	<script src="javascript/calendarmod.js"></script>
	<link href="estilos/calendar.css" rel="stylesheet" type="text/css">
	<link href="css/SpryValidationTextField.css" rel="stylesheet" type="text/css" /> 
	<link rel="stylesheet" href="css/jquery.tabs.css" type="text/css" media="print, projection, screen">
	<link href="css/estilos.css" rel="stylesheet" type="text/css">
        <!-- Additional IE/Win specific style sheet (Conditional Comments) -->
        <!--[if lte IE 7]>
        <link rel="stylesheet" href="jquery.tabs-ie.css" type="text/css" media="projection, screen">
        <![endif]-->
<script type="text/javascript">

//-->
function addRow(a,b) {

      var fila  = document.createElement('tr');
	  var columna0 = document.createElement('td');
      var columna1 = document.createElement('td');
      var columna2 = document.createElement('td');
	  var columna3 = document.createElement('td');
	  var columna4 = document.createElement('td');
	  var columna5 = document.createElement('td');
	  var columna6 = document.createElement('td');
	  var columna7 = document.createElement('td');
	  var columna8 = document.createElement('td');
	  var celda0 = document.createElement('input');
      var celda1 = document.createElement('input');
      var celda2 = document.createElement('input'); 
	  var celda3 = document.createElement('input');
	  var celda4 = document.createElement('input');
	  var celda5 = document.createElement('input');
	  var celda6 = document.createElement('input');
	  var celda7 = document.createElement('input');
	  var celda8 = document.createElement('textarea');
      var tabla  = document.getElementById('tbl');
	  var lastRow = tabla.rows.length;
	  var iteration = lastRow;

	  var reg = 0;
	  var itipo  = ' ';	

	  for (var n=0;n<=100; n++){
		var reg = n;
		var itipo  = 'ctipo'+reg;				
		if ( document.getElementById(itipo) )
		  {
		   iteration = reg + 1;
		  }
		}

//
      celda0.setAttribute("type","checkbox");
	  celda0.setAttribute("name",'chk'+iteration);   
	  celda0.setAttribute("id",'chk'+iteration);
//	  
	  celda1.setAttribute("type","text");
      celda1.setAttribute("size","1");
	  celda1.setAttribute('maxLength', '2');
	  celda1.setAttribute("name",'citem'+iteration);
	  celda1.setAttribute("id",'citem'+iteration);
	  celda1.style.cssText='font-style:veranda; font-size:12px; font-weight:bold;height:14px;border-style:ridge;text-align:center;';
	  celda1.setAttribute("value",iteration);

//
	  celda2.setAttribute("type","text");
      celda2.setAttribute("size","25");
	  celda2.setAttribute("name",'vhcint'+iteration);
	  celda2.setAttribute("id",'vhcint'+iteration);
	  celda2.style.cssText='font-style:veranda; font-size:12px; height:14px; font-weight:bold;text-transform:uppercase;border-style:ridge;text-align:center;';
	  celda2.setAttribute('maxLength', '30');
//
	  celda3.setAttribute("type","text");
      celda3.setAttribute("size","14");
	  celda3.setAttribute("name",'vhcval'+iteration);
	  celda3.setAttribute("id",'vhcval'+iteration);
	  celda3.style.cssText='font-style:veranda;font-size:12px;height:14px;border-style:ridge;text-align:center;';
	  celda3.setAttribute('maxLength', '15');
//
	  celda4.setAttribute("type","text");
      celda4.setAttribute("size","14");
	  celda4.setAttribute("name",'vhccuotaini'+iteration);
	  celda4.setAttribute("id",'vhccuotaini'+iteration);
	  celda4.style.cssText='font-style:veranda;font-size:12px;height:14px;border-style:ridge;text-align:center;';
	  celda4.setAttribute('maxLength', '15');
//
	  celda5.setAttribute("type","text");
      celda5.setAttribute("size","14");
	  celda5.setAttribute("name",'vhcsaldo'+iteration);
	  celda5.setAttribute("id",'vhcsaldo'+iteration);
	  celda5.style.cssText='font-style:veranda;font-size:12px;height:14px;border-style:ridge;text-align:center;';
	  celda5.setAttribute('maxLength', '15');

//
	  celda6.setAttribute("type","text");
      celda6.setAttribute("size","3");
	  celda6.setAttribute("name",'plazmesvhc'+iteration);
	  celda6.setAttribute("id",'plazmesvhc'+iteration);
	  celda6.style.cssText='font-style:veranda; font-size:12px; height:14px; font-weight:bold;text-transform:uppercase;border-style:ridge;text-align:center;';
	  celda6.setAttribute('maxLength', '6');

//
	  celda7.setAttribute("type","text");
      celda7.setAttribute("size","14");
	  celda7.setAttribute("name",'valmesaproxi'+iteration);
	  celda7.setAttribute("id",'valmesaproxi'+iteration);
	  celda7.style.cssText='font-style:veranda;font-size:12px;height:14px;border-style:ridge;text-align:center;';
	  celda7.setAttribute('maxLength', '15');

//
	  celda8.setAttribute("type","textarea");
      celda8.setAttribute("size","30");
	  celda8.setAttribute("name",'accesor'+iteration);
	  celda8.setAttribute("id",'accesor'+iteration);
	  celda8.style.cssText='font-style:veranda; font-size:12px; height:14px; font-weight:bold;text-transform:uppercase;border-style:ridge;text-align:center;';
	  celda8.setAttribute('maxLength', '30');

//

      columna0.appendChild(celda0);
	  columna1.appendChild(celda1);
      columna2.appendChild(celda2);
      columna3.appendChild(celda3);
      columna4.appendChild(celda4);
      columna5.appendChild(celda5);
      columna6.appendChild(celda6);
      columna7.appendChild(celda7);
      columna8.appendChild(celda8);


//
      fila.appendChild(columna0);
	  fila.appendChild(columna1);
	  fila.appendChild(columna2);
      fila.appendChild(columna3);
      fila.appendChild(columna4);
      fila.appendChild(columna5);
      fila.appendChild(columna6);
      fila.appendChild(columna7);
      fila.appendChild(columna8);



tabla.tBodies(0).appendChild(fila);
    }
//-->

function deleteRow(tableID) {   
    try {   
        var table = document.getElementById(tableID);   
        var rowCount = table.rows.length;   
  
        for(var i=0; i<rowCount; i++) {   
           var row = table.rows[i];   
           var chkbox = row.cells[0].childNodes[0];   
           if(null != chkbox && true == chkbox.checked) {   
               table.deleteRow(i);   
               rowCount--;   
               i--; 

            }   
  
        }


        }catch(e) {   
           //alert(e);   
       }   

    }   


//-->
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
function cliente(){
     
     var id=document.getElementById('ced').value;
	var direccion  = getDataServer("dir.php","?doc="+id);
	var email      = getDataServer("email.php","?doc="+id);
	var telefono   = getDataServer("tel.php","?doc="+id);
	var nombre     = getDataServer("nombre.php","?doc="+id);
	var apellido   = getDataServer("apellido.php","?doc="+id);
	var rcli       = getDataServer("regcli.php","?doc="+id);
    if(nombre!='' || direccion!='' || email!='' || telefono!='' || apellido!='' || rcli!=''){
		document.form.dir.value=direccion;
		document.form.email.value=email;
		document.form.tel.value=telefono;
		document.form.nombre.value=nombre;
		document.form.apellido.value=apellido;
	    document.form.r_cli.value=rcli;
    }
    else{
	    document.form.dir.value='';
		document.form.email.value='';
		document.form.tel.value='';
		document.form.nombre.value='';
		document.form.apellido.value='';
	    document.form.r_cli.value='';

    }
}
function cleangetdata(){
var no_retoma=document.getElementById('no_retoma').value;
var no_cotiza=document.getElementById('no_cotiza').value;
var r_cli=document.getElementById('r_cli').value;
var rcli=getDataServer("rcli.php","?r_cli="+r_cli);
var nocotiza=getDataServer("nocotiza.php","?no_cotiza="+no_cotiza);
var noretoma=getDataServer("noretoma.php","?no_cotiza="+nocotiza+"&no_retoma="+no_retoma);
document.form.no_retoma.value=noretoma;
document.form.no_cotiza.value=nocotiza;
document.form.r_cli.value=rcli;
document.form.no_vehi.value='';
document.form.estneg.value='';
document.form.estcli.value='';
document.form.vhcint.value='';
document.form.vhcval.value='';
document.form.vhccuotaini.value='';
document.form.vhcsaldo.value='';
document.form.plazmesvhc.value='';
document.form.valmesaproxi.value='';
document.form.valmatri.value='';
document.form.valseguro.value='';
document.form.valsoat.value='';
document.form.accesor.value='';
document.form.obser.value='';
}
function enviarr(){
setTimeout('cleangetdata()',1000);
}
function cleantotal(){
document.form.no_retoma.value='';
document.form.no_vehi.value='';
document.form.ced.value='';
document.form.dir.value='';
document.form.email.value='';
document.form.tel.value='';
document.form.nombre.value='';
document.form.apellido.value='';
document.form.no_cotiza.value='';
document.form.vhcint.value='';
document.form.vhcval.value='';
document.form.vhccuotaini.value='';
document.form.vhcsaldo.value='';
document.form.plazmesvhc.value='';
document.form.valmesaproxi.value='';
document.form.valmatri.value='';
document.form.valseguro.value='';
document.form.valsoat.value='';
document.form.accesor.value='';
document.form.obser.value='';
document.form.rtm.value='';
document.form.verrtm.value='';
document.form.añortm.value='';
document.form.plartm.value='';
document.form.kmrtm.value='';
document.form.valrtm.value='';
document.form.r_cli.value='';
}
function limpiarrtm(){
var no_cotiza=document.getElementById('no_cotiza').value;
var no_vehi=document.getElementById('no_vehi').value;
var nocotiza=getDataServer("nocotiza.php","?no_cotiza="+no_cotiza);
var novehi=getDataServer("novehi.php","?no_cotiza="+nocotiza+"&no_vehi="+no_vehi);
document.form.no_cotiza.value=nocotiza;
document.form.no_vehi.value=novehi;
document.form.rtm.value='';
document.form.verrtm.value='';
document.form.añortm.value='';
document.form.plartm.value='';
document.form.kmrtm.value='';
document.form.valrtm.value='';

}

function enviarlimpiarrtm(){
setTimeout('limpiarrtm()',2000);

}
function cleant(){
setTimeout('cleantotal()',2000);
}
</script>      
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
function pulsar(e) { 
  tecla = (document.all)? e.keyCode :e.which; 
  return (tecla!=13);  
} 

  function validacion(form)
{

   if (form.nombre.value == "" || form.ced.value == "" || form.dir.value=='' || form.tel.value=='' || form.email.value=='' || apellido=='')
   {
      alert("Datos requeridos sin Diligenciar");
	  window.location.reload(); 
	   return false;
   }
   else 
    return true;
}
</script> 
        <style type="text/css" media="screen, projection">

            /* Not required for Tabs, just to make this demo look better... */

            body {
                font-size: 16px; /* @ EOMB */
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
	<style type="text/css">
	
	/* START CSS NEEDED ONLY IN DEMO */
	
	#mainContainer{
		width:660px;
		margin:0 auto;
		text-align:left;
		height:100%;
		
		border-left:3px double #000;
		border-right:3px double #000;
	}
	#formContent{
		padding:5px;
	}
	/* END CSS ONLY NEEDED IN DEMO */
	
	
	/* Big box with list of options */
	#ajax_listOfOptions{
		position:absolute;	/* Never change this one */
		width:175px;	/* Width of box */
		height:250px;	/* Height of box */
		overflow:auto;	/* Scrolling features */
		border:1px solid #317082;	/* Dark green border */
		background-color:#FFF;	/* White background color */
    color: black;
		text-align:left;
		font-size:0.9em;
		z-index:100;
	}
	#ajax_listOfOptions div{	/* General rule for both .optionDiv and .optionDivSelected */
		margin:1px;		
		padding:1px;
		cursor:pointer;
		font-size:0.9em;
	}
	#ajax_listOfOptions .optionDiv{	/* Div for each item in list */
		
	}
	#ajax_listOfOptions .optionDivSelected{ /* Selected item in the list */
		background-color:#317082;
		color:#FFF;
	}
	#ajax_listOfOptions_iframe{
		background-color:#F00;
		position:absolute;
		z-index:5;
	}
	
	form{
		display:inline;
	}
    .Estilo8 {color: #FFFFFF}
    </style>
</head>
<body>
<form method="post" id="form" action="in_cotiza.php" name="form" onKeyPress="return pulsar(event)" >
<fieldset id="f1">
<table width="868" border="0">
<tr>
<td><label>Documento<font color="#FF0000">*</font></label></td>
<td><span id="sprytextfield7"><label>
<input type="text" id="ced" name="ced" onChange="cliente()"></label>
<span class="textfieldRequiredMsg"><strong>Falta Documento.</strong></span><span class="textfieldInvalidFormatMsg"><strong>Solo Datos Numericos</strong></span></span></td>
<td width="70"><label for="country">Nombres</label><font color="#FF0000" size="+2">*</font></td>
<td width="165"><span id="sprytextfield2"><input type="text" id="nombre" name="nombre"><span class="textfieldRequiredMsg"><strong>Debe Escribir Nombre</strong></span></span>
<td width="57"><label for="apellido">Apellidos<font color="#FF0000">*</font></label></td>
<td width="145"><span id="sprytextfield8">
<input type="text" id="apellido" name="apellido"><span class="textfieldRequiredMsg"><strong>Falta Apellido</strong></span></span></td>
<td>No_cotizacion</td>
<td><input type="text" id="no_cotiza" name="no_cotiza" size="9" disabled="disabled"></td>	
</tr>
<td height="28"><label for="email">Email</label><font color="#FF0000">*</font></td>
<td><span id="sprytextfield6"><input type="text" id="email" name="email"><span class="textfieldRequiredMsg"><strong>Falta E-mail</strong></span><span class="textfieldInvalidFormatMsg"><strong>email:usuario@dominio.com</strong></span></span></td>
<td><label for="direccion">Direccion</label><font color="#FF0000">*</font></td>
<td><span id="sprytextfield9"><input type="text" id="dir" name="dir"><span class="textfieldRequiredMsg"><strong>Falta Direccion</strong></span></span></td>
<td><label>Telefono</label><font color="#FF0000">*</font></td>
<td> <span id="sprytextfield4"><input type="text" id="tel" name="tel" maxlength="10"><span class="textfieldRequiredMsg"><strong>Falta Telefono</strong></span>
<span class="textfieldInvalidFormatMsg"><strong>Formato Tel No Valido</strong></span></span></td>
<td colspan="2"><font color="#FF0000" face="Arial, Helvetica, sans-serif" size="+2">Los campos marcados con * son obligatorios
  
</font></td>
</tr>
</table>
<fieldset>
  <div id="container-5">
            <ul>
                <li><a href="#fragment-13"><span>Vehiculo de Interes</span></a></li>
                <li><a href="#fragment-14"><span>Retoma Vehiculo</span></a></li>
            </ul>
<div id="fragment-13">
<table width="727" id="table1">
<tr>
  <td width="155"><span class="Estilo8 Estilo8">
    <label for="country">
<div align="right">Vehiculo de interes:</div>
    </label>
  </span></td>
 <input name="r_cli" type="text" disabled="disabled" id="r_cli" size="1">
<input name="button" type=button id="button" onClick='javascript:addRow(1, 1)'  class="boton"  value='Adicionar Item';>
<input type=button value='Borrar Item' class="boton" onClick="deleteRow('tbl')" />
<input type="submit" name="Submit" value="Enviar" />

        <table name=tbl id="tbl" border="1" style="border-collapse:separate">
          <tr> 
            <th width="24" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1" >&nbsp;</th>
            <th width="25" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Item</th>
            <th width="162" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Vehículo</font>
            <th width="82" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Valor</font></th>
            <th width="82" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Cta Inicial</font></th>
            <th width="82" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Saldo</font></th>
            <th width="32" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Meses</th>
            <th width="82" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Cta Mensual</th>
            <th width="192" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Accesorios</th>
          </tr>
          <tr>
<td><label><input type="checkbox" name="chk1"  id="chk1" value="on"   align="left" onclick="javascript:marcardespiece('tbl')"/></label></td>
<td><font size="2"><input name="citem1" type="text"  id="citem1" style="font-style:veranda; font-size:12px; height:14px;border-style:ridge;text-align:center;"value="1" size="1" maxlength="3" /></font></td>
            <td><input name="vhcint1" type="text" class="ac_input" id="1" value="" size="30"
			style="font-style:veranda; font-size:12px; position: relative; height:14px;border-style:ridge;text-align:center;"></td>


            <td><span id="sprytextfield10"><input type="text" id="vhcval1" name="vhcval1" 
			         style="font-style:veranda;font-size:12px;height:14px;border-style:ridge;text-align:center;"
			         size="14" maxlength="14  action="this.value = NumberFormat(this.value, '', '.', ',')"/>
					 <span class="textfieldInvalidFormatMsg">
                     <strong>Solo numeros</strong></span></span>	
			</td>
            <td><span id="sprytextfield11"><input type="text" id="vhccuotaini1" name="vhccuotaini1"
			         style="font-style:veranda;font-size:12px;height:14px;border-style:ridge;text-align:center;"
			         size="14" maxlength="14"/>
					 <span class="textfieldInvalidFormatMsg">
                     <strong>Solo numeros</strong></span>
			</span></td>
			
            <td><span id="sprytextfield12"><input type="text" id="vhcsaldo1" name="vhcsaldo1"
			         style="font-style:"veranda;font-size:12px;height:14px;border-style:ridge;text-align:center;"
			         size="14" maxlength="14"/>
					 <span class="textfieldInvalidFormatMsg">
                     <strong>Solo numeros</strong></span>
			</span></td>
			
            <td><div align="left"> <font size="2">  
                <input name="plazmesvhc1" type="text"  id="plazmesvhc1"
				style="font-style:veranda; font-size:12px; font-weight:bold;height:14px;border-style:ridge;text-align:center;"
				size="3" maxlength="7">
            </font></div></td>

            <td><div align="left"><span id="sprytextfield13"><input type="text" id="valmesaproxi1" name="valmesaproxi1"
			         style="font-style:veranda;font-size:12px;height:14px;border-style:ridge;text-align:center;"
			         size="14" maxlength="14"/>
					 <span class="textfieldInvalidFormatMsg">
                     <strong>Solo numeros</strong></span>
			</span></div></td>

			<td rowspan="2" valign="middle" align="left"><font size="2">
				  <textarea cols="30" rows="1" id="accesor1" name="accesor1" style="font-style:veranda;font-size:12px;height:14px;border-style:ridge;text-align:center;"></textarea>
		  </font>          </tr>
	</table>

			
<table width="532">
<tr>
<td height="24"><div align="left"><span class="Estilo8">Estado del Cliente</span>:</div></td>
<td><span class="Estilo8">Frio
    <input type="radio" value="1" id="radio1" name="estcli" checked="checked">
  Tibio
  <input type="radio" value="2" id="radio2" name="estcli">
  Caliente
  <input type="radio" value="3" id="radio3"name="estcli">
</span> </td>
</tr>
<tr>
<td width="162" height="25"><div align="left" class="Estilo8">Estado del Negocio:</div></td>
<td width="358"><span class="Estilo8">Cotizacion
    <input type="radio" value="1" id="radio4" name="estneg" checked="checked">
    Separacion
    <input type="radio" name="estneg" id="radio5" value="2">
    OR. De Compra
    <input type="radio" id="radio6" value="3" name="estneg">
	</span></td>
</tr>
<tr>
<td height="24"><div align="left" class="Estilo8">Que Detiene la compra?:</div></td>
<td><span class="Estilo8">Retoma
    <input type="radio" value="1" id="radio7" name="dtecom" checked="checked">
  Financiacion
  <input type="radio" value="2" id="radio8" name="dtecom">
  Documentos
  <input type="radio" id="radio9" value="3" name="dtecom">
  Precio
  <input type="radio" id="radio10" name="dtecom" value="4">
</span></td>
</tr>
</table>
<input type="submit" value="Nuevo Vehiculo" onClick="enviarr()">
</div>
<div id="fragment-14">			
<table width="727" height="118">
<tr>
  <td width="74"><span class="Estilo8">
    <label>Retoma: Marca</label>
  </span> </td>
  <td width="120"><input name="rtm" type="text" id="rtm"  size="20"></td>
<td width="65"><div align="center" class="Estilo8">Version: </div></td>
<td width="130"><input name="verrtm" type="text" id="verrtm"  size="20"></td>
<td width="147">
  <label>
  <div align="center" class="Estilo8">
    <div align="right">Año:</div>
  </div>
  </label>  </td>
<td width="130"><span id="sprytextfield17">
  <input type="text" id="añortm" name="añortm" size="20"><span class="textfieldInvalidFormatMsg">
<strong>Solo numeros</strong></span></span></td>
<td width="29"><input type="text" id="no_retoma"  size="1" disabled="disabled"></td>
</tr>
<tr>
  <td height="56"><span class="Estilo8">
    <label>Placa</label>
  </span> </td>
  <td><input name="plartm" type="text" id="plartm"  size="20"></td>
<td><div align="center" class="Estilo8">KM: </div></td>
<td><span id="sprytextfield18"><input name="kmrtm" type="text" id="kmrtm" size="20"><span class="textfieldInvalidFormatMsg">
<strong>Solo numeros</strong></span></span></td>
<td>
  <label>
  <div align="center" class="Estilo8">Valor Retoma(Aprox):</div>  
  </label>  </td>
<td width="130"><span id="sprytextfield19">
  <input type="text" id="valrtm" name="valrtm" size="20" ><span class="textfieldInvalidFormatMsg">
<strong>Solo numeros</strong></span></span></td>
</tr>
</table>
<input type="submit" value="Nueva Retoma" onClick="enviarlimpiarrtm()">
</div>
</div>
</fieldset>
<script type="text/javascript">
     $(function() {
              $('#container-5').tabs({ fxSlide: true, fxFade: true, fxSpeed: 'normal' });
            });
			</script>
<center>
<button type="submit" onClick="cleant()">
<font size="+3" face="Arial, Helvetica, sans-serif">Nueva Cotizacion</font>
</button>
</center>
<center><span id="resultados"></span></center>
</fieldset>	
</form>
<script type="text/javascript">
  function findValue(li) {
  	if( li == null ) return alert("No match!");

  	// if coming from an AJAX call, let's use the CityId as the value
  	if( !!li.extra ) var sValue = li.extra[0];

  	// otherwise, let's just display the value in the text box
  	else var sValue = li.selectValue;

  	//alert("The value you selected was: " + sValue);
  }

  function selectItem(li) {
    	findValue(li);
  }

  function formatItem(row) {
    	return row[0];
  }

  function lookupAjax(){
  	var oSuggest = $("#vhcint")[0].autocompleter;
    oSuggest.findValue();
  	return false;
  }

  function lookupLocal(){
    	var oSuggest = $("#vhcint")[0].autocompleter;

    	oSuggest.findValue();

    	return false;
  }
  
  
    $("#vhcint").autocomplete(
      "autocomplete.php",
      {
  			delay:10,
  			minChars:1,
  			matchSubset:1,
  			matchContains:1,
  			cacheLength:10,
  			onItemSelect:selectItem,
  			onFindValue:findValue,
  			formatItem:formatItem,
  			autoFill:true
  		}
    );
  
</script>
<script type="text/javascript">
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "custom", {validateOn:["change"]});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "integer", {validateOn:["change"]});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "custom", {validateOn:["change"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "integer", {validateOn:["change"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "custom", {validateOn:["change"]});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "email", {validateOn:["change"]});
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "custom", {validateOn:["change"]});
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10", "integer", {validateOn:["change"]});
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11", "integer", {validateOn:["change"]});
var sprytextfield12 = new Spry.Widget.ValidationTextField("sprytextfield12", "integer", {validateOn:["change"]});
var sprytextfield13 = new Spry.Widget.ValidationTextField("sprytextfield13", "integer", {validateOn:["change"]});
var sprytextfield14 = new Spry.Widget.ValidationTextField("sprytextfield14", "integer", {validateOn:["change"]});
var sprytextfield15 = new Spry.Widget.ValidationTextField("sprytextfield15", "integer", {validateOn:["change"]});
var sprytextfield16 = new Spry.Widget.ValidationTextField("sprytextfield16", "integer", {validateOn:["change"]});
var sprytextfield17 = new Spry.Widget.ValidationTextField("sprytextfield17", "integer", {validateOn:["change"]});
var sprytextfield18 = new Spry.Widget.ValidationTextField("sprytextfield18", "integer", {validateOn:["change"]});
var sprytextfield19 = new Spry.Widget.ValidationTextField("sprytextfield19", "integer", {validateOn:["change"]});
</script>            
</body>
</html>