<?php
class M_home_shtl3 extends CI_Model{

	function get_data(){
        $query = $this->db->query("SELECT jns_konstruksi, round(AVG(eff),2) AS eff 
				FROM input_shtl3
				WHERE MONTH(tgl_input) = MONTH(NOW()) AND YEAR(tgl_input) = YEAR(NOW())
				GROUP BY jns_konstruksi");
				         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

}