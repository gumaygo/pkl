<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	
	public function index()
	{
		$this->load->view('v_login');
	}

	public function input()
	{
		$this->load->view('v_mahasiswa_input');
	}
  public function input2()
  {
    $this->load->view('v_mahasiswa_input2');
  }
  public function input3()
  {
    $this->load->view('v_mahasiswa_input3');
  }
	public function history()
	{
		$this->load->view('v_mahasiswa');
	}
	public function menu()
	{
		$this->load->view('v_mahasiswa_menu');
	}
	public function form()
	{
		$this->load->view('v_login');
	}
	public function inputdata()
  {





    // Check form submit or not
    if($this->input->post('upload') != NULL ){

      $data = array();

      // Count total files
      $countfiles = count($_FILES['files']['name']);

      // Looping all files
      for($i=0;$i<$countfiles;$i++){

        if(!empty($_FILES['files']['name'][$i])){

          // Define new $_FILES array - $_FILES['file']
          $_FILES['file']['name'] = $_FILES['files']['name'][$i];
          $_FILES['file']['type'] = $_FILES['files']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['files']['error'][$i];
          $_FILES['file']['size'] = $_FILES['files']['size'][$i];
          $random = substr(md5(mt_rand()), 0, 7);
          $new_name = $random.time().$_FILES['files']['name'][$i];

          $config['upload_path'] = 'pdf/'; 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
          $config['max_size'] = '5000'; // max_size in kb
          $config['file_name'] = $new_name;

          if ($i == '0') {
            $file1= $config['file_name'];
          }

          if ($i == '1') {
            $file2= $config['file_name'];
          }

          //Load upload library
          $this->load->library('upload',$config); 

          // File upload
          if($this->upload->do_upload('file')){
            // Get data about the file
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

            // Initialize array
            $data['filenames'][] = $filename;
          }
        }

      }



      $sql = "INSERT INTO `request` (`id`, `npm`, `status`, `id_permintaan`, `nama_orangtua`, `nip_orangtua`, `pekerjaan_orangtua`, `pangkat_orangtua`, `instansi_orangtua`, `alamat_orangtua`, `foto_ukt`, `foto_daftarulang`, `tanggal`) VALUES (NULL, '".$this->session->userdata("nama")."', '0', '1', '".$_POST['nama_orangtua']."', '".$_POST['nip_orangtua']."', '".$_POST['pekerjaan_orangtua']."', '".$_POST['pangkat_orangtua']."', '".$_POST['instansi_orangtua']."', '".$_POST['alamat_orangtua']."', '".$file1."', '".$file2."','".date('Y-m-d')."')";
      $query = $this->db->query($sql);

     
      
      $this->load->view('v_mahasiswa');
    }else{

      // load view
      $this->load->view('v_mahasiswa_input');
    } 

  }

  public function inputdata2()
  {





    // Check form submit or not
    if($this->input->post('upload') != NULL ){

      $data = array();

      // Count total files
      $countfiles = count($_FILES['files']['name']);

      // Looping all files
      for($i=0;$i<$countfiles;$i++){

        if(!empty($_FILES['files']['name'][$i])){

          // Define new $_FILES array - $_FILES['file']
          $_FILES['file']['name'] = $_FILES['files']['name'][$i];
          $_FILES['file']['type'] = $_FILES['files']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['files']['error'][$i];
          $_FILES['file']['size'] = $_FILES['files']['size'][$i];
          $random = substr(md5(mt_rand()), 0, 7);
          $new_name = $random.time().$_FILES['files']['name'][$i];

          $config['upload_path'] = 'pdf/'; 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
          $config['max_size'] = '5000'; // max_size in kb
          $config['file_name'] = $new_name;

          if ($i == '0') {
            $file1= $config['file_name'];
          }

          if ($i == '1') {
            $file2= $config['file_name'];
          }

          //Load upload library
          $this->load->library('upload',$config); 

          // File upload
          if($this->upload->do_upload('file')){
            // Get data about the file
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

            // Initialize array
            $data['filenames'][] = $filename;
          }
        }

      }



      $sql = "INSERT INTO `request` (`id`, `npm`, `status`, `id_permintaan`, `nama_orangtua`, `nip_orangtua`, `pekerjaan_orangtua`, `pangkat_orangtua`, `instansi_orangtua`, `alamat_orangtua`, `foto_ukt`, `foto_daftarulang`, `tanggal`) VALUES (NULL, '".$this->session->userdata("nama")."', '0', '2', '".$_POST['nama_orangtua']."', '".$_POST['nip_orangtua']."', '".$_POST['pekerjaan_orangtua']."', '".$_POST['pangkat_orangtua']."', '".$_POST['instansi_orangtua']."', '".$_POST['alamat_orangtua']."', '".$file1."', '".$file2."','".date('Y-m-d')."')";
      $query = $this->db->query($sql);

       $this->load->view('v_mahasiswa');
    }else{

      // load view
      $this->load->view('v_mahasiswa_input');
    } 

  }

}
