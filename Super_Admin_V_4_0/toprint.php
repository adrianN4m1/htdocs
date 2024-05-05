<?php
require_once('library/tcpdf.php');

// Retrieve the variables from the POST request
$branchId = isset($_POST['branch_id']) ? $_POST['branch_id'] : '';
$startDate = isset($_POST['start_date']) ? $_POST['start_date'] : '';
$endDate = isset($_POST['end_date']) ? $_POST['end_date'] : '';

// Create a new TCPDF instance
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Document Title');
$pdf->SetSubject('Document Subject');
$pdf->SetKeywords('Keywords');

// Set default header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// Set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// Set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// Set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// Add a page
$pdf->AddPage();

// HTML content to be printed
$html = '<h1>Hello, TCPDF!</h1>
         <p>Branch ID: ' . $branchId . '</p>
         <p>Start Date: ' . $startDate . '</p>
         <p>End Date: ' . $endDate . '</p>';

// Print HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// Close and output PDF document
$pdfContent = $pdf->Output('document.pdf', 'S');
echo $pdfContent;
?>
