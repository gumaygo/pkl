<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kajur extends CI_Controller {

	public function index()
	{
		$this->load->view('v_kajur');
	}
	public function terima()
	{
		
		$queryy= " UPDATE `request` SET `status` = '4' WHERE `request`.`id` = '".$this->uri->segment('3')."'";
		$query = $this->db->query($queryy);
		$this->load->view('v_kajur');
	}

	public function tolak()
	{
		
		$queryy= " UPDATE `request` SET `status` = '3' WHERE `request`.`id` = '".$this->uri->segment('3')."'";
		$query = $this->db->query($queryy);
		$this->load->view('v_kajur');
	}



	public function detail()
	{
		if($this->input->post('submit') != NULL ){
			$postData = $this->input->post();
			echo "<b>Id :</b> ".$postData['id_request']."<br/>";

			


			$data = array(
				'id_nyaadalah' =>  $postData['id_request']
				
			);
			
			$this->load->view('v_kajur_detail', $data);
		}
	}
}
