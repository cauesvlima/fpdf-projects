<?php 
define('FPDF_FONTPATH', 'font/');
require('fpdf186/bg.php'); // onde xxx é a versão da FPDF
$pdf = new FPDF();

$pdf->SetMargins(0, 0, 0);
$pdf->AddPage('F', 'A4');
$pdf->Image('bg1.jpg',0 ,0 , 297, 210);
$pdf->SetFont('Times', 'B', 60);
$pdf->Cell(298, 30, '', 0, 1, 'C');
$pdf->Cell(298, 15, 'Certificado', 0, 1, 'C');
$pdf->SetFont('Times', '', 30);
$pdf->Cell(298, 15, 'De conclusao de Curso', 0, 1, 'C');
$pdf->Cell(298, 20, '', 0, 1, 'C');
$pdf->SetFont('Times', '', 20);
$pdf->Cell(298, 10, 'Certificamos que, para os devidos fins, o aluno', 0, 1, 'C');

$pdf->SetFont('Times', '', 40);
$pdf->Cell(298, 20, 'Sergio de Souza', 0, 1, 'C');

$pdf->SetFont('Times', '', 20);
$pdf->Cell(298, 10, 'Concluiu o curso de "Informatica para internet e dispositivos moveis",', 0, 1, 'C');
$pdf->Cell(298, 10, 'ministrado pelo profissional Fernando Cunha,', 0, 1, 'C');
$pdf->Cell(298, 10, 'entre o periodo de 01/02/2021 e 01/12/2023,  na E.E. Clodoveu B.', 0, 1, 'C');
$pdf->Cell(298, 8, '', 0, 1, 'C');

$pdf->SetFont('Times', 'B', 20);
$pdf->Cell(298, 10, '_______________________________', 0, 1, 'C');
$pdf->Cell(298, 3, '', 0, 1, 'C');
$pdf->SetFont('Times', 'B', 23);
$pdf->Cell(298, 10, 'Caue  Lima', 0, 1, 'C');

$pdf->SetFont('Times', '', 20);
$pdf->Cell(298, 10, 'Diretor responsavel', 0, 1, 'C');
$pdf->Output('seu_arquivo.pdf', 'I'); //Salva e envia o documento.
?>