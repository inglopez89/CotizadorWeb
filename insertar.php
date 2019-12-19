<?php 
session_start();
header('Content-Type: text/html; charset=iso-8859-1');
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER);  	
$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellido'];
$doc=$_REQUEST['doc'];
$docase=$_SESSION['$docase'];
$dir=$_REQUEST['dir'];
$email=$_REQUEST['email'];
$tel=$_REQUEST['tel'];
$vhcint=$_REQUEST['vhcint'];
$vhcval=$_REQUEST['vhcval'];
$vhccuotaini=$_REQUEST['vhccuotaini'];
$vhcsaldo=$_REQUEST['vhcsaldo'];
$plazmesvhc=$_REQUEST['plazmesvhc'];
$valmesaproxi=$_REQUEST['valmesaproxi'];
$valseguro=$_REQUEST['valseguro'];
$valmatri=$_REQUEST['valmatri'];
$valsoat=$_REQUEST['valsoat'];
$accesor=$_REQUEST['accesor'];
$obser=$_REQUEST['obser'];
$lugar_even=$_SESSION['evento'];
$estcli=$_REQUEST['estcli'];
$estneg=$_REQUEST['estneg'];
$rtm=$_REQUEST['rtm'];
$verrtm=$_REQUEST['verrtm'];
$anortm=$_REQUEST['anortm'];
$plartm=$_REQUEST['plartm'];
$kmrtm=$_REQUEST['kmrtm'];
$valrtm=$_REQUEST['valrtm'];
$no_cotiza=$_REQUEST['no_cotiza'];
$no_retoma=$_REQUEST['no_retoma'];
$no_vehi=$_REQUEST['no_vehi'];
$dtecom=$_REQUEST['dtecom'];
$r_cli=$_REQUEST['r_cli'];
//echo 'mensaje    '.$vchint;
$orieven=$_SESSION['evento'];
$codeven=odbc_exec($conexion,"select * from fit.dbo.tb_lugar_even where nombre_even='$lugar_even'");
while($rw=odbc_fetch_array($codeven)){
$ideven=$rw['id_lugar_even'];
}
if($conexion){
//--- primera insercion cliente
//------Busco cliente si existe
if($r_cli==''){
$max_cli=odbc_exec($conexion,"select max(id_cliente)as id_cliente from fit.dbo.tb_cliente");
while($rowcount=odbc_fetch_array($max_cli)){
$concli=$rowcount['id_cliente']+1;
$inser_cliente=odbc_exec($conexion,"insert into fit.dbo.tb_cliente(nombre_cliente,apellido_cliente,documento_cliente,direccion_cliente,tel_cliente,email_cliente,id_cliente)values('$nombre','$apellido','$doc','$dir','$tel','$email','$concli')");
}
}
else {
if($doc==''){
$cliexi=odbc_exec($conexion,"select * from fit.dbo.tb_cliente where id_cliente='$r_cli'");
//-------
if(odbc_num_rows($cliexi)>0){
$actilzacli=odbc_exec($conexion,"update fit.dbo.tb_cliente set nombre_cliente='$nombre',apellido_cliente='$apellido',direccion_cliente='$dir',tel_cliente='$tel',email_cliente='$email' where id_cliente='$r_cli'");
}
else{
}
}//--final si 
else {
$cliexi=odbc_exec($conexion,"select * from fit.dbo.tb_cliente where documento_cliente='$doc'");
//-------
if(odbc_num_rows($cliexi)>0){
$actilzacli=odbc_exec($conexion,"update fit.dbo.tb_cliente set nombre_cliente='$nombre',apellido_cliente='$apellido',direccion_cliente='$dir',tel_cliente='$tel',email_cliente='$email' where documento_cliente='$doc'");
}
else{
$actilzacli=odbc_exec($conexion,"update fit.dbo.tb_cliente set nombre_cliente='$nombre',apellido_cliente='$apellido',direccion_cliente='$dir',tel_cliente='$tel',email_cliente='$email' where id_cliente='$r_cli'");
}
}
}

//---Validacion de la cotizacion si existo o no
if($no_cotiza==''){
$selec_count=odbc_exec($conexion,"select max(no_cotiza)as no_cotiza from fit.dbo.tb_cotiza");
while($rowcount=odbc_fetch_array($selec_count)){
$concotiza=$rowcount['no_cotiza']+1;
//echo $concotiza;
//--insercion de cotizacion
$invhcotiza=odbc_exec($conexion,"insert into fit.dbo.tb_cotiza(no_cotiza,cc_asesor,cc_cliente,esta_cli,esta_neg,qdetiene_compra,cod_lugar_evento,ori_contacto,obser_general)values('$concotiza','$docase','$doc','$estcli','$estneg','$dtecom','$ideven','$ideven','$obser')");
}
if($no_vehi=='' and $vhcint!=''){
//---selecciono el no cotizacion
$selec_count=odbc_exec($conexion,"select max(no_cotiza)as no_cotiza from fit.dbo.tb_cotiza");
while($rowcount=odbc_fetch_array($selec_count)){
$concotiza=$rowcount['no_cotiza'];
//--Inserto vechiculo de interes
$selec_cod=odbc_exec($conexion,"select vrscod from fit.dbo.tb_VersionesVehi where VRSNOM like '%$vhcint%'");
while($row=odbc_fetch_array($selec_cod)){
$cod=$row['vrscod'];
//----busco el max valor para vhcint con respecto a la cotizacion y sumo 1
$selec_countint=odbc_exec($conexion,"select max(vhc_int_x_cotiza) as vhc_int_x_cotiza from fit.dbo.tb_vhc_interes  where No_cotizacion='$concotiza'");
while($rowcount=odbc_fetch_array($selec_countint)){
$convhcint=$rowcount['vhc_int_x_cotiza']+1;
//-----inserto vehiculo de interes
$inser_vhcint=odbc_exec($conexion,"insert into fit.dbo.tb_vhc_interes(vhc_int_x_cotiza,valor_vhc,cuota_ini,saldo,plazo_meses,valor_cuota_aproxi,val_matricula,val_seguro,val_soat,acces_vhc,versvhc_cod,No_cotizacion)values('$convhcint','$vhcval','$vhccuotaini','$vhcsaldo','$plazmesvhc','$valmesaproxi','$valmatri','$valseguro','$valsoat','$accesor','$cod','$concotiza')");
}//---llave while de busqueda de version del vehiculo
}//-----llave de while  no_cotizacion
}
}
else {
$actualiza=odbc_exec($conexion,"update fit.dbo.tb_vhc_interes set valor_vhc='$vhcval',cuota_ini='$vhccuotaini',saldo='$vhcsaldo',plazo_meses='$plazmesvhc',valor_cuota_aproxi='$valmesaproxi',val_matricula='$valmatri',val_seguro='$valseguro',val_soat='$valsoat',acces_vhc='$accesor'");
}
//---Insercion retoma
if($no_retoma=='' and $rtm!=''){
//---selecciono numero de cotizacion
$selec_count=odbc_exec($conexion,"select max(no_cotiza)as no_cotiza from fit.dbo.tb_cotiza");
while($rowcount=odbc_fetch_array($selec_count)){
$concotiza=$rowcount['no_cotiza'];
//--busco el maximo valor para la retoma y sumo 1
$selec_countrtm=odbc_exec($conexion,"select max(rtm_x_cotiza) as rtm_x_cotiza from fit.dbo.tb_retoma  where No_cotizacion='$concotiza'");
while($rowcount=odbc_fetch_array($selec_countrtm)){
$conrtm=$rowcount['rtm_x_cotiza']+1;
}
//---inserto retoma si el campo es diferente de vacio 
$inser_retomvhc=odbc_exec($conexion,"insert into fit.dbo.tb_retoma(rtm_x_cotiza,nombre_ret,version,año_retoma,placa,kilomet_marca,val_retoma_aproxi,No_cotizacion)values('$conrtm','$rtm','$verrtm','$anortm','$plartm','$kmrtm','$valrtm','$concotiza')");

}//-----llave de while  no_cotizacion
}//---final del si de numero de retoma vacio
else{
$actilzartm=odbc_exec($conexion,"update fit.dbo.tb_retoma set nombre_ret='$rtm',version='$verrtm',año_retoma='$ano_rtm',placa='$plartm',kilomet_marca='$kmrtm',val_retoma_aproxi='$valrtm' where rtm_x_cotiza='$no_retoma' and No_cotizacion='$no_cotiza'");
}
}//---final condicion si no de cotizacion
 //------------------------termino si---------------
//------------------------**********---------------
else{
//---tercera parte insertar  vhcinteres si cumple la condicion !=''
if($no_vehi=='' and $vhcint!=''){
//---selecciono el no cotizacion
$selec_count=odbc_exec($conexion,"select no_cotiza from fit.dbo.tb_cotiza where No_cotiza='$no_cotiza'");
while($rowcount=odbc_fetch_array($selec_count)){
$concotiza=$rowcount['no_cotiza'];
//--Inserto vechiculo de interes
$selec_cod=odbc_exec($conexion,"select vrscod from fit.dbo.tb_VersionesVehi where VRSNOM like '%$vhcint%'");
while($row=odbc_fetch_array($selec_cod)){
$cod=$row['vrscod'];
//----busco el max valor para vhcint con respecto a la cotizacion y sumo 1
$selec_countint=odbc_exec($conexion,"select max(vhc_int_x_cotiza) as vhc_int_x_cotiza from fit.dbo.tb_vhc_interes  where No_cotizacion='$concotiza'");
while($rowcount=odbc_fetch_array($selec_countint)){
$convhcint=$rowcount['vhc_int_x_cotiza']+1;
//-----inserto vehiculo de interes
$inser_vhcint=odbc_exec($conexion,"insert into fit.dbo.tb_vhc_interes(vhc_int_x_cotiza,valor_vhc,cuota_ini,saldo,plazo_meses,valor_cuota_aproxi,val_matricula,val_seguro,val_soat,acces_vhc,versvhc_cod,No_cotizacion)values('$convhcint','$vhcval','$vhccuotaini','$vhcsaldo','$plazmesvhc','$valmesaproxi','$valmatri','$valseguro','$valsoat','$accesor','$cod','$concotiza')");
}//---llave while de busqueda de version del vehiculo
}//-----llave de while  no_cotizacion
}
}
else {
$actualiza=odbc_exec($conexion,"update fit.dbo.tb_vhc_interes set valor_vhc='$vhcval',cuota_ini='$vhccuotaini',saldo='$vhcsaldo',plazo_meses='$plazmesvhc',valor_cuota_aproxi='$valmesaproxi',val_matricula='$valmatri',val_seguro='$valseguro',val_soat='$valsoat',acces_vhc='$accesor'");
}
//---Insercion retoma
if($no_retoma=='' and $rtm!=''){
//---selecciono numero de cotizacion
$selec_count=odbc_exec($conexion,"select no_cotiza from fit.dbo.tb_cotiza where cc_cliente='$doc' and No_cotiza='$no_cotiza'");
while($rowcount=odbc_fetch_array($selec_count)){
$concotiza=$rowcount['no_cotiza'];
//--busco el maximo valor para la retoma y sumo 1
$selec_countrtm=odbc_exec($conexion,"select max(rtm_x_cotiza) as rtm_x_cotiza from fit.dbo.tb_retoma  where No_cotizacion='$concotiza'");
while($rowcount=odbc_fetch_array($selec_countrtm)){
$conrtm=$rowcount['rtm_x_cotiza']+1;
}
//---inserto retoma si el campo es diferente de vacio 
$inser_retomvhc=odbc_exec($conexion,"insert into fit.dbo.tb_retoma(rtm_x_cotiza,nombre_ret,version,año_retoma,placa,kilomet_marca,val_retoma_aproxi,No_cotizacion)values('$conrtm','$rtm','$verrtm','$anortm','$plartm','$kmrtm','$valrtm','$concotiza')");
}//-----llave de while  no_cotizacion
}
else {
$actilzartm=odbc_exec($conexion,"update fit.dbo.tb_retoma set nombre_ret='$rtm',version='$verrtm',año_retoma='$ano_rtm',placa='$plartm',kilomet_marca='$kmrtm',val_retoma_aproxi='$valrtm' where rtm_x_cotiza='$no_retoma' and No_cotizacion='$no_cotiza'");
}
}
}//llave  de conexion
else {
/*echo "<script language='Javascript'>alert('no se conecto a la base de datos');</script>";*/
}
odbc_close_all();
?>