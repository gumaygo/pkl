<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baakpsi extends CI_Controller {

	public function index()
	{
		$this->load->view('v_baakpsi');
	}
	public function index2()
	{
		$this->load->view('v_baakpsi2');
	}
	public function terima()
	{
		
		$queryy= " UPDATE `request` SET `status` = '1' WHERE `request`.`id` = '".$this->uri->segment('3')."'";
		$query = $this->db->query($queryy);
		$this->load->view('v_baakpsi');
	}
	public function terima2()
	{
		
		$queryy= " UPDATE `request` SET `status` = '5' WHERE `request`.`id` = '".$this->uri->segment('3')."'";
		$query = $this->db->query($queryy);
		$this->load->view('v_baakpsi');
	}

	public function tolak()
	{
		
		$queryy= " UPDATE `request` SET `status` = '3' WHERE `request`.`id` = '".$this->uri->segment('3')."'";
		$query = $this->db->query($queryy);
		$this->load->view('v_baakpsi');
	}



	public function detail()
	{
		if($this->input->post('submit') != NULL ){
			$postData = $this->input->post();
			echo "<b>Id :</b> ".$postData['id_request']."<br/>";

			


			$data = array(
				'id_nyaadalah' =>  $postData['id_request']
				
			);
			
			$this->load->view('v_baakpsi_detail', $data);
		}
	}
	public function detail2()
	{
		if($this->input->post('submit') != NULL ){
			$postData = $this->input->post();
			echo "<b>Id :</b> ".$postData['id_request']."<br/>";

			


			$data = array(
				'id_nyaadalah' =>  $postData['id_request']
				
			);
			
			$this->load->view('v_baakpsi_detail', $data);
		}
	}
}
