<?php 
define('FPDF_FONTPATH', 'font/');
require('fpdf186/fpdf.php'); // onde xxx é a versão da FPDF
$pdf = new FPDF();

$pdf->AddPage('P', 'A4');//Adiciona uma página na vertical com o tamanho de uma folha A4
$pdf->SetFont('Arial', 'B', 15); //Define a fonte "Arial", em negrito, com 15 pontos de altura
$pdf->Write(0, 'Meu primeiro PDF no FPDF'); //Escreve um texto com uma altura 0 da linha
$pdf->Ln(10); //Quebra de Linha com 10 de altura
$pdf->SetFont('Arial', '', 10); //Define a fonte "Arial", com 10 pontos de altura
$pdf->Write(0, 'Exeplo de texto'); //Escreve um texto com uma altura 0 da linha
$pdf->Ln(5); //Quebra de Linha com 10 de altura
$pdf->Write(0, 'Outro exemplo de texto'); //Escreve um texto com uma altura 0 da linha
$pdf->Image('pdf.png', 50, 50, 100); //Adiciona uma imagem com margem vertical e horizontal de 50 pontos e uma altura de 100;
$pdf->AddPage('P', 'A4'); //Adiciona uma página na vertical com o tamanho de uma folha A4;
$pdf->Output(); //Salva e envia o documento.
?>


