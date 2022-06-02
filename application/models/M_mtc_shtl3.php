<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_mtc_shtl3 extends CI_Model {
   
    public function all(){
        $hasil = $this->db->get('maintenance_shtl3');
        if($hasil->num_rows()>0){
            return $hasil->result();
        }else{
            return array();
        }
    }

                                                //     public function rules()
                                                // {
                                                //     return [
                                                //         ['field' => 'kd_mtc',
                                                //         'label' => 'Kode Mtc',
                                                //         'rules' => 'required'],

                                                //         ['field' => 'nama_mtc',
                                                //         'label' => 'Nama Mtc',
                                                //         'rules' => 'numeric']
                                                //     ];
                                                // }

                                                //  public function getById($id)
                                                //         {
                                                // return $this->db->get_where($this->maintenance, ["kd_mtc" => $id])->row();
                                                //              }
    public function find($id){
        $hasil = $this->db->where('kd_mtc', $id)
                        ->limit(1)
                        ->get('maintenance_shtl3');
        if($hasil->num_rows>0){
            return $hasil->row();
            }
            else{
            return array();
            }
    }

     public function simpan($data){
        $this->db->insert('maintenance_shtl3',$data);
    }

    public function update($id,$data){
        $this->db->where('kd_mtc', $id)
                 ->update('maintenance_shtl3',$data);
    }


                                            // public function update()
                                            // {
                                            //     $post = $this->input->post();
                                            //     $this->kd_mtc = $post["kd_mtc"];
                                            //     $this->nama_mtc = $post["nama_mtc"];
                                            //     $this->db->update($this->_table, $this, array('kd_mtc' => $post['kd_mtc']));
                                            // }
    public function hapus($id){
        $this->db->where('kd_mtc', $id)
             ->delete('maintenance_shtl3');
    }
    public function kd_mtc()
    {
        $this->db->select('RIGHT(maintenance_shtl3.kd_mtc, 3) as kode', FALSE);  
        $this->db->order_by('kd_mtc','DESC');   
        $this->db->limit(1);
        $query = $this->db->get('maintenance_shtl3'); 
             
            if($query->num_rows() <> 0){ 
                $data = $query->row();   
                $kode = intval($data->kode) + 1; 
            }else{ 
                $kode = 1; 
            } 
             $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);   $kodejadi = "MTC".$kodemax; 
             
         return $kodejadi;
    }

    }
