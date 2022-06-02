<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_inajl extends CI_Model {
   
    // public function all(){
    //     $hasil = $this->db->get('input_ajl');
    //     if($hasil->num_rows()>0){
    //         return $hasil->result();
    //     }else{
    //         return array();
    //     }
    // }
    public function get_ajl(){
        $this->db->select('*');
        $this->db->from('input_ajl as a');
        $this->db->join('benang as b','a.kd_benang=b.kd_benang');
        $this->db->join('mesin as c', 'a.no_mesin=c.no_mesin');
        $this->db->join('maintenance as d', 'a.kd_mtc = d.kd_mtc');
        $this->db->join('kagrup as e', 'a.kd_kagrup=e.kd_kagrup');
        $this->db->join('konstruksi as f', 'a.jns_konstruksi = f.jns_konstruksi');
        $this->db->order_by('a.tgl_input', 'desc');

        $query = $this->db->get(); 
        if($query->num_rows()>0){
            return $query->result();
            }
            else{
            return array();
            }   
    }

    public function find($id){
        $hasil = $this->db->where('kd_ajl', $id)
                        ->limit(1)
                        ->get('input_ajl');
        if($hasil->num_rows>0){
            return $hasil->row();
            }
            else{
            return array();
            }
    }

     public function simpan($data){
        $this->db->insert('input_ajl',$data);
    }


                                                    public function get_mesin(){   //fungsi cari data
                                                        return $this->db->get('mesin');
                                                    } 
                                                    public function get_benang(){   //fungsi cari data
                                                        return $this->db->get('benang');
                                                    }
                                                    public function get_konstruksi(){   //fungsi cari data
                                                        return $this->db->get('konstruksi');
                                                    }    
                                                    public function get_mtc(){   //fungsi cari data
                                                        return $this->db->get('maintenance');
                                                    }
                                                    public function get_kagrup(){   //fungsi cari data
                                                        return $this->db->get('kagrup');
                                                    }


    public function update($id,$data){
        $this->db->where('kd_ajl', $id)
                 ->update('input_ajl',$data);
    }

    public function hapus($id){
        $this->db->where('kd_ajl', $id)
             ->delete('input_ajl');
    }
    // public function kd_ajl()
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
