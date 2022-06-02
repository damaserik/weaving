<!--                                               CONTROLER BENANG AJL                                                                -->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Benang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_benang');
        $this->load->helper(array('url','file'));
    }

    public function index()
    {
        $data['dataBenang'] = $this->M_benang->all();

        $this->load->view('ajl/index');
        $this->load->view('ajl/sidebar');
        $this->load->view('ajl/sidebar_content');
        $this->load->view('ajl/benang/daftar_benang', $data);
        $this->load->view('ajl/footer');
    }

    public function tambah()
    {
        $data['kode'] = $this->M_benang->kd_benang();

        $this->load->view('ajl/index');
        $this->load->view('ajl/sidebar');
        $this->load->view('ajl/sidebar_content');
        $this->load->view('ajl/benang/tambah_benang', $data);
        $this->load->view('ajl/footer');    
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
        $this->M_benang->simpan($data);
        redirect('ajl/benang');
        
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules('asal_benang','ne','required');
        if($this->form_validation->run() == false){
        $tmp['findBenang'] = $this->M_benang->find($id);        

        $this->load->view('ajl/index');
        $this->load->view('ajl/sidebar');
        $this->load->view('ajl/sidebar_content');
        $this->load->view('ajl/benang/ubah_benang', $tmp);
        $this->load->view('ajl/footer');
        }else{
        
        $ne = $this->input->post('ne');
        $asl = $this->input->post('asal_benang');
        $lot = $this->input->post('lot');
        $data_benang = array(
                        'ne' => $ne,
                        'asal_benang' => $asl,
                        'lot' => $lot                    
                     );
        $this->M_benang->update($id, $data_benang);
        redirect('ajl/benang');
        }
    }

    public function hapus($id)
    {
        $this->M_benang->hapus($id);
        redirect('ajl/benang');
    }


}
/* <!--                                    END OF CONTROLER BENANG AJL                                                            -->*/