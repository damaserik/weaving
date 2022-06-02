<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Konstruksi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_konstruksi');
        $this->load->helper('url','file');
    }

    public function index()
    {
        $data['dataKonstruksi'] = $this->M_konstruksi->all();

        $this->load->view('ajl/index');
        $this->load->view('ajl/sidebar');
        $this->load->view('ajl/sidebar_content');
        $this->load->view('ajl/konstruksi/daftar_konstruksi', $data);
        $this->load->view('ajl/footer');
    }

    public function tambah()
    {
        // $data['no_mesin'] = $this->M_mesin->id_mesin();

        $this->load->view('ajl/index');
        $this->load->view('ajl/sidebar');
        $this->load->view('ajl/sidebar_content');
        $this->load->view('ajl/konstruksi/tambah_konstruksi');
        $this->load->view('ajl/footer');    
    }


    public function simpan()
    {
        $kons = $this->input->post('jns_konstruksi');
        $data = array(
                        'jns_konstruksi' => $kons
                     );
        $this->M_konstruksi->simpan($data);
        redirect('ajl/konstruksi');
        
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules('zona','zona','required');
        if($this->form_validation->run() == false){
       // $tmp['findBarang'] = $this->M_barang->find($id);
        // $tmp['findMesin'] = $this->M_mesin->find($id);

        $this->load->view('ajl/index');
        $this->load->view('ajl/konstruksi/ubah_konstruksi', $tmp);
        $this->load->view('ajl/footer');
        }else{

        $zona = $this->input->post('zona');
        $rs = $this->input->post('rs');

        $data_mesin = array(
                        'zona' => $zona,
                        'rs' => $rs                       
                     );
        $this->M_konstruksi->update($id, $data_mesin);
        redirect('ajl/konstruksi');
       // redirect('admin/angsuran', 'refresh');
        }
    }

    public function hapus($id)
    {
        $this->M_konstruksi->hapus($id);
        redirect('ajl/konstruksi');
    }

}