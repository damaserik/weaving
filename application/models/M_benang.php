<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_benang extends CI_Model {
   
    public function all(){
        $hasil = $this->db->get('benang');
        if($hasil->num_rows()>0){
            return $hasil->result();
        }else{
            return array();
        }
    }

    public function find($id){
        $hasil = $this->db->where('kd_benang', $id)
                        ->limit(1)
                        ->get('benang');
        if($hasil->num_rows>0){
            return $hasil->row();
            }
            else{
            return array();
            }
    }

     public function simpan($data){
        $this->db->insert('benang',$data);
    }

    public function update($id,$data){
        $this->db->where('kd_benang', $id)
                 ->update('benang',$data);
    }

    public function hapus($id){
        $this->db->where('kd_benang', $id)
             ->delete('benang');
    }
    public function kd_benang()
    {
        $this->db->select('RIGHT(benang.kd_benang, 3) as kode', FALSE);  
        $this->db->order_by('kd_benang','DESC');   
        $this->db->limit(1);
        $query = $this->db->get('benang'); 
             
            if($query->num_rows() <> 0){ 
                $data = $query->row();   
                $kode = intval($data->kode) + 1; 
            }else{ 
                $kode = 1; 
            } 
             $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);   $kodejadi = "BNG".$kodemax; 
             
         return $kodejadi;
    }

    }
