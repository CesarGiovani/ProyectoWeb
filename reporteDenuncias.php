<?php
require('fpdf/fpdf.php');
require('conexion.php');
$idRepo = $_GET['IdReporte'];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Image('img/Escudo_Edo.png' , 10 ,8, 10 , 13,'PNG');
$pdf->Cell(18, 10, '', 0);
$pdf->Cell(125, 10, 'Ayuntamiento Constitucional de Jilotepec', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(35, 10, 'Fecha: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
//$pdf->Cell(100, 8, 'Receta para '., 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 2, 'IdReporte', 0);
$pdf->Cell(50, 4, 'Motivo', 0);
$pdf->Cell(45, 4, 'Fecha', 0);
$pdf->Cell(45, 4, 'Denunciante', 0);
$pdf->Cell(30, 4, 'Asenta', 0);
$pdf->Cell(50, 4, 'Calle', 0);
$pdf->Cell(50, 2, 'Numero', 0);
$pdf->Cell(45, 4, 'Departamento', 0);
$pdf->Cell(45, 4, 'Usuario', 0);
//$pdf->Cell(45, 8, 'Precio', 0);
//$pdf->Cell(30, 8, 'Campo 6', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$query = "SELECT
reporte.IdReporte,
reporte.Motivo,
reporte.Fecha,
concat (denunciante.Nombre,' ',
denunciante.ApellidoPa,' ',
denunciante.ApellidoMa) as Denunciante,
ubicacion.Asenta,
reporte.Calle,
reporte.Numero,
departamento.Descripcion as Departamento,
concat (usuario.Nombre,' ',
usuario.ApellidoPa,' ',
usuario.ApelidoMa) as Usuario
FROM
reporte
INNER JOIN denunciante ON reporte.IdDenunciante = denunciante.IdDenunciante
INNER JOIN departamento ON departamento.IdDepertamento = reporte.IdDepartamento
INNER JOIN ubicacion ON ubicacion.IdUbicacion = reporte.IdUbicacion
INNER JOIN usuario ON usuario.IdUsuario = departamento.IdUsuario
 WHERE reporte.IdReporte = '$idRepo'
";
$ejectQuery = mysqli_query($coneta,$query);
while($result = mysqli_fetch_assoc($ejectQuery)){
	$pdf->Cell(30, 2,utf8_decode($result['IdReporte']), 0);
	$pdf->Cell(50, 4,utf8_decode($result['Motivo']), 0);
	$pdf->Cell(45, 4,utf8_decode($result['Fecha']), 0);
	$pdf->Cell(45, 4, utf8_decode($result['Denunciante']), 0);
	$pdf->Cell(30, 4,utf8_decode($result['Asenta']), 0);
	$pdf->Cell(50, 4,utf8_decode($result['Calle']), 0);
	$pdf->Cell(50, 2,utf8_decode($result['Numero']), 0);
	$pdf->Cell(45, 4,utf8_decode($result['Departamento']), 0);
	$pdf->Cell(45, 4, utf8_decode($result['Usuario']), 0);
	//$pdf->Cell(45, 8, $result['precioPizza'], 0);
	/*$pdf->Cell(30, 8, $result['bd_campo6'], 0);*/

	$pdf->Ln(8);
}
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(114,8,'',0);
$pdf->Cell(31,8,'',0);
$pdf->Cell(32,8,'Estado de la Denuncia, Activo',0);
$pdf->Output();
?>
