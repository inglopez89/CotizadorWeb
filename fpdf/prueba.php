<?php
require('fpdf.php');

class PDF extends FPDF
{
//Cabecera de página
function Header()
{
$conexion=odbc_connect("sqlserver","sa","TdcSa2011",SQL_CUR_USE_DRIVER);
	
	//Logo
    $this->Image('toyo.jpg',10,8,30);
	// Numero de cotizacizacion y fecha
	$this->SetFont('Arial','I',10);
	$this->SetTextColor(0,0,0);
	$this->SetXY(155,10);
	$this->Cell(20,5,"Fecha:");
	$this->SetXY(175,10);
	$this->Cell(20,5,date("d/m/y"));
	$this->SetXY(160,10);
	$bcot=odbc_exec($conexion,"select max(no_cotiza)as no_cotiza from fit.dbo.tb_cotiza");
    while($rowcount=odbc_fetch_array($bcot)){
    $scot=$rowcount['no_cotiza'];
	$this->SetXY(150,20);
	$this->Cell(30,5,"Cotizacion Nº");
	$this->SetXY(180,20);
	$this->Cell(15,5,$rowcount['no_cotiza']);
    }
	
	//Datos del cliente 
    $maxid=odbc_exec($conexion,"select max(No_cotiza)as id from fit.dbo.tb_cotiza");
	while($row0=odbc_fetch_array($maxid)){
	$id=$row0['id'];
	}
	$cxc=odbc_exec($conexion,"select * from fit.dbo.tb_cotiza where No_cotiza='$id'");
	while($row4=odbc_fetch_array($cxc)){
	$bcli=$row4['cc_cliente'];
	}
	$this->SetXY(10,30);
	$this->Cell(185,10,'',1);
	$this->Text(80,35,'Datos del Cliente');
	$this->SetXY(10,40);
	$this->Cell(185,25,'',1);
	$cdp=odbc_exec($conexion,"select * from fit.dbo.tb_cliente where documento_cliente='$bcli'");
	while($row4=odbc_fetch_array($cdp)){
	$this->SetFont('Arial','I',10);
	$this->SetTextColor(0,0,0);
	$this->SetXY(10,40);
	$this->Cell(20,5,'Nombre');
	$this->SetXY(30,40);
	$this->Cell(35,5,$row4['nombre_cliente']);
    $this->SetXY(75,40);
	$this->Cell(20,5,'Apellido');
	$this->SetXY(95,40);
	$this->Cell(35,5,$row4['apellido_cliente']);
	$this->SetXY(10,50);
	$this->Cell(20,5,'Cedula');
	$this->SetXY(30,50);
	$this->Cell(35,5,$row4['documento_cliente']);
	$this->SetXY(75,50);
	$this->Cell(20,5,'E-Mail');
	$this->SetXY(95,50);
	$this->Cell(40,5,$row4['email_cliente']);
	$this->SetXY(10,60);
	$this->Cell(20,5,'Direccion');
	$this->SetXY(30,60);
	$this->Cell(70,5,$row4['direccion_cliente']);
	$this->SetXY(105,60);
	$this->Cell(30,5,'Telefono');
	$this->SetXY(135,60);
	$this->Cell(30,5,$row4['tel_cliente']);
	}
	//Cuadricula Cotizacion
	$this->SetXY(10,70);
	$this->MultiCell(185,65,'',1);
	$this->SetXY(10,70);
	$this->Cell(185,10,'',1,'C');
	$this->Text(85,75,'Vehiculos de interes');
	$this->SetXY(10,80);
	$this->Cell(40,5,"Vehiculo de interes",1);
	$this->SetXY(50,80);
	$this->Cell(20,5,"Valor",1,'C');
	$this->SetXY(70,80);
	$this->Cell(30,5,"Cuota inicial",1);
	$this->SetXY(100,80);
	$this->Cell(20,5,"Saldo",1);
	$this->SetXY(120,80);
	$this->Cell(20,5,"NºMeses",1);
	$this->SetXY(140,80);
	$this->Cell(30,5,"C.Mensual",1);
	$this->SetXY(170,80);
	$this->Cell(25,5,"Accesorios",1);
	$res=odbc_exec($conexion,"select * from fit.dbo.tb_vhc_interes where No_cotizacion='$scot'");
	$this->SetXY(10,82);
	while($row1=odbc_fetch_array($res)){
	$codvhc=$row1['versvhc_cod'];
	$nomvhc=odbc_exec($conexion,"select * from fit.dbo.tb_VersionesVehi where VRSCOD='$codvhc'");
	while($row5=odbc_fetch_array($nomvhc)){
	$this->ln(0);
	$this->Cell(40,10,substr($row5['VRSNOM'],5));
	$this->Cell(20,10,$row1['valor_vhc']);
	$this->Cell(30,10,$row1['cuota_ini']);
	$this->Cell(20,10,$row1['saldo']);
	$this->Cell(20,10,$row1['plazo_meses']);
	$this->Cell(30,10,$row1['valor_cuota_aproxi']);
	$this->MultiCell(25,10,$row1['acces_vhc']);

    }
}
//Cuadricula de retomas
    
	$this->SetXY(10,140);
	$this->Cell(185,50,'',1,'C');
	$this->SetXY(10,140);
	$this->Cell(185,10,'',1,'C');
	$this->Text(90,144,'Retomas');
	$this->SetXY(10,145);
	$this->Cell(50,5,"Nombre Vehiculo Retoma",1);
	$this->SetXY(60,145);
	$this->Cell(25,5,"Valor",1,'C');
	$this->SetXY(85,145);
	$this->Cell(35,5,"Cuota inicial",1);
	$this->SetXY(120,145);
	$this->Cell(25,5,"Saldo",1);
	$this->SetXY(145,145);
	$this->Cell(20,5,"NºMeses",1);
	$this->SetXY(165,145);
	$this->Cell(30,5,"C.Mensual",1);
	$res2=odbc_exec($conexion,"select * from fit.dbo.tb_retoma where No_cotizacion='$scot'");
    while($row2=odbc_fetch_array($res2)){
	$this->ln(5);
	$this->Cell(50,5,$row2['nombre_ret'],1,'C');
	$this->Cell(25,5,$row2['version'],1,'C');
	$this->Cell(35,5,$row2['año_retoma'],1);
	$this->Cell(25,5,$row2['placa'],1,'C');
	$this->Cell(20,5,$row2['kilomet_marca'],1,'C');
	$this->Cell(30,5,$row2['val_retoma_aproxi'],1,'C');
    
}
$cobs=odbc_exec($conexion,"select * from fit.dbo.tb_cotiza");
$this->Text(10,210,'Observaciones');
while($con=odbc_fetch_array($cobs)){
$rob=$con['obser_general'];
}
$this->SetXY(10,215);
$this->Cell(185,10,$rob,1,'C');
$this->Ln(1);
$this->SetXY(10,230);
$this->MultiCell(40,5,'Asesor:'.' '.'Camilo',0,'L');
$this->SetXY(80,230);
$this->MultiCell(30,5,'Codigo',0,'C');
$this->SetXY(140,230);
$this->MultiCell(30,5,'Celular',0,'R');
}
//Pie de página
function Footer()
{
    //Posición: a 1,5 cm del final
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','I',10);
    //Número de página
    //$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	$this->Image('footer.jpg',0,240,210);
}
}

//Creación del objeto de la clase heredada
$pdf=new PDF('P','mm','Letter');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',10);
$pdf->Output();
?>