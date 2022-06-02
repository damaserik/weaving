<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_kagrup extends CI_Model {
   
    public function all(){
        $hasil = $this->db->get('kagrup');
        if($hasil->num_rows()>0){
            return $hasil->result();
        }else{
            return array();
        }
    }

    public function find($id){
        $hasil = $this->db->where('kd_kagrup', $id)
                        ->limit(1)
                        ->get('kagrup');
        if($hasil->num_rows>0){
            return $hasil->row();
            }
            else{
            return array();
            }
    }

     public function simpan($data){
        $this->db->insert('kagrup',$data);
    }

    public function update($id,$data){
        $this->db->where('kd_kagrup', $id)
                 ->update('kagrup',$data);
    }


    public function hapus($id){
        $this->db->where('kd_kagrup', $id)
             ->delete('kagrup');
    }
    public function kd_kagrup()
    {
        $this->db->select('RIGHT(kagrup.kd_kagrup, 3) as kode', FALSE);  
        $this->db->order_by('kd_kagrup','DESC');   
        $this->db->limit(1);
        $query = $this->db->get('kagrup'); 
             
            if($query->num_rows() <> 0){ 
                $data = $query->row();   
                $kode = intval($data->kode) + 1; 
            }else{ 
                $kode = 1; 
            } 
             $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);   $kodejadi = "KG".$kodemax; 
             
         return $kodejadi;
    }

    }
