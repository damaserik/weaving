<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_mesin_shtl3 extends CI_Model {
   
    public function all(){
        $hasil = $this->db->get('mesin_shtl3');
        if($hasil->num_rows()>0){
            return $hasil->result();
        }else{
            return array();
        }
    }

    public function find($id){
        $hasil = $this->db->where('no_mesin', $id)
                        ->limit(1)
                        ->get('mesin_shtl3');
        if($hasil->num_rows>0){
            return $hasil->row();
            }
            else{
            return array();
            }
    }

     public function simpan($data){
        $this->db->insert('mesin_shtl3',$data);
    }

    public function update($id,$data){
        $this->db->where('no_mesin', $id)
                 ->update('mesin_shtl3',$data);
    }

    public function hapus($id){
        $this->db->where('no_mesin', $id)
             ->delete('mesin_shtl3');
    }


    }
