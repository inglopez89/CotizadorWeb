// JavaScript Document
addEvent(window,'load',inicializarEventos,false);

function inicializarEventos()
{
  var ref=document.getElementById('form');
  addEvent(ref,'submit',enviarDatos,false);
}

function enviarDatos(e)
{
  if (window.event)
    window.event.returnValue=false;
  else
    if (e)
      e.preventDefault();
  enviarFormulario();
}


function retornarDatos()
{
  
    var envio='';
	var no_cotiza=document.getElementById('no_cotiza').value;
	var nombre=document.getElementById('nombre').value;
	var apellido=document.getElementById('apellido').value;
	var doc=document.getElementById('ced').value;
	var dir=document.getElementById('dir').value;
	var email=document.getElementById('email').value;
	var tel=document.getElementById('tel').value;
	var vhcint=document.getElementById('vhcint').value;
	var vhcval=document.getElementById('vhcval').value;
	var vhccuotaini=document.getElementById('vhccuotaini').value;
	var vhcsaldo=document.getElementById('vhcsaldo').value;
	var plazmesvhc=document.getElementById('plazmesvhc').value;
	var valmesaproxi=document.getElementById('valmesaproxi').value;
	var valmatri=document.getElementById('valmatri').value;
	var valseguro=document.getElementById('valseguro').value;
	var valsoat=document.getElementById('valsoat').value;
	var accesor=document.getElementById('accesor').value;
	var obser=document.getElementById('obser').value;
	var rtm=document.getElementById('rtm').value;
	var verrtm=document.getElementById('verrtm').value;
	var anortm=document.getElementById('añortm').value;
	var plartm=document.getElementById('plartm').value;
	var kmrtm=document.getElementById('kmrtm').value;
	var valrtm=document.getElementById('valrtm').value;
	var no_retoma=document.getElementById('no_retoma').value;
	var no_vehi=document.getElementById('no_vehi').value;
	var r_cli=document.getElementById('r_cli').value;
    if(document.getElementById('radio1').checked){
		var estcli=document.getElementById('radio1').value;
envio='nombre='+encodeURIComponent(nombre)+'&apellido='+encodeURIComponent(apellido)+'&doc='+encodeURIComponent(doc)+'&dir='+encodeURIComponent(dir)+'&email='+encodeURIComponent(email)+'&tel='+encodeURIComponent(tel)+'&vhcint='+encodeURIComponent(vhcint)+'&vhcval='+encodeURIComponent(vhcval)+'&vhccuotaini='+encodeURIComponent(vhccuotaini)+'&vhcsaldo='+encodeURIComponent(vhcsaldo)+'&plazmesvhc='+encodeURIComponent(plazmesvhc)+'&valmesaproxi='+encodeURIComponent(valmesaproxi)+'&valmatri='+encodeURIComponent(valmatri)+'&valseguro='+encodeURIComponent(valseguro)+'&valsoat='+encodeURIComponent(valsoat)+'&accesor='+encodeURIComponent(accesor)+'&obser='+encodeURIComponent(obser)+'&rtm='+encodeURIComponent(rtm)+'&verrtm='+encodeURIComponent(verrtm)+'&anortm='+encodeURIComponent(anortm)+'&plartm='+encodeURIComponent(plartm)+'&kmrtm='+encodeURIComponent(kmrtm)+'&valrtm='+encodeURIComponent(valrtm)+'&estcli='+encodeURIComponent(estcli)+'&estneg='+encodeURIComponent(estneg)+'&no_cotiza='+encodeURIComponent(no_cotiza)+'&no_retoma='+encodeURIComponent(no_retoma)+'&no_vehi='+encodeURIComponent(no_vehi)+'&r_cli='+encodeURIComponent(r_cli);
	}
	else if(document.getElementById('radio2').checked){
		var estcli=document.getElementById('radio2').value;
		envio='nombre='+encodeURIComponent(nombre)+'&apellido='+encodeURIComponent(apellido)+'&doc='+encodeURIComponent(doc)+'&dir='+encodeURIComponent(dir)+'&email='+encodeURIComponent(email)+'&tel='+encodeURIComponent(tel)+'&vhcint='+encodeURIComponent(vhcint)+'&vhcval='+encodeURIComponent(vhcval)+'&vhccuotaini='+encodeURIComponent(vhccuotaini)+'&vhcsaldo='+encodeURIComponent(vhcsaldo)+'&plazmesvhc='+encodeURIComponent(plazmesvhc)+'&valmesaproxi='+encodeURIComponent(valmesaproxi)+'&valmatri='+encodeURIComponent(valmatri)+'&valseguro='+encodeURIComponent(valseguro)+'&valsoat='+encodeURIComponent(valsoat)+'&accesor='+encodeURIComponent(accesor)+'&obser='+encodeURIComponent(obser)+'&rtm='+encodeURIComponent(rtm)+'&verrtm='+encodeURIComponent(verrtm)+'&anortm='+encodeURIComponent(anortm)+'&plartm='+encodeURIComponent(plartm)+'&kmrtm='+encodeURIComponent(kmrtm)+'&valrtm='+encodeURIComponent(valrtm)+'&estcli='+encodeURIComponent(estcli)+'&estneg='+encodeURIComponent(estneg)+'&no_cotiza='+encodeURIComponent(no_cotiza)+'&no_retoma='+encodeURIComponent(no_retoma)+'&no_vehi='+encodeURIComponent(no_vehi)+'&r_cli='+encodeURIComponent(r_cli);
		}
		else if(document.getElementById('radio3').checked){
			var estcli=document.getElementById('radio3').value;
			envio='nombre='+encodeURIComponent(nombre)+'&apellido='+encodeURIComponent(apellido)+'&doc='+encodeURIComponent(doc)+'&dir='+encodeURIComponent(dir)+'&email='+encodeURIComponent(email)+'&tel='+encodeURIComponent(tel)+'&vhcint='+encodeURIComponent(vhcint)+'&vhcval='+encodeURIComponent(vhcval)+'&vhccuotaini='+encodeURIComponent(vhccuotaini)+'&vhcsaldo='+encodeURIComponent(vhcsaldo)+'&plazmesvhc='+encodeURIComponent(plazmesvhc)+'&valmesaproxi='+encodeURIComponent(valmesaproxi)+'&valmatri='+encodeURIComponent(valmatri)+'&valseguro='+encodeURIComponent(valseguro)+'&valsoat='+encodeURIComponent(valsoat)+'&accesor='+encodeURIComponent(accesor)+'&obser='+encodeURIComponent(obser)+'&rtm='+encodeURIComponent(rtm)+'&verrtm='+encodeURIComponent(verrtm)+'&anortm='+encodeURIComponent(anortm)+'&plartm='+encodeURIComponent(plartm)+'&kmrtm='+encodeURIComponent(kmrtm)+'&valrtm='+encodeURIComponent(valrtm)+'&estcli='+encodeURIComponent(estcli)+'&estneg='+encodeURIComponent(estneg)+'&no_cotiza='+encodeURIComponent(no_cotiza)+'&no_retoma='+encodeURIComponent(no_retoma)+'&no_vehi='+encodeURIComponent(no_vehi)+'&r_cli='+encodeURIComponent(r_cli);
			}
			if(document.getElementById('radio4').checked){
			var estneg=document.getElementById('radio4').value;
			envio='nombre='+encodeURIComponent(nombre)+'&apellido='+encodeURIComponent(apellido)+'&doc='+encodeURIComponent(doc)+'&dir='+encodeURIComponent(dir)+'&email='+encodeURIComponent(email)+'&tel='+encodeURIComponent(tel)+'&vhcint='+encodeURIComponent(vhcint)+'&vhcval='+encodeURIComponent(vhcval)+'&vhccuotaini='+encodeURIComponent(vhccuotaini)+'&vhcsaldo='+encodeURIComponent(vhcsaldo)+'&plazmesvhc='+encodeURIComponent(plazmesvhc)+'&valmesaproxi='+encodeURIComponent(valmesaproxi)+'&valmatri='+encodeURIComponent(valmatri)+'&valseguro='+encodeURIComponent(valseguro)+'&valsoat='+encodeURIComponent(valsoat)+'&accesor='+encodeURIComponent(accesor)+'&obser='+encodeURIComponent(obser)+'&rtm='+encodeURIComponent(rtm)+'&verrtm='+encodeURIComponent(verrtm)+'&anortm='+encodeURIComponent(anortm)+'&plartm='+encodeURIComponent(plartm)+'&kmrtm='+encodeURIComponent(kmrtm)+'&valrtm='+encodeURIComponent(valrtm)+'&estcli='+encodeURIComponent(estcli)+'&estneg='+encodeURIComponent(estneg)+'&no_cotiza='+encodeURIComponent(no_cotiza)+'&no_retoma='+encodeURIComponent(no_retoma)+'&no_vehi='+encodeURIComponent(no_vehi)+'&r_cli='+encodeURIComponent(r_cli);
			}
			else if(document.getElementById('radio5').checked){
				var estneg=document.getElementById('radio5').value;
				envio='nombre='+encodeURIComponent(nombre)+'&apellido='+encodeURIComponent(apellido)+'&doc='+encodeURIComponent(doc)+'&dir='+encodeURIComponent(dir)+'&email='+encodeURIComponent(email)+'&tel='+encodeURIComponent(tel)+'&vhcint='+encodeURIComponent(vhcint)+'&vhcval='+encodeURIComponent(vhcval)+'&vhccuotaini='+encodeURIComponent(vhccuotaini)+'&vhcsaldo='+encodeURIComponent(vhcsaldo)+'&plazmesvhc='+encodeURIComponent(plazmesvhc)+'&valmesaproxi='+encodeURIComponent(valmesaproxi)+'&valmatri='+encodeURIComponent(valmatri)+'&valseguro='+encodeURIComponent(valseguro)+'&valsoat='+encodeURIComponent(valsoat)+'&accesor='+encodeURIComponent(accesor)+'&obser='+encodeURIComponent(obser)+'&rtm='+encodeURIComponent(rtm)+'&verrtm='+encodeURIComponent(verrtm)+'&anortm='+encodeURIComponent(anortm)+'&plartm='+encodeURIComponent(plartm)+'&kmrtm='+encodeURIComponent(kmrtm)+'&valrtm='+encodeURIComponent(valrtm)+'&estcli='+encodeURIComponent(estcli)+'&estneg='+encodeURIComponent(estneg)+'&no_cotiza='+encodeURIComponent(no_cotiza)+'&no_retoma='+encodeURIComponent(no_retoma)+'&no_vehi='+encodeURIComponent(no_vehi)+'&r_cli='+encodeURIComponent(r_cli);
				}
				else if(document.getElementById('radio6').checked){
					var estneg=document.getElementById('radio6').value;
					envio='nombre='+encodeURIComponent(nombre)+'&apellido='+encodeURIComponent(apellido)+'&doc='+encodeURIComponent(doc)+'&dir='+encodeURIComponent(dir)+'&email='+encodeURIComponent(email)+'&tel='+encodeURIComponent(tel)+'&vhcint='+encodeURIComponent(vhcint)+'&vhcval='+encodeURIComponent(vhcval)+'&vhccuotaini='+encodeURIComponent(vhccuotaini)+'&vhcsaldo='+encodeURIComponent(vhcsaldo)+'&plazmesvhc='+encodeURIComponent(plazmesvhc)+'&valmesaproxi='+encodeURIComponent(valmesaproxi)+'&valmatri='+encodeURIComponent(valmatri)+'&valseguro='+encodeURIComponent(valseguro)+'&valsoat='+encodeURIComponent(valsoat)+'&accesor='+encodeURIComponent(accesor)+'&obser='+encodeURIComponent(obser)+'&rtm='+encodeURIComponent(rtm)+'&verrtm='+encodeURIComponent(verrtm)+'&anortm='+encodeURIComponent(anortm)+'&plartm='+encodeURIComponent(plartm)+'&kmrtm='+encodeURIComponent(kmrtm)+'&valrtm='+encodeURIComponent(valrtm)+'&estcli='+encodeURIComponent(estcli)+'&estneg='+encodeURIComponent(estneg)+'&no_cotiza='+encodeURIComponent(no_cotiza)+'&no_retoma='+encodeURIComponent(no_retoma)+'&no_vehi='+encodeURIComponent(no_vehi)+'&r_cli='+encodeURIComponent(r_cli);
					}
                    if(document.getElementById('radio7').checked){
						var dtecom=document.getElementById('radio7').value;
						envio='nombre='+encodeURIComponent(nombre)+'&apellido='+encodeURIComponent(apellido)+'&doc='+encodeURIComponent(doc)+'&dir='+encodeURIComponent(dir)+'&email='+encodeURIComponent(email)+'&tel='+encodeURIComponent(tel)+'&vhcint='+encodeURIComponent(vhcint)+'&vhcval='+encodeURIComponent(vhcval)+'&vhccuotaini='+encodeURIComponent(vhccuotaini)+'&vhcsaldo='+encodeURIComponent(vhcsaldo)+'&plazmesvhc='+encodeURIComponent(plazmesvhc)+'&valmesaproxi='+encodeURIComponent(valmesaproxi)+'&valmatri='+encodeURIComponent(valmatri)+'&valseguro='+encodeURIComponent(valseguro)+'&valsoat='+encodeURIComponent(valsoat)+'&accesor='+encodeURIComponent(accesor)+'&obser='+encodeURIComponent(obser)+'&rtm='+encodeURIComponent(rtm)+'&verrtm='+encodeURIComponent(verrtm)+'&anortm='+encodeURIComponent(anortm)+'&plartm='+encodeURIComponent(plartm)+'&kmrtm='+encodeURIComponent(kmrtm)+'&valrtm='+encodeURIComponent(valrtm)+'&estcli='+encodeURIComponent(estcli)+'&estneg='+encodeURIComponent(estneg)+'&no_cotiza='+encodeURIComponent(no_cotiza)+'&no_retoma='+encodeURIComponent(no_retoma)+'&no_vehi='+encodeURIComponent(no_vehi)+'&dtecom='+encodeURIComponent(dtecom)+'&r_cli='+encodeURIComponent(r_cli);
						}
						else if(document.getElementById('radio8').checked){
							var dtecom=document.getElementById('radio8').value;
								envio='nombre='+encodeURIComponent(nombre)+'&apellido='+encodeURIComponent(apellido)+'&doc='+encodeURIComponent(doc)+'&dir='+encodeURIComponent(dir)+'&email='+encodeURIComponent(email)+'&tel='+encodeURIComponent(tel)+'&vhcint='+encodeURIComponent(vhcint)+'&vhcval='+encodeURIComponent(vhcval)+'&vhccuotaini='+encodeURIComponent(vhccuotaini)+'&vhcsaldo='+encodeURIComponent(vhcsaldo)+'&plazmesvhc='+encodeURIComponent(plazmesvhc)+'&valmesaproxi='+encodeURIComponent(valmesaproxi)+'&valmatri='+encodeURIComponent(valmatri)+'&valseguro='+encodeURIComponent(valseguro)+'&valsoat='+encodeURIComponent(valsoat)+'&accesor='+encodeURIComponent(accesor)+'&obser='+encodeURIComponent(obser)+'&rtm='+encodeURIComponent(rtm)+'&verrtm='+encodeURIComponent(verrtm)+'&anortm='+encodeURIComponent(anortm)+'&plartm='+encodeURIComponent(plartm)+'&kmrtm='+encodeURIComponent(kmrtm)+'&valrtm='+encodeURIComponent(valrtm)+'&estcli='+encodeURIComponent(estcli)+'&estneg='+encodeURIComponent(estneg)+'&no_cotiza='+encodeURIComponent(no_cotiza)+'&no_retoma='+encodeURIComponent(no_retoma)+'&no_vehi='+encodeURIComponent(no_vehi)+'&dtecom='+encodeURIComponent(dtecom)+'&r_cli='+encodeURIComponent(r_cli);
							}
							else if(document.getElementById('radio9').value){
								var dtecom=document.getElementById('radio9').value;
								envio='nombre='+encodeURIComponent(nombre)+'&apellido='+encodeURIComponent(apellido)+'&doc='+encodeURIComponent(doc)+'&dir='+encodeURIComponent(dir)+'&email='+encodeURIComponent(email)+'&tel='+encodeURIComponent(tel)+'&vhcint='+encodeURIComponent(vhcint)+'&vhcval='+encodeURIComponent(vhcval)+'&vhccuotaini='+encodeURIComponent(vhccuotaini)+'&vhcsaldo='+encodeURIComponent(vhcsaldo)+'&plazmesvhc='+encodeURIComponent(plazmesvhc)+'&valmesaproxi='+encodeURIComponent(valmesaproxi)+'&valmatri='+encodeURIComponent(valmatri)+'&valseguro='+encodeURIComponent(valseguro)+'&valsoat='+encodeURIComponent(valsoat)+'&accesor='+encodeURIComponent(accesor)+'&obser='+encodeURIComponent(obser)+'&rtm='+encodeURIComponent(rtm)+'&verrtm='+encodeURIComponent(verrtm)+'&anortm='+encodeURIComponent(anortm)+'&plartm='+encodeURIComponent(plartm)+'&kmrtm='+encodeURIComponent(kmrtm)+'&valrtm='+encodeURIComponent(valrtm)+'&estcli='+encodeURIComponent(estcli)+'&estneg='+encodeURIComponent(estneg)+'&no_cotiza='+encodeURIComponent(no_cotiza)+'&no_retoma='+encodeURIComponent(no_retoma)+'&no_vehi='+encodeURIComponent(no_vehi)+'&dtecom='+encodeURIComponent(dtecom)+'&r_cli='+encodeURIComponent(r_cli);
								
								}
								else if(document.getElementById('radio10').checked){
									var dtecom=document.getElementById('radio10').value;
									envio='nombre='+encodeURIComponent(nombre)+'&apellido='+encodeURIComponent(apellido)+'&doc='+encodeURIComponent(doc)+'&dir='+encodeURIComponent(dir)+'&email='+encodeURIComponent(email)+'&tel='+encodeURIComponent(tel)+'&vhcint='+encodeURIComponent(vhcint)+'&vhcval='+encodeURIComponent(vhcval)+'&vhccuotaini='+encodeURIComponent(vhccuotaini)+'&vhcsaldo='+encodeURIComponent(vhcsaldo)+'&plazmesvhc='+encodeURIComponent(plazmesvhc)+'&valmesaproxi='+encodeURIComponent(valmesaproxi)+'&valmatri='+encodeURIComponent(valmatri)+'&valseguro='+encodeURIComponent(valseguro)+'&valsoat='+encodeURIComponent(valsoat)+'&accesor='+encodeURIComponent(accesor)+'&obser='+encodeURIComponent(obser)+'&rtm='+encodeURIComponent(rtm)+'&verrtm='+encodeURIComponent(verrtm)+'&anortm='+encodeURIComponent(anortm)+'&plartm='+encodeURIComponent(plartm)+'&kmrtm='+encodeURIComponent(kmrtm)+'&valrtm='+encodeURIComponent(valrtm)+'&estcli='+encodeURIComponent(estcli)+'&estneg='+encodeURIComponent(estneg)+'&no_cotiza='+encodeURIComponent(no_cotiza)+'&no_retoma='+encodeURIComponent(no_retoma)+'&no_vehi='+encodeURIComponent(no_vehi)+'&dtecom='+encodeURIComponent(dtecom)+'&r_cli='+encodeURIComponent(r_cli);
								    }
return envio;
  
}//cierre de la funcion retornar datos

var conexion1;
function enviarFormulario() 
{
  conexion1=crearXMLHttpRequest();
  conexion1.onreadystatechange = procesarEventos;
  conexion1.open('post','insertar.php', true);
  conexion1.setRequestHeader("Content-Type","application/x-www-form-urlencoded  charset=iso-8859-1");
  conexion1.send(retornarDatos());  
}

function procesarEventos()
{
  var resultados = document.getElementById("resultados");

if(conexion1.readyState == 4)
  {
    if (conexion1.status==200)
      resultados.innerHTML ="Datos ingresados con exito";
	  //document.getElementById('no_cotiza').value=conexion1.responseText;
	else
      alert(conexion1.statusText);
  } 
  else 
  {
    resultados.innerHTML = '<img src="img/cargar.gif">';
  }
}



//***************************************
//Funciones comunes a todos los problemas
//***************************************
function addEvent(elemento,nomevento,funcion,captura)
{
  if (elemento.attachEvent)
  {
    elemento.attachEvent('on'+nomevento,funcion);
    return true;
  }
  else  
    if (elemento.addEventListener)
    {
      elemento.addEventListener(nomevento,funcion,captura);
      return true;
    }
	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
    else
      return false;
}

function crearXMLHttpRequest() 
{
  var xmlHttp=null;
  if (window.ActiveXObject) 
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  else 
    if (window.XMLHttpRequest) 
      xmlHttp = new XMLHttpRequest();
  return xmlHttp;
}