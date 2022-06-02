<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_konstruksi extends CI_Model {
   
    public function all(){
        $hasil = $this->db->get('konstruksi');
        if($hasil->num_rows()>0){
            return $hasil->result();
        }else{
            return array();
        }
    }

    public function find($id){
        $hasil = $this->db->where('jns_konstruksi', $id)
                        ->limit(1)
                        ->get('konstruksi');
        if($hasil->num_rows>0){
            return $hasil->row();
            }
            else{
            return array();
            }
    }

     public function simpan($data){
        $this->db->insert('konstruksi',$data);
    }

    public function update($id,$data){
        $this->db->where('jns_konstruksi', $id)
                 ->update('konstruksi',$data);
    }

    public function hapus($id){
        $this->db->where('jns_konstruksi', $id)
             ->delete('konstruksi');
    }

    }
