﻿<?php
include "libchart/classes/libchart.php";
include('conexion2.php');
//$opc=$_REQUEST['opc'];
//if($conex){
//if($opc==1){

	$totali1p1s=odbc_exec($conexion,"select COUNT(nombre)as nombre from dbo.toycli");
	$totali1p1s=odbc_result($totali1p1s,'nombre');
	$totali1p1sn=odbc_exec($conexion,"select COUNT(cedula)as cedula from dbo.toycli ");
	$totali1p1sn=odbc_result($totali1p1sn,'cedula');
    header("Content-type: image/jpg");
	$chart = new PieChart(700, 300);
    $chart->setTitle("catidad de nombre contra cedula");
	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("cantidad($totali1p1s)de nombre", $totali1p1s));
	$dataSet->addPoint(new Point("cantidad($totali1p1sn)de cedulas",$totali1p1sn));
	$chart->setDataSet($dataSet);
	$chart->render("imagenes/lsuempre.jpg");
	
/*else{
	$totali1p1s=mysql_query("select count(*) from encuesta.item1 where pregunta1='si' and user like '$opc%'");
	$totali1p1s=mysql_result($totali1p1s,0);
	$totali1p1sn=mysql_query("select count(*) from encuesta.item1 where pregunta1='si/no depende' and user like '$opc%'");
	$totali1p1sn=mysql_result($totali1p1sn,0);
	$totali1p1n=mysql_query("select count(*) from encuesta.item1 where pregunta1='no' and user like '$opc%'");
	$totali1p1n=mysql_result($totali1p1n,0);

header("Content-type: image/jpg");
	$chart = new PieChart(700, 300);
    $chart->setTitle("¿Le gusta su empresa?");
	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Si han dicho($totali1p1s) personas", $totali1p1s));
	$dataSet->addPoint(new Point("si / no depende han dicho($totali1p1sn)personas",$totali1p1sn));
	$dataSet->addPoint(new Point("No han dicho($totali1p1n) personas", $totali1p1n));
	$chart->setDataSet($dataSet);
	$chart->render("imagenes/lsuempre.jpg");	
}
*/



?>