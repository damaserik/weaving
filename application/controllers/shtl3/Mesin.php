<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mesin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_mesin_shtl3');
        $this->load->helper('url','file');
    }

    public function index()
    {
        $data['dataMesin'] = $this->M_mesin_shtl3->all();

        $this->load->view('shtl3/index');
        $this->load->view('shtl3/sidebar');
        $this->load->view('shtl3/sidebar_content');
        $this->load->view('shtl3/mesin/daftar_mesin', $data);
        $this->load->view('shtl3/footer');
    }

    public function tambah()
    {
        // $data['no_mesin'] = $this->M_mesin->id_mesin();

        $this->load->view('shtl3/index');
        $this->load->view('shtl3/sidebar');
        $this->load->view('shtl3/sidebar_content');
        $this->load->view('shtl3/mesin/tambah_mesin');
        $this->load->view('shtl3/footer');    
    }


    public function simpan()
    {
        $kode = $this->input->post('no_mesin');
        $daerah = $this->input->post('daerah');
        $line = $this->input->post('line');
        $data = array(
                        'no_mesin' => $kode,
                        'daerah' => $daerah,
                        'line' => $line
                     );
        $this->M_mesin_shtl3->simpan($data);
        redirect('shtl3/mesin');
        
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules('zona','zona','required');
        if($this->form_validation->run() == false){
       // $tmp['findBarang'] = $this->M_barang->find($id);
        // $tmp['findMesin'] = $this->M_mesin->find($id);

        $this->load->view('shtl3/index');
        $this->load->view('shtl3/mesin/edit_mesin', $tmp);
        $this->load->view('shtl3/footer');
        }else{

        $zona = $this->input->post('zona');
        $rs = $this->input->post('rs');

        $data_mesin = array(
                        'daerah' => $daerah,
                        'line' => $line
                     );
        $this->M_mesin_shtl3->update($id, $data_mesin);
        redirect('shtl3/mesin');
       // redirect('admin/angsuran', 'refresh');
        }
    }

    public function hapus($id)
    {
        $this->M_mesin_shtl3->hapus($id);
        redirect('shtl3/mesin');
    }

}