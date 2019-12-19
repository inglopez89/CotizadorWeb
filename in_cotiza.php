<?php
////Inicio la sesion para tomar parametros de evento y cedula de asesor
session_start();
/// establesco atributos de la cabecera
header('Content-Type: text/html; charset=iso-8859-1');
// establesco conexion
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER);  	
//Recojo variables del cliente
$docase=$_SESSION['docase'];
$nombre=$_REQUEST['nombre1'];
$nombre2=$_REQUEST['nombre2'];
$apellido=$_REQUEST['apellido1'];
$apellido2=$_REQUEST['apellido2'];
$doc=$_REQUEST['ced'];
$dir=$_REQUEST['dir'];
$email=$_REQUEST['email'];
$tel=$_REQUEST['tel'];
$estcli=$_REQUEST['estcli'];
$estneg=$_REQUEST['estneg'];
$dtecom=$_REQUEST['dtecom'];
$obser=$_REQUEST['obser'];	
//$fecha=date("d/m/y");
$lugar_even=$_SESSION['evento'];
$codeven=odbc_exec($conexion,"select * from fit.dbo.tb_lugar_even where nombre_even='$lugar_even'");
while($rw=odbc_fetch_array($codeven)){
$ideven=$rw['id_lugar_even'];
}
///Buscar max idlciente sumar 1 e insertarlo y revisar si ya existe cliente con registro y actualizar
if($doc==''){
$max_cli=odbc_exec($conexion,"select max(id_cliente)as id_cliente from fit.dbo.tb_cliente");
while($rowcount=odbc_fetch_array($max_cli)){
$concli=$rowcount['id_cliente']+1;
$doc='nn'.$concli;
$inser_cliente=odbc_exec($conexion,"insert into fit.dbo.tb_cliente(nombre_cliente,nombre2_cliente,apellido_cliente,apellido2_cliente,documento_cliente,direccion_cliente,tel_cliente,email_cliente,id_cliente)values
('$nombre','$nombre2','$apellido','$apellido2','$doc','$dir','$tel','$email','$concli')");
}
}
//-------
else{
$cliexi=odbc_exec($conexion,"select * from fit.dbo.tb_cliente where documento_cliente='$doc'");
//-------
if(odbc_num_rows($cliexi)>0){
$actilzacli=odbc_exec($conexion,"update fit.dbo.tb_cliente set nombre_cliente='$nombre',nombre2_cliente='$nombre2',apellido_cliente='$apellido',apellido2_cliente='$apellido2',direccion_cliente='$dir',tel_cliente='$tel',email_cliente='$email' where documento_cliente='$doc'");
echo"se actualizo el cliente";
}
else{
$max_cli=odbc_exec($conexion,"select max(id_cliente)as id_cliente from fit.dbo.tb_cliente");
while($rowcount1=odbc_fetch_array($max_cli)){
$concli=$rowcount1['id_cliente']+1;
$inser_cliente=odbc_exec($conexion,"insert into fit.dbo.tb_cliente(nombre_cliente,nombre2_cliente,apellido_cliente,apellido2_cliente,documento_cliente,direccion_cliente,tel_cliente,email_cliente,id_cliente)
values('$nombre','$nombre2','$apellido','$apellido2','$doc','$dir','$tel','$email','$concli')");
echo "Se ingreso el cliente correctamente\n";
}
}
}
//Busco maximo numero de cotizacion
$selec_count=odbc_exec($conexion,"select max(no_cotiza)as no_cotiza from fit.dbo.tb_cotiza");
while($rowcount=odbc_fetch_array($selec_count)){
$concotiza=$rowcount['no_cotiza']+1;
$invhcotiza=odbc_exec($conexion,"insert into fit.dbo.tb_cotiza(no_cotiza,cc_asesor,cc_cliente,esta_cli,esta_neg,qdetiene_compra,cod_lugar_evento,ori_contacto,obser_general)values('$concotiza','$docase','$doc','$estcli','$estneg','$dtecom','$ideven','$ideven','$obser')");
echo"Numero de cotizacion generada:'$concotiza'";
for ($i=1;$i<=10;$i++){
if(isset($_POST['vhcint'.$i])){
  $id_vhc=$_POST['citem'.$i];
  $vhcint=$_POST['vhcint'.$i];
  $vhcval=$_POST['vhcval'.$i]; 
  $vhccuotaini=$_POST['vhccuotaini'.$i];
  $vhcsaldo=$_POST['vhcsaldo'.$i]; 
  $plazmesvhc=$_POST['plazmesvhc'.$i]; 
  $valmesaproxi=$_POST['valmesaproxi'.$i];  
  $accesor =$_POST['accesor'.$i];    
  
 if($vhcint!=''){
//--Inserto vechiculo de interes
$selec_cod=odbc_exec($conexion,"select vrscod from fit.dbo.tb_VersionesVehi where VRSNOM like '%$vhcint%'");
while($row=odbc_fetch_array($selec_cod)){
$cod=$row['vrscod'];
//-----inserto vehiculo de interes
$inser_vhcint=odbc_exec($conexion,"insert into fit.dbo.tb_vhc_interes(vhc_int_x_cotiza,valor_vhc,cuota_ini,saldo,plazo_meses,valor_cuota_aproxi,acces_vhc,versvhc_cod,No_cotizacion)values('$id_vhc','$vhcval','$vhccuotaini','$vhcsaldo','$plazmesvhc','$valmesaproxi','$accesor','$cod','$concotiza')");
}//---llave while de busqueda de version del vehiculo
}
else {
}
}
else{
//echo "No vienen valores";
}
}//llave de for
}//llave de while cotizacion para que no se pierda valor
for ($j=1;$j<=10;$j++){
if(isset($_POST['rtm'.$j])){
  $id_rtm=$_POST['citem'.$j];
  $rtm=$_POST['rtm'.$j];
  $verrtm=$_POST['verrtm'.$j]; 
  $anortm=$_POST['anortm'.$j];
  $plartm=$_POST['plartm'.$j]; 
  $kmrtm=$_POST['kmrtm'.$j]; 
  $valrtm=$_POST['valrtm'.$j];  
  if($rtm!=''){
//---selecciono numero de cotizacion
$selec_count=odbc_exec($conexion,"select max(no_cotiza)as no_cotiza from fit.dbo.tb_cotiza");
while($rowcount=odbc_fetch_array($selec_count)){
$concotiza=$rowcount['no_cotiza'];
}
//---inserto retoma si el campo es diferente de vacio 
$inser_retomvhc=odbc_exec($conexion,"insert into fit.dbo.tb_retoma(rtm_x_cotiza,nombre_ret,version,año_retoma,placa,kilomet_marca,val_retoma_aproxi,No_cotizacion)values('$id_rtm','$rtm','$verrtm','$anortm','$plartm','$kmrtm','$valrtm','$concotiza')");
}//---final del si de numero de retoma vacio
else{
}
}
else{
//echo "No hay ningun parametro" 
}
}//-----llave de for
?>
