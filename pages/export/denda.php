<?php
include "../../config/function-denda.php";

require_once('../../config/dompdf/dompdf_config.inc.php');
use Dompdf\Dompdf;

$pdf = new Dompdf();
$pdf->setPaper('A4', 'portrait');
$html = file_get_contents('file.html');
$pdf->loadHtml($html);
$pdf->render();
$pdf->output('pdf_export.pdf', 'D');
?>
