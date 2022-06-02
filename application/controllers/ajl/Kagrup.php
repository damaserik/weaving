<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kagrup extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kagrup');
        $this->load->helper('url','file');
    }

    public function index()
    {
        $data['dataKagrup'] = $this->M_kagrup->all();

        $this->load->view('ajl/index');
        $this->load->view('ajl/sidebar');
        $this->load->view('ajl/sidebar_content');
        $this->load->view('ajl/kagrup/daftar_kagrup', $data);
        $this->load->view('ajl/footer');
    }

    public function tambah()
    {
        $data['kode'] = $this->M_kagrup->kd_kagrup();

        $this->load->view('ajl/index');
        $this->load->view('ajl/sidebar');
        $this->load->view('ajl/sidebar_content');
        $this->load->view('ajl/kagrup/tambah_kagrup', $data);
        $this->load->view('ajl/footer');    
    }

    public function simpan()
    {
        $kode = $this->input->post('kd_kagrup');
        $nama = $this->input->post('nama_kagrup');
        $data = array(
                        'kd_kagrup' => $kode,
                        'nama_kagrup' => $nama
                     );
        $this->M_kagrup->simpan($data);
        redirect('ajl/kagrup');
        
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules('nama_kagrup','nama_kagrup','required');
        if($this->form_validation->run() == false){
        $e['findKagrup'] = $this->M_kagrup->find($id);

        $this->load->view('ajl/index');
        $this->load->view('ajl/sidebar');
        $this->load->view('ajl/sidebar_content');
        $this->load->view('ajl/kagrup/ubah_kagrup', $e);
        $this->load->view('ajl/footer');
        }else{

        $nama = $this->input->post('nama_kagrup');
        $data = array(
                        'nama_kagrup' => $nama
                     );
        $this->M_kagrup->update($id, $data);
        redirect('ajl/kagrup');
        }
    }
    public function hapus($id)
    {
        $this->M_kagrup->hapus($id);
        redirect('ajl/kagrup');
    }

}