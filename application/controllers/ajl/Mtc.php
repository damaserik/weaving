<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mtc extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_mtc');
        $this->load->helper('url','file');
    }

    public function index()
    {
        $data['dataMtc'] = $this->M_mtc->all();

        $this->load->view('ajl/index');
        $this->load->view('ajl/sidebar');
        $this->load->view('ajl/sidebar_content');
        $this->load->view('ajl/mtc/daftar_mtc', $data);
        $this->load->view('ajl/footer');
    }

    public function tambah()
    {
        $data['kode'] = $this->M_mtc->kd_mtc();

        $this->load->view('ajl/index');
        $this->load->view('ajl/sidebar');
        $this->load->view('ajl/sidebar_content');
        $this->load->view('ajl/mtc/tambah_mtc', $data);
        $this->load->view('ajl/footer');    
    }

    public function simpan()
    {
        $kode = $this->input->post('kd_mtc');
        $nama = $this->input->post('nama_mtc');
        $data = array(
                        'kd_mtc' => $kode,
                        'nama_mtc' => $nama
                     );
        $this->M_mtc->simpan($data);
        redirect('ajl/mtc');
        
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules('nama_mtc','nama_mtc','required');
        if($this->form_validation->run() == false){
        $e['findMtc'] = $this->M_mtc->find($id);

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
        $this->M_mtc->update($id, $data);
        redirect('ajl/mtc');
        }
    }


    public function hapus($id)
    {
        $this->M_mtc->hapus($id);
        redirect('ajl/mtc');
    }

}