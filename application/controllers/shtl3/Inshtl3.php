<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inshtl3 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_inshtl3');
        $this->load->helper(array('url','file'));
    }

    public function index()
    {
        $s['dada'] = $this->M_inshtl3->get_shtl3();

        $this->load->view('shtl3/index');
        $this->load->view('shtl3/sidebar');
        $this->load->view('shtl3/sidebar_content');
        $this->load->view('shtl3/inshtl3/daftar_inshtl3', $s);
        $this->load->view('shtl3/footer');
    }

    public function tambah()
    {
        //$data['kode'] = $this->M_inajl->kd_ajl();
        $data['mesin_shtl3'] = $this->M_inshtl3->get_mesin();
        $data['benang_shtl3'] = $this->M_inshtl3->get_benang();
        $data['konstruksi_shtl3'] = $this->M_inshtl3->get_konstruksi();
        $data['mtc_shtl3'] = $this->M_inshtl3->get_mtc();
        $data['kagrup_shtl3'] = $this->M_inshtl3->get_kagrup();

        $this->load->view('shtl3/index');
        $this->load->view('shtl3/sidebar');
        $this->load->view('shtl3/sidebar_content');
        $this->load->view('shtl3/inshtl3/tambah_inshtl3', $data);
        $this->load->view('shtl3/footer');    
    }


    public function simpan()
    {
        $kode = $this->input->post('kd_sht3');
        $tgl_input = $this->input->post('tgl_input'); 
        $no_mesin = $this->input->post('no_mesin');
        $jns_konstruksi = $this->input->post('jns_konstruksi'); 
        $kd_benang = $this->input->post('kd_benang');
        $kd_mtc = $this->input->post('kd_mtc');
        $kd_kagrup = $this->input->post('kd_kagrup');
        $eff = $this->input->post('eff');      
        $produksi = $this->input->post('produksi');
        $pick = $this->input->post('pick');
        $data = array(
                        'kd_sht3' => $kode,
                        'tgl_input' => $tgl_input,
                        'no_mesin' => $no_mesin,
                        'jns_konstruksi' => $jns_konstruksi,
                        'kd_benang' => $kd_benang,
                        'kd_mtc' => $kd_mtc,
                        'kd_kagrup' => $kd_kagrup,
                        'eff' => $eff,
                        'produksi' => $produksi,
                        'pick' => $pick,

                     );
        $this->M_inshtl3->simpan($data);
        redirect('shtl3/inshtl3');
        
    }

    // public function ubah($id)
    // {
    //     $this->form_validation->set_rules('ne','asal_benang','required');
    //     if($this->form_validation->run() == false){
    //     $tmp['findBenang'] = $this->M_benang->find($id);
        

    //     $this->load->view('index');
    //     $this->load->view('sidebar');
    //     $this->load->view('sidebar_content');
    //     $this->load->view('benang/ubah_benang', $tmp);
    //     $this->load->view('footer');
    //     }else{

    //     $ne = $this->input->post('ne');
    //     $asl = $this->input->post('asal_benang');
    //     $lot = $this->input->post('lot');
    //     $data_benang = array(
    //                     'ne' => $ne,
    //                     'asal_benang' => $asl,
    //                     'lot' => $lot                    
    //                  );
    //     $this->M_benang->update($id, $data_benang);
    //     redirect('benang');
    //     }
    // }

    public function hapus($id)
    {
        $this->M_inshtl3->hapus($id);
        redirect('shtl3/inshtl3');
    }


}