<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mesin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_mesin');
        $this->load->helper('url','file');
    }

    public function index()
    {
        $data['dataMesin'] = $this->M_mesin->all();

        $this->load->view('ajl/index');
        $this->load->view('ajl/sidebar');
        $this->load->view('ajl/sidebar_content');
        $this->load->view('ajl/mesin/daftar_mesin', $data);
        $this->load->view('ajl/footer');
    }

    public function tambah()
    {
        // $data['no_mesin'] = $this->M_mesin->id_mesin();

        $this->load->view('ajl/index');
        $this->load->view('ajl/sidebar');
        $this->load->view('ajl/sidebar_content');
        $this->load->view('ajl/mesin/tambah_mesin');
        $this->load->view('ajl/footer');    
    }


    public function simpan()
    {
        $kode = $this->input->post('no_mesin');
        $zona = $this->input->post('zona');
        $rs = $this->input->post('rs');
        $data = array(
                        'no_mesin' => $kode,
                        'zona' => $zona,
                        'rs' => $rs
                     );
        $this->M_mesin->simpan($data);
        redirect('ajl/mesin');
        
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules('zona','zona','required');
        if($this->form_validation->run() == false){
       // $tmp['findBarang'] = $this->M_barang->find($id);
        // $tmp['findMesin'] = $this->M_mesin->find($id);

        $this->load->view('ajl/index');
        $this->load->view('ajl/mesin/edit_mesin', $tmp);
        $this->load->view('ajl/footer');
        }else{

        $zona = $this->input->post('zona');
        $rs = $this->input->post('rs');

        $data_mesin = array(
                        'zona' => $zona,
                        'rs' => $rs                       
                     );
        $this->M_mesin->update($id, $data_mesin);
        redirect('ajl/mesin');
       // redirect('admin/angsuran', 'refresh');
        }
    }

    public function hapus($id)
    {
        $this->M_mesin->hapus($id);
        redirect('ajl/mesin');
    }

}