<!--                                      CONTROLER BENANG SHUTTLE 3                                                            -->


<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Benang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_benang_shtl3');
        $this->load->helper(array('url','file'));
    }

    public function index()
    {
        $data['dataBenang'] = $this->M_benang_shtl3->all();

        $this->load->view('shtl3/index');
        $this->load->view('shtl3/sidebar');
        $this->load->view('shtl3/sidebar_content');
        $this->load->view('shtl3/benang/daftar_benang', $data);
        $this->load->view('shtl3/footer');
    }

    public function tambah()
    {
        $data['kode'] = $this->M_benang_shtl3->kd_benang();

        $this->load->view('shtl3/index');
        $this->load->view('shtl3/sidebar');
        $this->load->view('shtl3/sidebar_content');
        $this->load->view('shtl3/benang/tambah_benang', $data);
        $this->load->view('shtl3/footer');    
    }


    public function simpan()
    {
        $kode = $this->input->post('kd_benang');
        $ne = $this->input->post('ne');
        $asl = $this->input->post('asal_benang');
        $lot = $this->input->post('lot');
        $data = array(
                        'kd_benang' => $kode,
                        'ne' => $ne,
                        'asal_benang' => $asl,
                        'lot' => $lot
                     );
        $this->M_benang_shtl3->simpan($data);
        redirect('shtl3/benang');
        
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules('asal_benang','ne','required');
        if($this->form_validation->run() == false){
        $tmp['findBenang'] = $this->M_benang_shtl3->find($id);        

        $this->load->view('shtl3/index');
        $this->load->view('shtl3/sidebar');
        $this->load->view('shtl3/sidebar_content');
        $this->load->view('shtl3/benang/ubah_benang', $tmp);
        $this->load->view('shtl3/footer');
        }else{
        
        $ne = $this->input->post('ne');
        $asl = $this->input->post('asal_benang');
        $lot = $this->input->post('lot');
        $data_benang = array(
                        'ne' => $ne,
                        'asal_benang' => $asl,
                        'lot' => $lot                    
                     );
        $this->M_benang_shtl3->update($id, $data_benang);
        redirect('shtl3/benang');
        }
    }

    public function hapus($id)
    {
        $this->M_benang_shtl3->hapus($id);
        redirect('shtl3/benang');
    }


}
/* <!--                                    END OF CONTROLER BENANG SHUTTLE 3                                                            -->*/
