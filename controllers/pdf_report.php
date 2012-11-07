<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pdf_report extends CI_Controller {

	function index() {
		$this->load->view('pdf-report');		
	}

	function report(){
	
		$html = '<html>
				<head></head>
				<body>
					<h1>HELLO WORLD!</h1>
					<hr>
					<strong>I\'m pdf report</strong>
				</body>
				</html>
				';
		
		$pdf_filename  = 'My-report.pdf';
		$this->load->library('dompdf_lib');
		$this->dompdf_lib->convert_html_to_pdf($html, $pdf_filename, true);
	}
	
}
?>