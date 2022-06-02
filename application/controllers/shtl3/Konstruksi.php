<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Konstruksi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_konstruksi_shtl3');
        $this->load->helper('url','file');
    }

    public function index()
    {
        $data['dataKonstruksi'] = $this->M_konstruksi_shtl3->all();

        $this->load->view('shtl3/index');
        $this->load->view('shtl3/sidebar');
        $this->load->view('shtl3/sidebar_content');
        $this->load->view('shtl3/konstruksi/daftar_konstruksi', $data);
        $this->load->view('shtl3/footer');
    }

    public function tambah()
    {
        // $data['no_mesin'] = $this->M_mesin->id_mesin();

        $this->load->view('shtl3/index');
        $this->load->view('shtl3/sidebar');
        $this->load->view('shtl3/sidebar_content');
        $this->load->view('shtl3/konstruksi/tambah_konstruksi');
        $this->load->view('shtl3/footer');    
    }


    public function simpan()
    {
        $kons = $this->input->post('jns_konstruksi');
        $data = array(
                        'jns_konstruksi' => $kons
                     );
        $this->M_konstruksi_shtl3->simpan($data);
        redirect('shtl3/konstruksi');
        
    }


    public function hapus($id)
    {
        $this->M_konstruksi_shtl3->hapus($id);
        redirect('shtl3/konstruksi');
    }

}