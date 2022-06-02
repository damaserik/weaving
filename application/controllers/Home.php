<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model(array('M_home','M_home_shtl3'));
        $this->load->helper('url','file');
	}

	public function index()
	{	
		$this->load->view('index');
	}

	function home_ajl(){
		$x['data']=$this->M_home->get_data();

		$this->load->view('ajl/index');
		$this->load->view('ajl/sidebar');
		$this->load->view('ajl/sidebar_content');
		$this->load->view('ajl/content',$x);
		$this->load->view('ajl/footer');
	}
		function home_shtl2(){

		$this->load->view('shuttle2/index');
		$this->load->view('shuttle2/sidebar');
		$this->load->view('shuttle2/sidebar_content');
		$this->load->view('shuttle2/content');
		$this->load->view('shuttle2/footer');
	}
	function home_shtl3(){
		$x['data']=$this->M_home_shtl3->get_data();
		$this->load->view('shtl3/index');
		$this->load->view('shtl3/sidebar');
		$this->load->view('shtl3/sidebar_content');
		$this->load->view('shtl3/content',$x);
		$this->load->view('shtl3/footer');
	}


}
