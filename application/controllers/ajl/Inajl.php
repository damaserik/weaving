<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inajl extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_inajl');
        $this->load->helper('url','file');
    }

    public function index()
    {
        $data['input_ajl'] = $this->M_inajl->get_ajl();

        $this->load->view('ajl/index');
        $this->load->view('ajl/sidebar');
        $this->load->view('ajl/sidebar_content');
        $this->load->view('ajl/inajl/daftar_inajl', $data);
        $this->load->view('ajl/footer');
    }

    public function tambah()
    {
        //$data['kode'] = $this->M_inajl->kd_ajl();
        $data['mesin'] = $this->M_inajl->get_mesin();
        $data['benang'] = $this->M_inajl->get_benang();
        $data['konstruksi'] = $this->M_inajl->get_konstruksi();
        $data['mtc'] = $this->M_inajl->get_mtc();
        $data['kagrup'] = $this->M_inajl->get_kagrup();

        $this->load->view('ajl/index');
        $this->load->view('ajl/sidebar');
        $this->load->view('ajl/sidebar_content');
        $this->load->view('ajl/inajl/tambah_inajl', $data);
        $this->load->view('ajl/footer');    
    }


    public function simpan()
    {
        $kode = $this->input->post('kd_ajl');
        $tgl_input = $this->input->post('tgl_input');
        $no_mesin = $this->input->post('no_mesin');
        $jns_konstruksi = $this->input->post('jns_konstruksi');        
        $kd_benang = $this->input->post('kd_benang');
        $no_beam = $this->input->post('no_beam');
        $kwal_kanji = $this->input->post('kwal_kanji');
        $tgl_pasang = $this->input->post('tgl_pasang');
        $tgl_kanji = $this->input->post('tgl_kanji');
        $visco_1 = $this->input->post('visco_1');
        $visco_2 = $this->input->post('visco_2');
        $spu = $this->input->post('spu');
        $set_kanji = $this->input->post('set_kanji');
        $kd_mtc = $this->input->post('kd_mtc');
        $kd_kagrup = $this->input->post('kd_kagrup');
        $eff = $this->input->post('eff');
        $putus_lusi = $this->input->post('putus_lusi');
        $wf_1 = $this->input->post('wf_1');
        $wf_2 = $this->input->post('wf_2');
        $putus_pakan = $this->input->post('putus_pakan');
        $weff = $this->input->post('weff');
        $rpm = $this->input->post('rpm');
        $msn = $this->input->post('msn');
        $gulung_mtr = $this->input->post('gulung_mtr');
        $gulung_yrd = $this->input->post('gulung_yrd');
        $mc = $this->input->post('mc');
        $data = array(
                        'kd_ajl' => $kode,
                        'tgl_input' => $tgl_input,
                        'no_mesin' => $no_mesin,
                        'jns_konstruksi' => $jns_konstruksi,
                        'kd_benang' => $kd_benang,
                        'no_beam' => $no_beam,
                        'kwal_kanji' => $kwal_kanji,
                        'tgl_pasang' => $tgl_pasang,
                        'tgl_kanji' => $tgl_kanji,
                        'visco_1' => $visco_1,
                        'visco_2' => $visco_2,
                        'spu' => $spu,
                        'set_kanji' => $set_kanji,
                        'kd_mtc' => $kd_mtc,
                        'kd_kagrup' => $kd_kagrup,
                        'eff' => $eff,
                        'putus_lusi' => $putus_lusi,
                        'wf_1' => $wf_1,
                        'wf_2' => $wf_2,
                        'putus_pakan' => $putus_pakan,
                        'weff' => $weff,
                        'rpm' => $rpm,
                        'msn' => $msn,
                        'gulung_mtr' => $gulung_mtr,
                        'gulung_yrd' => $gulung_yrd,
                        'mc' => $mc

                     );
        $this->M_inajl->simpan($data);
        redirect('ajl/inajl');
        
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
        $this->M_inajl->hapus($id);
        redirect('ajl/inajl');
    }


}