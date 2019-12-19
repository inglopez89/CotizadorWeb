// JavaScript Document
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
function pasval(){
var total= document.form.vhcval1.value;
total= formatCurrency(total);
document.form.vhcval1.value = (total); 
}
function pasval2(){
var total= document.form.valcuota1.value;
total= formatCurrency(total); 
document.form.valcuota1.value = (total); 
}
function pasval3(){
var total= document.form.vhcsaldo1.value;
total= formatCurrency(total); 
document.form.vhcsaldo1.value = (total); 
}
function pasval4(){
var total= document.form.valmesaproxi1.value;
total= formatCurrency(total); 
document.form.valmesaproxi1.value = (total); 
}
function pasval5(){
var total= document.form.vhcval2.value;
total= formatCurrency(total); 
document.form.vhcval2.value = (total); 
}
function pasval6(){
var total= document.form.valcuota2.value;
total= formatCurrency(total); 
document.form.valcuota2.value = (total); 
}
function pasval7(){
var total= document.form.vhcsaldo2.value;
total= formatCurrency(total); 
document.form.vhcsaldo2.value = (total); 
}
function pasval8(){
var total= document.form.valmesaproxi2.value;
total= formatCurrency(total); 
document.form.valmesaproxi2.value = (total); 
}