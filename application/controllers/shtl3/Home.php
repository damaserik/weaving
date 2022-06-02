<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_home_shtl3');
        $this->load->helper('url','file');
	}

	public function index()
	{	
		$x['data']=$this->M_home_shtl3->get_data();

		$this->load->view('shtl3/index');
		$this->load->view('shtl3/sidebar');
		$this->load->view('shtl3/sidebar_content');
		$this->load->view('shtl3/content',$x);
		$this->load->view('shtl3/footer');
	}

}
