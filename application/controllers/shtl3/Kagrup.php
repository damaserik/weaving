<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kagrup extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kagrup_shtl3');
        $this->load->helper('url','file');
    }

    public function index()
    {
        $data['dataKagrup'] = $this->M_kagrup_shtl3->all();

        $this->load->view('shtl3/index');
        $this->load->view('shtl3/sidebar');
        $this->load->view('shtl3/sidebar_content');
        $this->load->view('shtl3/kagrup/daftar_kagrup', $data);
        $this->load->view('shtl3/footer');
    }

    public function tambah()
    {
        $data['kode'] = $this->M_kagrup_shtl3->kd_kagrup();

        $this->load->view('shtl3/index');
        $this->load->view('shtl3/sidebar');
        $this->load->view('shtl3/sidebar_content');
        $this->load->view('shtl3/kagrup/tambah_kagrup', $data);
        $this->load->view('shtl3/footer');    
    }

    public function simpan()
    {
        $kode = $this->input->post('kd_kagrup');
        $nama = $this->input->post('nama_kagrup');
        $data = array(
                        'kd_kagrup' => $kode,
                        'nama_kagrup' => $nama
                     );
        $this->M_kagrup_shtl3->simpan($data);
        redirect('shtl3/kagrup');
        
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules('nama_kagrup','nama_kagrup','required');
        if($this->form_validation->run() == false){
        $e['findKagrup'] = $this->M_kagrup->find($id);

        $this->load->view('shtl3/index');
        $this->load->view('shtl3/sidebar');
        $this->load->view('shtl3/sidebar_content');
        $this->load->view('shtl3/kagrup/ubah_kagrup', $e);
        $this->load->view('shtl3/footer');
        }else{

        $nama = $this->input->post('nama_kagrup');
        $data = array(
                        'nama_kagrup' => $nama
                     );
        $this->M_kagrup_shtl3->update($id, $data);
        redirect('shtl3/kagrup');
        }
    }
    public function hapus($id)
    {
        $this->M_kagrup_shtl3->hapus($id);
        redirect('shtl3/kagrup');
    }

}