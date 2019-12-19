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
  var cad='';
    var nombre=document.getElementById('nombre').value;
	var ced=document.getElementById('ced').value;
	var apellido=document.getElementById('apellido').value;
	var dir=document.getElementById('dir').value;
	var fecha=document.getElementById('fecha').value;
    var email=document.getElementById('email').value;
    var tel=document.getElementById('tel').value;


cad='nombre='+encodeURIComponent(nombre)+'&apellido='+encodeURIComponent(apellido)+'&ced='+encodeURIComponent(ced)+'&dir='+encodeURIComponent(dir)+'&fecha='+encodeURIComponent(fecha)+'&email='+encodeURIComponent(email)+'&tel='+encodeURIComponent(tel);

return cad;
}

var conexion1;
function enviarFormulario() 
{
  conexion1=crearXMLHttpRequest();
  conexion1.onreadystatechange = procesarEventos;
  conexion1.open('POST','insertar.php', true);
  conexion1.setRequestHeader("Content-Type","application/x-www-form-urlencoded  charset=utf-8");
  conexion1.send(retornarDatos());  
}

function procesarEventos()
{
  var resultados = document.getElementById("resultados");
  if(conexion1.readyState == 4)
  {
    if (conexion.status==200)
      resultados.innerHTML="completado";
    else
      alert(conexion1.statusText);
  } 
  else 
  {
    resultados.innerHTML =window.inner.'<img src="img/cargar.gif">';
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