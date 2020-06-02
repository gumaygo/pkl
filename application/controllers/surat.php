<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {

	
	public function index()
	{
		require_once('third_party/fpdf.php');
		require_once('third_party/src/autoload.php');

// initiate FPDI
		$pdf = new \setasign\Fpdi\Fpdi();
	//	$pdf = new FPDI();
// add a page
		$pdf->AddPage();
// set the sourcefile
		$pdf->setSourceFile('C:\xampp\htdocs\gorbon\assets\template\template.pdf');

// import page 1
		$tplIdx = $pdf->importPage(1);
		

// use the imported page and place it at point 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 10, 10, 200);

// now write some text above the imported page
		$pdf->SetFont('Times',);
		$pdf->SetTextColor(0,0,0);
		$pdf->SetXY(89,80);
		$pdf->Write(0, "nama pudir 1 dari database");
		$pdf->SetXY(89,85,4);
		$pdf->Write(0, "17753042");
		$pdf->SetXY(89,90,4);
		$pdf->Write(0, " abc");
		$pdf->SetXY(89,139);
		$pdf->Write(0, "Ekonomi Dan Bisnis");
		$pdf->SetXY(89,144);
		$pdf->Write(0, "Manajemen Informatika");
		$pdf->SetXY(89,150);
		$pdf->Write(0, "npm");
		$pdf->SetXY(89,155);
		$pdf->Write(0, "Semester");
		$pdf->SetXY(89,160);
		$pdf->Write(0, "Tahun Akademik");
		$pdf->SetXY(89,176);
		$pdf->Write(0, "Tahun Akademik");
		$pdf->SetXY(89,182);
		$pdf->Write(0, "Tahun Akademik");
		$pdf->SetXY(89,187);
		$pdf->Write(0, "Tahun Akademik");
		$pdf->SetXY(89,192);
		$pdf->Write(0, "Tahun Akademik");
		$pdf->SetXY(89,197,2);
		$pdf->Write(0, "Tahun Akademik");
		$pdf->SetXY(89,203);
		$pdf->Write(0, "Tahun Akademik");
		


		$pdf->Output('newpdf1.pdf', 'D');
		echo "sukses";
	}
}
