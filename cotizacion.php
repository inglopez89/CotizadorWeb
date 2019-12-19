
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<link href="css/estilos.css" rel="stylesheet" type="text/css">

<html>

<head>

	<meta http-equiv="content-type" content="text/html;charset=iso-8859-1">

	<title>Clientes</title>
	<link href="css/blccbx.css" rel="stylesheet" type="text/css"/>
	
    <script src="javascript/bljjShadowbx1.js" type="text/javascript"/></script>

	<script src="javascript/SpryValidationTextField.js" type="text/javascript"></script>

	<script type="text/javascript" src="javascript/jquery1.js"></script>

	<script type="text/javascript" src="javascript/jquery.js"></script>

	<script language="javascript" src="javascript/jquery-1.3.min.js"></script>

    <script type="text/javascript" src="javascript/jquery.autocomplete.js"></script>

	<link rel="stylesheet" href="css/jquery.autocomplete.css" type="text/css" />

    <script type="text/javascript" src="javascript/ajax-dynamic-list.js"></script>

	<script src="javascript/jquery-1.1.3.1.pack.js" type="text/javascript"></script>

    <script src="javascript/jquery.history_remote.pack.js" type="text/javascript"></script>

    <script src="javascript/jquery.tabs.pack.js" type="text/javascript"></script>

	<script src="javascript/moneda1.js" type="text/javascript"></script>

	<link href="css/SpryValidationTextField.css" rel="stylesheet" type="text/css" /> 

	<link rel="stylesheet" href="css/jquery.tabs-ie.css" type="text/css" media="projection, screen">

	<link rel="stylesheet" href="css/jquery.tabs.css" type="text/css" media="print, projection, screen">

	<link href="css/estilos.css" rel="stylesheet" type="text/css">

	 

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

               <!-- $('#result').html(data);-->

            }

        })        

        return false;

    }); 

})  



function addRow(a,b) {



      var fila= document.createElement('tr');

	  var columna0 = document.createElement('td');

      var columna1 = document.createElement('td');

      var columna2 = document.createElement('td');

	  var columna3 = document.createElement('td');

	  var columna4 = document.createElement('td');

	  var columna5 = document.createElement('td');

	  var columna6 = document.createElement('td');

	  var columna7 = document.createElement('td');

	  var columna8 = document.createElement('td');

	  var columna9 = document.createElement('td');

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

	  celda0.style.cssText='font-style:veranda; font-size:12px; font-weight:bold;height:14px;border-style:ridge;text-align:center;';

	  celda0.setAttribute("value",iteration);

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

      celda2.setAttribute("size","40");

	  celda2.setAttribute("name",'vhcint'+iteration);

	  celda2.setAttribute("id","vhcint2");  

	  celda2.setAttribute("class","ac_input");

	  celda2.setAttribute("value",'');         

	  celda2.style.cssText='font-style:veranda; font-size:12px; position: relative; height:14px;border-style:ridge;text-align:center;';

	  celda2.setAttribute('maxLength', '30');

//

	  celda3.setAttribute("type","text");

      celda3.setAttribute("size","14");

	  celda3.setAttribute("name",'vhcval'+iteration);

	  celda3.setAttribute("id","vhcval"+iteration);

	  celda3.setAttribute("onBlur","pasval5()");

	  celda3.style.cssText='font-style:veranda;font-size:12px;height:14px;border-style:ridge;text-align:center;';

	  celda3.setAttribute('maxLength', '15');

//

	  celda4.setAttribute("type","text");

      celda4.setAttribute("size","14");

	  celda4.setAttribute("name",'vhccuotaini'+iteration);

	  celda4.setAttribute("id",'vhccuotaini'+iteration);

	  celda4.setAttribute("onkeypress","return(currencyFormat(this,',','.',event))");

	  celda4.style.cssText='font-style:veranda;font-size:12px;height:14px;border-style:ridge;text-align:center;';

	  celda4.setAttribute('maxLength', '15');

//

	  celda5.setAttribute("type","text");

      celda5.setAttribute("size","20");

	  celda5.setAttribute("name",'vhcsaldo'+iteration);

	  celda5.setAttribute("id",'vhcsaldo'+iteration);

	  celda5.setAttribute("onkeypress","return(currencyFormat(this,',','.',event))");

	  celda5.style.cssText='font-style:veranda;font-size:12px;height:14px;border-style:ridge;text-align:center;';

	  celda5.setAttribute('maxLength', '20');



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

	  celda7.setAttribute("onkeypress","return(currencyFormat(this,',','.',event))");

	  celda7.style.cssText='font-style:veranda;font-size:12px;height:14px;border-style:ridge;text-align:center;';

	  celda7.setAttribute('maxLength', '15');



//

	  celda8.setAttribute("type","textarea");

      celda8.setAttribute("cols","23");

	  celda8.setAttribute("rows","1");

	  celda8.setAttribute("onKeyUp",'javascript:this.value=this.value.toUpperCase();');

	  celda8.setAttribute("name",'accesor'+iteration);

	  celda8.setAttribute("id",'accesor'+iteration);

	  celda8.style.cssText=='font-style:veranda; font-size:12px; height:14px; font-weight:bold;text-transform:uppercase;border-style:ridge;text-align:center;';

	  celda8.setAttribute('maxLength', '28');



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

	

	

//funciones para añadir y eliminar retoma	

	function addRowr(a,b) {



      var fila= document.createElement('tr');

	  var columna0 = document.createElement('td');

      var columna1 = document.createElement('td');

      var columna2 = document.createElement('td');

	  var columna3 = document.createElement('td');

	  var columna4 = document.createElement('td');

	  var columna5 = document.createElement('td');

	  var columna6 = document.createElement('td');

	  var columna7 = document.createElement('td');

	  var celda0 = document.createElement('input');

      var celda1 = document.createElement('input');

      var celda2 = document.createElement('input'); 

	  var celda3 = document.createElement('input');

	  var celda4 = document.createElement('input');

	  var celda5 = document.createElement('input');

	  var celda6 = document.createElement('input');

	  var celda7 = document.createElement('input');

      var table  = document.getElementById('tblr');

	  var lastRow = table.rows.length;

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

	  celda0.style.cssText='font-style:veranda; font-size:12px; font-weight:bold;height:14px;border-style:ridge;text-align:center;';

	  celda0.setAttribute("value",iteration);

//	  

	  celda1.setAttribute("type","text");

      celda1.setAttribute("size","1");

	  celda1.setAttribute('maxLength', '2');

	  celda1.setAttribute("name",'citemr'+iteration);

	  celda1.setAttribute("id",'citemr'+iteration);

	  celda1.style.cssText='font-style:veranda; font-size:12px; font-weight:bold;height:14px;border-style:ridge;text-align:center;';

	  celda1.setAttribute("value",iteration);



//

	  celda2.setAttribute("type","text");

      celda2.setAttribute("size","20");

	  celda2.setAttribute("name",'rtm'+iteration);

	  celda2.setAttribute("id",'rtm'+iteration);

	  celda2.style.cssText='font-style:veranda; font-size:12px; height:14px; font-weight:bold;text-transform:uppercase;border-style:ridge;text-align:center;';

	  celda2.setAttribute('maxLength', '30');

//

	  celda3.setAttribute("type","text");

      celda3.setAttribute("size","20");

	  celda3.setAttribute("name",'verrtm'+iteration);

	  celda3.setAttribute("id",'verrtm'+iteration);

	  celda3.style.cssText='font-style:veranda;font-size:12px;height:14px;border-style:ridge;text-align:center;';

	  celda3.setAttribute('maxLength', '15');

//

	  celda4.setAttribute("type","text");

      celda4.setAttribute("size","10");

	  celda4.setAttribute("name",'anortm'+iteration);

	  celda4.setAttribute("id",'anortm'+iteration);

	  celda4.style.cssText='font-style:veranda;font-size:12px;height:14px;border-style:ridge;text-align:center;';

	  celda4.setAttribute('maxLength', '15');

//

	  celda5.setAttribute("type","text");

      celda5.setAttribute("size","20");

	  celda5.setAttribute("name",'plartm'+iteration);

	  celda5.setAttribute("id",'plartm'+iteration);

	  celda5.style.cssText='font-style:veranda;font-size:12px;height:14px;border-style:ridge;text-align:center;';

	  celda5.setAttribute('maxLength', '15');



//

	  celda6.setAttribute("type","text");

      celda6.setAttribute("size","16");

	  celda6.setAttribute("name",'kmrtm'+iteration);

	  celda6.setAttribute("id",'kmrtm'+iteration);

	  celda6.style.cssText='font-style:veranda; font-size:12px; height:14px; font-weight:bold;text-transform:uppercase;border-style:ridge;text-align:center;';

	  celda6.setAttribute('maxLength', '6');



//

	  celda7.setAttribute("type","text");

      celda7.setAttribute("size","20");

	  celda7.setAttribute("name",'valrtm'+iteration);

	  celda7.setAttribute("id",'valrtm'+iteration);

	  celda7.style.cssText='font-style:veranda;font-size:12px;height:14px;border-style:ridge;text-align:center;';

	  celda7.setAttribute('maxLength', '15');

//



      columna0.appendChild(celda0);

	  columna1.appendChild(celda1);

      columna2.appendChild(celda2);

      columna3.appendChild(celda3);

      columna4.appendChild(celda4);

      columna5.appendChild(celda5);

      columna6.appendChild(celda6);

      columna7.appendChild(celda7);





//

      fila.appendChild(columna0);

	  fila.appendChild(columna1);

	  fila.appendChild(columna2);

      fila.appendChild(columna3);

      fila.appendChild(columna4);

      fila.appendChild(columna5);

      fila.appendChild(columna6);

      fila.appendChild(columna7);





table.tBodies(0).appendChild(fila);

    }

//-->

function deleteRowr(tableID) {   

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
	var nombre2    =getDataServer("nombre2.php","?doc="+id);
	var apellido   = getDataServer("apellido.php","?doc="+id);
	var apellido2  =getDataServer("apellido2.php","?doc="+id);
	var rcli       = getDataServer("regcli.php","?doc="+id);
    if(nombre!='' || direccion!='' || email!='' || telefono!='' || apellido!='' || rcli!=''){
		document.form.dir.value=direccion;
		document.form.email.value=email;
		document.form.tel.value=telefono;
		document.form.nombre1.value=nombre;
		document.form.nombre2.value=nombre2;
		document.form.apellido1.value=apellido;
		document.form.apellido2.value=apellid2;
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


function PopWindow()

{

window.open('fpdf/prueba.php?','','top=300,left=300,width=300,height=300') ; 

window.location.reload()

}
function pdf(){

setTimeout('PopWindow()',1000);

}
function vehi(){

     

    var cod=document.getElementById('cod').value;

	var codvehi=getDataServer("nomvehi.php","?cod="+cod);



    if(codvehi!=''){

		document.form.vhcint.value=codvehi;

		

    }

    else{

	    document.form.vhcint.value='';

		



    }

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

function formatCurrency(num) { 

num = num.toString().replace(/$|,/g,''); 

if(isNaN(num)) 

num = "0"; 

sign = (num == (num = Math.abs(num))); 

num = Math.floor(num*100+0.50000000001); 

cents = num%100; 

num = Math.floor(num/100).toString(); 

if(cents<10) 

cents = "0" + cents; 

for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++) 

num = num.substring(0,num.length-(4*i+3))+','+ 

num.substring(num.length-(4*i+3)); 

return (((sign)?'':'-') + '$' + num + '.' + cents); 

}



</script> 
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

.Estilo11 {color: #000000}

    </style>

</head>

<body>

<form method="GET" action="in_cotiza.php" class="label" id="form" name="form" onKeyPress="return pulsar(event)" >

<fieldset id="f1" style="width:920px">

<table width="1067" height="136"  border="0">

  <tr height="10"></tr>

  <tr>

    <td width="50"></td>

    <td width="69" height="24"><div align="left"><strong>Primer Nombre </strong><font color="#FF0000">*</font></div></td>

    <td width="128"><input type="text" id="nombre1" name="nombre1" onKeyUp="javascript:this.value=this.value.toUpperCase();"

                 style="font-style:veranda; width:120px; font-size:12px; height:14px;border-style:ridge;text-align:center;">

    <td width="58" height="24"><div align="left"><strong>Segundo Nombre </strong></div></td>

    <td width="134"><input type="text" id="nombre2" name="nombre2" onKeyUp="javascript:this.value=this.value.toUpperCase();"

                 style="font-style:veranda; width:120px; font-size:12px; height:14px;border-style:ridge;text-align:center;">

    <td width="66" height="24"><div align="left"><strong>Primer Apellido </strong><font color="#FF0000">*</font></div></td>

    <td width="135"><input type="text" id="apellido1" name="apellido1" onKeyUp="javascript:this.value=this.value.toUpperCase();"

                style="font-style:veranda; width:120px; font-size:12px; height:14px;border-style:ridge;text-align:center;">

    <td width="75" height="24"><div align="left"><strong>Segundo Apellido </strong></div></td>

    <td width="411"><input type="text" id="apellido2" name="apellido2" onKeyUp="javascript:this.value=this.value.toUpperCase();"

                style="font-style:veranda; width:120px; font-size:12px; height:14px;border-style:ridge;text-align:center;">

    </td>

  </tr>

  <td width="12"></td>

      <td width="69"><label><strong>Documento</strong><font color="#FF0000">*</font></label></td>

    <td width="128"><label>

        <input type="text" id="ced" name="ced" onBlur="cliente()" style="font-style:veranda; font-size:12px; width:120px; height:16px;border-style:ridge;text-align:center;">

      </label></td>

    <td width="100"><label for="direccion"><strong>Direccion</strong></label>

          <font color="#FF0000">*</font></td>

    <td colspan="7"><input type="text" id="dir" name="dir" onKeyUp="javascript:this.value=this.value.toUpperCase();"

                 style="font-style:veranda; font-size:12px; width:530px; height:16px;border-style:ridge;text-align: left;"></td>

    <td width="0"></td>

  </tr>

  <tr>

  <tr>

    <td width="12"></td>

    <td width="69"><label><strong>Telefono</strong></label>

        <font color="#FF0000">*</font></td>

    <td width="128"><input type="text" id="tel" name="tel" maxlength="10" onKeyUp="javascript:this.value=this.value.toUpperCase();"

                  style="font-style:veranda; width:120px; font-size:12px; height:14px;border-style:ridge;text-align:center;">

    </td>

    <td height="28"><label for="email"><strong>Email</strong></label>

        <font color="#FF0000">*</font></td>

    <td colspan="7"><input type="text" id="email" name="email"  style="font-style:veranda; font-size:12px; width:530px; height:16px;border-style:ridge;text-align: left;"                  ></td>

  </tr>

  <tr height="10"></tr>

</table>

<fieldset style="width:900px">

  <div id="container-5">

            <ul>

                <li><a href="#fragment-13"><span>Vehiculo de Interes</span></a></li>

                <li><a href="#fragment-14"><span>Retoma Vehiculo</span></a></li>

            </ul>

<div id="fragment-13">

<input name="button" type="button" id="button" onClick='javascript:addRow(1,1)'  class="botonG"  value='Adicionar Item';>

<input type="button" value='Borrar Item' class="botonG" onClick="deleteRow('tbl')" />

 <table width="843" border="1" id="tbl" style="border-collapse:separate" name=tbl>

          <tr> 

            <th width="20" height="22" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1" >&nbsp;</th>

            <th width="30" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Item</th>

            <th width="150" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Vehículo</font>

            <th width="78" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Valor</font></th>

            <th width="78" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Cta Inicial</font></th>

            <th width="109" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Saldo</font></th>

            <th width="38" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Meses</th>

            <th width="84" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Cta Mensual</th>

            <th width="194" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Accesorios</th>

          </tr>

		  <tr>

		  <td height="26"><label><input type="checkbox" name="chk1"  id="chk1" value="on"   align="left" onclick="javascript:marcardespiece('tbl')"/></label></td>

<td><font size="2"><input name="citem1" type="text"  id="citem1" style="font-style:verdana; font-size:12px; height:14px;border-style:ridge;text-align:center;"value="1" size="1" maxlength="3" /></font></td>

<td><input name="vhcint1" type="text" class="ac_input" id="vhcint" value="" size="40" style="font-style:verdana; font-size:12px; position: relative; height:14px;border-style:ridge;text-align:center;" ></td>

<td><input type="text" id="vhcval" name="vhcval1" style="font-style:verdana;font-size:12px;height:14px;border-style:ridge;text-align:center;"size="14" maxlength="14"  onBlur="pasval()"/></td>

   <td><input type="text" id="valcuota1" name="vhccuotaini1"

			         style="font-style:verdana;font-size:12px;height:14px;border-style:ridge;text-align:center;"

			         size="14" maxlength="14" onBlur="pasval2()"/>

			</td>

			 <td><input type="text" id="vhcsaldo1" name="vhcsaldo1" style="font-style:verdana;font-size:12px;height:14px;border-style:ridge;text-align:center;"

			         size="20" maxlength="14" onBlur="pasval3()"/>

			</td>

			   <td><div align="left"><font size="2">  

                <input name="plazmesvhc1" type="text"  id="1"

				style="font-style:verdana; font-size:12px; font-weight:bold;height:14px;border-style:ridge;text-align:center;"

				size="3" maxlength="7">

            </font></div></td>

			 <td><div align="left">

<input type="text" id="valmesaproxi1" name="valmesaproxi1" style="font-style:verdana;font-size:12px;height:14px;border-style:ridge;text-align:center;" size="15" maxlength="14" onBlur="pasval4()"/>

					 </div></td>

				<td >

				  <textarea cols="28"  rows="1" id="1" name="accesor1" style="font-style:verdana;font-size:12px;height:14px;border-style:ridge;text-align:center;" onKeyUp="javascript:this.value=this.value.toUpperCase();"></textarea></td>

</table>

</div>

<div id="fragment-14">	

<input name="button" type="button" id="button" onClick='addRowr(1,1);'  class="botonG"  value='Adicionar Item';>

<input type="button" value='Borrar Item' class="botonG" onClick="deleteRowr('tblr')" />

<table width="718" border="1" id="tblr" style="border-collapse:separate" name="tblr">

  <tr>

    <th width="20" height="22" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1" >&nbsp;</th>

    <th width="30" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Item</th>

    <th width="132" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Vehiculo

    <th width="108" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Version</th>

    <th width="61" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Año</th>

    <th width="108" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Placa</th>

    <th width="108" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Kilometraje</th>

    <th width="181" class="subtitle Estilo1" style="border-collapse:collapse; color:White" border="1">Vlr retoma</th>

  </tr>

  <label>

   <td height="26"><label><input type="checkbox" name="chk1"  id="chk1" value="on"   align="left" /></label></td>

<td><font size="2"><input name="citemr1" type="text"  id="citemr1" style="font-style:verdana; font-size:12px; height:14px;border-style:ridge;text-align:center;"value="1" size="1" maxlength="3" /></font></td>

    <td><input name="rtm1" type="text" id="1"  size="24" style="font-style:verdana;font-size:12px;height:14px;border-style:ridge;text-align:center;" onKeyUp="javascript:this.value=this.value.toUpperCase();"></td>

    <td><input name="verrtm1" type="text" id="verrtm1"  size="20" style="font-style:verdana;font-size:12px;height:14px;border-style:ridge;text-align:center;" onKeyUp="javascript:this.value=this.value.toUpperCase();"></td>

    <td>

        <input type="text" id="anortm1" name="anortm1" size="10" style="font-style:verdana;font-size:12px;height:14px;border-style:ridge;text-align:center;"

			        >

      <span class="textfieldInvalidFormatMsg"> <strong>Solo numeros</strong></span></td>

    <td><input name="plartm1" type="text" id="plartm1"  size="20" style="font-style:verdana;font-size:12px;height:14px;border-style:ridge;text-align:center;" onKeyUp="javascript:this.value=this.value.toUpperCase();"></td>

    <td><input name="kmrtm1" type="text" id="kmrtm1" size="20" style="font-style:verdana;font-size:12px;height:14px;border-style:ridge;text-align:center;"></td>

<td>

<input type="text" id="valrtm1" name="valrtm1" size="20" style="font-style:verdana;font-size:12px;height:14px;border-style:ridge;text-align:center;"  >

</td>

</table>

</div>



</div>

<div id="result"></div>

</fieldset>

<script type="text/javascript">

     $(function() {

              $('#container-5').tabs({ fxSlide: true, fxFade: true, fxSpeed: 'normal' });

            });

			</script>



<center><span id="resultados"></span></center>

<table width="682" style="margin-left:70px" >

  <tr height="10"></tr>

  <tr class="cuadro">

    <td height="24"><div align="left" class="Estilo11"><strong>Estado del Cliente:</strong></div></td>

    <td><span class="Estilo11">Frio</span></td>

    <td><input type="radio" value="1" id="radio1" name="estcli" checked="checked"></td>

    <td><span class="Estilo11">Tibio</span></td>

    <td><input type="radio" value="2" id="radio2" name="estcli"></td>

    <td><span class="Estilo11">Caliente</span></td>

    <td><input type="radio" value="3" id="radio3"name="estcli"></td>

  </tr>

  <tr class="cuadro1">

    <td width="160" height="25"><div align="left" class="Estilo11"><strong>Estado del Negocio:</strong></div></td>

    <td width="72"><span class="Estilo11">Cotizacion</span></td>

    <td><input type="radio" value="1" id="radio4" name="estneg" checked="checked"></td>

    <td><span class="Estilo11">Separacion</span></td>

    <td><input type="radio" name="estneg" id="radio5" value="2"></td>

    <td><span class="Estilo11">OR. De Compra</span></td>

    <td><input type="radio" id="radio6" value="3" name="estneg"></td>

  </tr>

  <tr class="cuadro">

    <td height="24"><div align="left" class="Estilo11"><strong>Que Detiene la compra?:</strong></div></td>

    <td><span class="Estilo11">Retoma</span></td>

    <td width="22"><input type="radio" value="1" id="radio7" name="dtecom" checked="checked"></td>

    <td width="82"><span class="Estilo11">Financiacion</span></td>

    <td width="23"><input type="radio" value="2" id="radio8" name="dtecom"></td>

    <td width="98"><span class="Estilo11">Documentos</span></td>

    <td width="21"><input type="radio" id="radio9" value="3" name="dtecom"></td>

    <td width="46"><span class="Estilo11">Precio</span></td>

    <td width="24"><input type="radio" id="radio10" name="dtecom" value="4"></td>

  </tr>

</table>

<table width="682" style="margin-left:70px">

  <tr height="10"></tr>

<tr>

<td><strong>Observaciones Generales</strong></td><td><textarea name="obser" cols="85" rows="2" id="obser" type="text" onKeyUp="javascript:this.value=this.value.toUpperCase();"></textarea></td>

</tr> 	

  <tr height="10"></tr>

</table>



<center>

<input type="submit" value="Enviar" class="botonR" onClick="pdf()">

<a href="final.php">Salir</a>

</center>

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

</body>

</html>