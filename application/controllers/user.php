<?php 

class User extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	function index(){
		if($this->session->userdata('level') == "0"){
			$this->load->view('v_superadmin');
		} elseif($this->session->userdata('level') == "1"){
			$this->load->view('v_superadmin');
		} elseif($this->session->userdata('level') == "2"){
			$this->load->view('v_superadmin');
		} elseif($this->session->userdata('level') == "3"){
			$this->load->view('v_superadmin');
		} elseif($this->session->userdata('level') == "4"){
			$this->load->view('v_superadmin');
		} elseif($this->session->userdata('level') == "5"){
			$this->load->view('v_superadmin');
		} elseif($this->session->userdata('level') == "6"){
			$this->load->view('v_superadmin');
		} elseif($this->session->userdata('level') == "7"){
			$this->load->view('v_superadmin');
		} elseif($this->session->userdata('level') == "8"){
			$this->load->view('v_superadmin');
		} elseif($this->session->userdata('level') == "9"){
			$this->load->view('v_superadmin');
		} elseif($this->session->userdata('level') == "10"){
			$this->load->view('v_superadmin');
		} elseif($this->session->userdata('level') == "11"){
			$this->load->view('v_superadmin');
		} elseif($this->session->userdata('level') == "12"){
			$this->load->view('v_superadmin');
		} elseif($this->session->userdata('level') == "13"){
			$this->load->view('v_user');
		} 
		
	}
	function root(){
		if($this->session->userdata('level') == "0"){
			$this->load->view('v_superadmin');
		} else { echo "anda tidak memiliki akses ke halaman ini";}
		
	}
	function mahasiswa(){
		$this->load->view('v_mahasiswa');
	}
	function baakpsi(){
		$this->load->view('v_baakpsi');
	}
	function pudir(){
		$this->load->view('v_pudir');
	}
	function users(){
		$this->load->view('v_user');
	}
	function kajur(){
		$this->load->view('v_kajur');
	}
	function kprodi(){
		$this->load->view('v_kprodi');
	}
	function dosen(){
		$this->load->view('v_dosen');
	}

	
	
}