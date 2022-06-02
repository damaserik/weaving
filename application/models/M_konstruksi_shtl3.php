<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_konstruksi_shtl3 extends CI_Model {
   
    public function all(){
        $hasil = $this->db->get('konstruksi_shtl3');
        if($hasil->num_rows()>0){
            return $hasil->result();
        }else{
            return array();
        }
    }

    public function find($id){
        $hasil = $this->db->where('jns_konstruksi', $id)
                        ->limit(1)
                        ->get('konstruksi_shtl3');
        if($hasil->num_rows>0){
            return $hasil->row();
            }
            else{
            return array();
            }
    }

     public function simpan($data){
        $this->db->insert('konstruksi_shtl3',$data);
    }

    public function update($id,$data){
        $this->db->where('jns_konstruksi', $id)
                 ->update('konstruksi_shtl3',$data);
    }

    public function hapus($id){
        $this->db->where('jns_konstruksi', $id)
             ->delete('konstruksi_shtl3');
    }

    }
