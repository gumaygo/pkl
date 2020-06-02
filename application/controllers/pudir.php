<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pudir extends CI_Controller {

	public function index()
	{
		$this->load->view('v_pudir');
	}
	public function index2()
	{
		$this->load->view('v_pudir2');
	}
	public function terima()
	{
		$new_name = date("Ymd").time().substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', mt_rand(1,10))), 1, 10).".pdf";
		
		$queryy= " UPDATE `request` SET `status` = '2' , `surat` = '".$new_name."'  WHERE `request`.`id` = '".$this->uri->segment('3')."'";
		$query = $this->db->query($queryy);
		$id_nyaadalah = $this->uri->segment('3');
		$kueri = $this->db->query("select request.id, request.npm, request.status, mahasiswa.nama, mahasiswa.semester, mahasiswa.prodi, mahasiswa.jurusan, mahasiswa.alamat, permintaan_surat.nama_permintaan, request.id_permintaan, request.nama_orangtua, request.nip_orangtua, request.pekerjaan_orangtua, request.pangkat_orangtua,request.instansi_orangtua, request.alamat_orangtua, request.foto_ukt, request.foto_daftarulang, request.tanggal FROM request INNER JOIN Permintaan_surat on Permintaan_surat.id = request.id_permintaan JOIN mahasiswa ON mahasiswa.npm = request.npm where request.id = '".$id_nyaadalah."'");

                          foreach ($kueri->result_array() as $row)
                        {
                          $id_request=$row['id'];
                          $npm = $row['npm'];
                          $nama = $row['nama'];
                          $semester = $row['semester'];
                          $prodi = $row['prodi'];
                          $jurusan = $row['jurusan'];
                          $alamat =$row['alamat'];
                          $nama_orangtua = $row['nama_orangtua'];
                          $nip_orangtua = $row['alamat_orangtua'];
                          $pekerjaan_orangtua = $row['pekerjaan_orangtua'];
                          $pangkat_orangtua = $row['pangkat_orangtua'];
                          $instansi_orangtua = $row['instansi_orangtua'];
                          $alamat_orangtua = $row['alamat_orangtua'];
                          $foto_daftarulang = $row['foto_daftarulang'];
                          $foto_ukt = $row['foto_ukt'];

                        }

                        

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
		$pdf->Write(0, "Nip udir 1 dari database");
		$pdf->SetXY(89,90,4);
		$pdf->Write(0, "Pangkat Pudir 1 dari database");
		$pdf->SetXY(89,139);
		$pdf->Write(0, $jurusan);
		$pdf->SetXY(89,144);
		$pdf->Write(0, $prodi);
		$pdf->SetXY(89,150);
		$pdf->Write(0, $npm);
		$pdf->SetXY(89,155);
		$pdf->Write(0, $semester);
		$pdf->SetXY(89,160);
		$pdf->Write(0, "Tahun Akademik");
		$pdf->SetXY(89,176);
		$pdf->Write(0,  $nama_orangtua);
		$pdf->SetXY(89,182);
		$pdf->Write(0,$nip_orangtua );
		$pdf->SetXY(89,187);
		$pdf->Write(0, $pekerjaan_orangtua);
		$pdf->SetXY(89,192);
		$pdf->Write(0, $pangkat_orangtua);
		$pdf->SetXY(89,197,2);
		$pdf->Write(0, $instansi_orangtua);
		$pdf->SetXY(89,203);
		$pdf->Write(0, $alamat_orangtua);
		$pdf->SetXY(89,117);
		$pdf->Write(0, $nama);
		$pdf->SetXY(89,122,5);
		$pdf->Write(0, $npm);
		$pdf->SetXY(100,64);
		$pdf->Write(0, date("D-d-m-Y"));
		
		
 		
 		$pdf->Image("http://localhost/gorbon/third_party/qr2.php?link=".$new_name."", 185, 270, 20, 20, "png");
                        
         
		$pdf->Output("C:/xampp/htdocs/gorbon/files/mahasiswa/".$new_name."", "F");

		$this->load->view('v_pudir');
	}

	public function tolak()
	{
		
		$queryy= " UPDATE `request` SET `status` = '3' WHERE `request`.`id` = '".$this->uri->segment('3')."'";
		$query = $this->db->query($queryy);
		$this->load->view('v_pudir');
	}



	public function detail()
	{
		if($this->input->post('submit') != NULL ){
			$postData = $this->input->post();
			echo "<b>Id :</b> ".$postData['id_request']."<br/>";

			


			$data = array(
				'id_nyaadalah' =>  $postData['id_request']
				
			);
			
			$this->load->view('v_pudir_detail', $data);
		}
	}
}
