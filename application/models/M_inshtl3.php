<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_inshtl3 extends CI_Model {
   
    // public function all(){
    //     $hasil = $this->db->get('input_ajl');
    //     if($hasil->num_rows()>0){
    //         return $hasil->result();
    //     }else{
    //         return array();
    //     }
    // }
    public function get_shtl3(){
        $this->db->select('*');
        $this->db->from('input_shtl3 as a');
        $this->db->join('benang_shtl3 as b','a.kd_benang=b.kd_benang');
        $this->db->join('mesin_shtl3 as c', 'a.no_mesin=c.no_mesin');
        $this->db->join('maintenance_shtl3 as d', 'a.kd_mtc = d.kd_mtc');
        $this->db->join('kagrup_shtl3 as e', 'a.kd_kagrup=e.kd_kagrup');
        $this->db->join('konstruksi_shtl3 as f', 'a.jns_konstruksi = f.jns_konstruksi');
        $this->db->order_by('a.tgl_input', 'desc');

        $query = $this->db->get(); 
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return array();
        }   
    }

    public function find($id){
        $hasil = $this->db->where('kd_sht3', $id)
                        ->limit(1)
                        ->get('input_shtl3');
        if($hasil->num_rows>0){
            return $hasil->row();
            }
            else{
            return array();
            }
    }

     public function simpan($data){
        $this->db->insert('input_shtl3',$data);
    }


                                                    public function get_mesin(){   //fungsi cari data
                                                        return $this->db->get('mesin_shtl3');
                                                    } 
                                                    public function get_benang(){   //fungsi cari data
                                                        return $this->db->get('benang_shtl3');
                                                    }
                                                    public function get_konstruksi(){   //fungsi cari data
                                                        return $this->db->get('konstruksi_shtl3');
                                                    }    
                                                    public function get_mtc(){   //fungsi cari data
                                                        return $this->db->get('maintenance_shtl3');
                                                    }
                                                    public function get_kagrup(){   //fungsi cari data
                                                        return $this->db->get('kagrup_shtl3');
                                                    }


    public function update($id,$data){
        $this->db->where('kd_sht3', $id)
                 ->update('input_shtl3',$data);
    }

    public function hapus($id){
        $this->db->where('kd_sht3', $id)
             ->delete('input_shtl3');
    }
    // public function kd_sht3()
    // {
    //     $this->db->select('RIGHT(benang.kd_benang, 3) as kode', FALSE);  
    //     $this->db->order_by('kd_benang','DESC');   
    //     $this->db->limit(1);
    //     $query = $this->db->get('benang'); 
             
    //         if($query->num_rows() <> 0){ 
    //             $data = $query->row();   
    //             $kode = intval($data->kode) + 1; 
    //         }else{ 
    //             $kode = 1; 
    //         } 
    //          $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);   $kodejadi = "BNG".$kodemax; 
             
    //      return $kodejadi;
    // }

    }
