<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mtc extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_mtc_shtl3');
        $this->load->helper('url','file');
    }

    public function index()
    {
        $data['dataMtc'] = $this->M_mtc_shtl3->all();

        $this->load->view('shtl3/index');
        $this->load->view('shtl3/sidebar');
        $this->load->view('shtl3/sidebar_content');
        $this->load->view('shtl3/mtc/daftar_mtc', $data);
        $this->load->view('shtl3/footer');
    }

    public function tambah()
    {
        $data['kode'] = $this->M_mtc_shtl3->kd_mtc();

        $this->load->view('shtl3/index');
        $this->load->view('shtl3/sidebar');
        $this->load->view('shtl3/sidebar_content');
        $this->load->view('shtl3/mtc/tambah_mtc', $data);
        $this->load->view('shtl3/footer');    
    }

    public function simpan()
    {
        $kode = $this->input->post('kd_mtc');
        $nama = $this->input->post('nama_mtc');
        $data = array(
                        'kd_mtc' => $kode,
                        'nama_mtc' => $nama
                     );
        $this->M_mtc_shtl3->simpan($data);
        redirect('shtl3/mtc');
        
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules('nama_mtc','nama_mtc','required');
        if($this->form_validation->run() == false){
        $e['findMtc'] = $this->M_mtc_shtl3->find($id);

        $this->load->view('index');
        $this->load->view('sidebar');
        $this->load->view('sidebar_content');
        $this->load->view('mtc/ubah_mtc', $e);
        $this->load->view('footer');
        }else{

        $nama = $this->input->post('nama_mtc');
        $data = array(
                        'nama_mtc' => $nama
                     );
        $this->M_mtc_shtl3->update($id, $data);
        redirect('shtl3/mtc');
        }
    }


    public function hapus($id)
    {
        $this->M_mtc_shtl3->hapus($id);
        redirect('shtl3/mtc');
    }

}