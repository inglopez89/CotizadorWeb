// JavaScript Document
function objetoAjax(){
        var xmlhttp=false;
        try {
               xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
               try {
                  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
               } catch (E) {
                       xmlhttp = false;
               }
        }
 
        if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
               xmlhttp = new XMLHttpRequest();

        }

        return xmlhttp;

}
var no_cotiza=document.getElementById('no_cotiza').value;
if(no_cotiza=''){

function MostrarConsulta(datos){

        //divResultado = document.getElementById('resultado');

        ajax=objetoAjax();

        ajax.open("GET",datos,true);

        ajax.onreadystatechange=function() {

               if (ajax.readyState==4) {

                     document.getElementById('no_cotiza').value=ajax.responseText

               }

        }

        ajax.send(null);

}
setTimeout("MostrarConsulta(datos)",2000);
}
else 
{
	
	}