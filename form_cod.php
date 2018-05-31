<?php

require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

if(isset($_POST['create_pdf'])){
	//recogiendo el contenido del fichero form_cod.php
	ob_start();
	require_once 'pag_pdf.php';
	$html = ob_get_clean();
	$html2pdf = new Html2Pdf('p','A4','es','true','UTF-8');
	$html2pdf->writeHTML($html);
	$html2pdf->output('cotizar.pdf');
}
?>