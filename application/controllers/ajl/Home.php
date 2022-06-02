<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_home');
        $this->load->helper('url','file');
	}

	public function index()
	{	
		$x['data']=$this->M_home->get_data();

		$this->load->view('ajl/index');
		$this->load->view('ajl/sidebar');
		$this->load->view('ajl/sidebar_content');
		$this->load->view('ajl/content',$x);
		$this->load->view('ajl/footer');
	}


}
