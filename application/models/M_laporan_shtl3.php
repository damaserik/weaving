<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_laporan_shtl3 extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function lap_kain($bulan, $tahun)
	{
		$query = $this->db->query("SELECT IFNULL(jns_konstruksi,'GRAND TOTAL')AS jns_konstruksi,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 01 THEN eff ELSE NULL END),2) AS TGL_1,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 02 THEN eff ELSE NULL END),2) AS TGL_2,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 03 THEN eff ELSE NULL END),2) AS TGL_3,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 04 THEN eff ELSE NULL END),2) AS TGL_4,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 05 THEN eff ELSE NULL END),2) AS TGL_5,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 06 THEN eff ELSE NULL END),2) AS TGL_6,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 07 THEN eff ELSE NULL END),2) AS TGL_7,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 08 THEN eff ELSE NULL END),2) AS TGL_8,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 09 THEN eff ELSE NULL END),2) AS TGL_9,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 10 THEN eff ELSE NULL END),2) AS TGL_10,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 11 THEN eff ELSE NULL END),2) AS TGL_11,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 12 THEN eff ELSE NULL END),2) AS TGL_12,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 13 THEN eff ELSE NULL END),2) AS TGL_13,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 14 THEN eff ELSE NULL END),2) AS TGL_14,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 15 THEN eff ELSE NULL END),2) AS TGL_15,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 16 THEN eff ELSE NULL END),2) AS TGL_16,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 17 THEN eff ELSE NULL END),2) AS TGL_17,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 18 THEN eff ELSE NULL END),2) AS TGL_18,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 19 THEN eff ELSE NULL END),2) AS TGL_19,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 20 THEN eff ELSE NULL END),2) AS TGL_20,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 21 THEN eff ELSE NULL END),2) AS TGL_21,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 22 THEN eff ELSE NULL END),2) AS TGL_22,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 23 THEN eff ELSE NULL END),2) AS TGL_23,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 24 THEN eff ELSE NULL END),2) AS TGL_24,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 25 THEN eff ELSE NULL END),2) AS TGL_25,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 26 THEN eff ELSE NULL END),2) AS TGL_26,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 27 THEN eff ELSE NULL END),2) AS TGL_27,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 28 THEN eff ELSE NULL END),2) AS TGL_28,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 29 THEN eff ELSE NULL END),2) AS TGL_29,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 30 THEN eff ELSE NULL END),2) AS TGL_30,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 31 THEN eff ELSE NULL END),2) AS TGL_31,
					ROUND(AVG(eff),2) AS rata2_
					FROM input_shtl3
					WHERE MONTH(tgl_input)='$bulan' AND YEAR(tgl_input)='$tahun'
					GROUP BY jns_konstruksi
					WITH ROLLUP");
		return $query->result();
	}

		
	public function lap_eff_permesin($bulan, $tahun)
	{
		$query = $this->db->query("SELECT kagrup_shtl3.nama_kagrup,maintenance_shtl3.nama_mtc,no_mesin,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 01 THEN eff ELSE NULL END),2) AS TGL_1,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 02 THEN eff ELSE NULL END),2) AS TGL_2,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 03 THEN eff ELSE NULL END),2) AS TGL_3,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 04 THEN eff ELSE NULL END),2) AS TGL_4 ,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 05 THEN eff ELSE NULL END),2) AS TGL_5,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 06 THEN eff ELSE NULL END),2) AS TGL_6,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 07 THEN eff ELSE NULL END),2) AS TGL_7,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 08 THEN eff ELSE NULL END),2) AS TGL_8,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 09 THEN eff ELSE NULL END),2) AS TGL_9,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 10 THEN eff ELSE NULL END),2) AS TGL_10,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 11 THEN eff ELSE NULL END),2) AS TGL_11,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 12 THEN eff ELSE NULL END),2) AS TGL_12,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 13 THEN eff ELSE NULL END),2) AS TGL_13,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 14 THEN eff ELSE NULL END),2) AS TGL_14,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 15 THEN eff ELSE NULL END),2) AS TGL_15,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 16 THEN eff ELSE NULL END),2) AS TGL_16,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 17 THEN eff ELSE NULL END),2) AS TGL_17,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 18 THEN eff ELSE NULL END),2) AS TGL_18,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 19 THEN eff ELSE NULL END),2) AS TGL_19,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 20 THEN eff ELSE NULL END),2) AS TGL_20,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 21 THEN eff ELSE NULL END),2) AS TGL_21,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 22 THEN eff ELSE NULL END),2) AS TGL_22,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 23 THEN eff ELSE NULL END),2) AS TGL_23,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 24 THEN eff ELSE NULL END),2) AS TGL_24,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 25 THEN eff ELSE NULL END),2) AS TGL_25,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 26 THEN eff ELSE NULL END),2) AS TGL_26,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 27 THEN eff ELSE NULL END),2) AS TGL_27,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 28 THEN eff ELSE NULL END),2) AS TGL_28,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 29 THEN eff ELSE NULL END),2) AS TGL_29,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 30 THEN eff ELSE NULL END),2) AS TGL_30,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 31 THEN eff ELSE NULL END),2) AS TGL_31,
					ROUND(AVG(eff),2) AS rata2_
					FROM kagrup_shtl3,maintenance_shtl3,input_shtl3
					WHERE kagrup_shtl3.kd_kagrup=input_shtl3.`kd_kagrup` AND input_shtl3.`kd_mtc`=maintenance_shtl3.`kd_mtc` 
					AND MONTH(tgl_input)='$bulan' AND YEAR(tgl_input)='$tahun'
					GROUP BY no_mesin ORDER BY nama_mtc");
		return $query->result();
	}

public function lap_eff_total_kagrup_permesin($bulan, $tahun)
	{
		$query = $this->db->query("SELECT IFNULL(nama_kagrup,'GRAND TOTAL')AS nama_kagrup,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 01 THEN eff ELSE NULL END),2) AS TGL_1,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 02 THEN eff ELSE NULL END),2) AS TGL_2,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 03 THEN eff ELSE NULL END),2) AS TGL_3,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 04 THEN eff ELSE NULL END),2) AS TGL_4,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 05 THEN eff ELSE NULL END),2) AS TGL_5,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 06 THEN eff ELSE NULL END),2) AS TGL_6,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 07 THEN eff ELSE NULL END),2) AS TGL_7,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 08 THEN eff ELSE NULL END),2) AS TGL_8,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 09 THEN eff ELSE NULL END),2) AS TGL_9,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 10 THEN eff ELSE NULL END),2) AS TGL_10,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 11 THEN eff ELSE NULL END),2) AS TGL_11,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 12 THEN eff ELSE NULL END),2) AS TGL_12,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 13 THEN eff ELSE NULL END),2) AS TGL_13,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 14 THEN eff ELSE NULL END),2) AS TGL_14,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 15 THEN eff ELSE NULL END),2) AS TGL_15,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 16 THEN eff ELSE NULL END),2) AS TGL_16,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 17 THEN eff ELSE NULL END),2) AS TGL_17,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 18 THEN eff ELSE NULL END),2) AS TGL_18,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 19 THEN eff ELSE NULL END),2) AS TGL_19,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 20 THEN eff ELSE NULL END),2) AS TGL_20,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 21 THEN eff ELSE NULL END),2) AS TGL_21,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 22 THEN eff ELSE NULL END),2) AS TGL_22,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 23 THEN eff ELSE NULL END),2) AS TGL_23,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 24 THEN eff ELSE NULL END),2) AS TGL_24,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 25 THEN eff ELSE NULL END),2) AS TGL_25,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 26 THEN eff ELSE NULL END),2) AS TGL_26,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 27 THEN eff ELSE NULL END),2) AS TGL_27,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 28 THEN eff ELSE NULL END),2) AS TGL_28,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 29 THEN eff ELSE NULL END),2) AS TGL_29,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 30 THEN eff ELSE NULL END),2) AS TGL_30,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 31 THEN eff ELSE NULL END),2) AS TGL_31,
					ROUND(AVG(eff),2) AS rata2_
					FROM kagrup_shtl3,maintenance_shtl3,input_shtl3
					WHERE kagrup_shtl3.kd_kagrup=input_shtl3.`kd_kagrup` AND input_shtl3.`kd_mtc`=maintenance_shtl3.`kd_mtc` 
					AND MONTH(tgl_input)='$bulan' AND YEAR(tgl_input)='$tahun'
					GROUP BY nama_kagrup DESC
					WITH ROLLUP");
		return $query->result();
	}

public function lap_eff_montir($bulan, $tahun)
	{
		$query = $this->db->query("SELECT mesin_shtl3.daerah,maintenance_shtl3.`nama_mtc`,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 01 THEN eff ELSE NULL END),2) AS TGL_1,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 02 THEN eff ELSE NULL END),2) AS TGL_2,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 03 THEN eff ELSE NULL END),2) AS TGL_3,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 04 THEN eff ELSE NULL END),2) AS TGL_4 ,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 05 THEN eff ELSE NULL END),2) AS TGL_5,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 06 THEN eff ELSE NULL END),2) AS TGL_6,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 07 THEN eff ELSE NULL END),2) AS TGL_7,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 08 THEN eff ELSE NULL END),2) AS TGL_8,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 09 THEN eff ELSE NULL END),2) AS TGL_9,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 10 THEN eff ELSE NULL END),2) AS TGL_10,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 11 THEN eff ELSE NULL END),2) AS TGL_11,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 12 THEN eff ELSE NULL END),2) AS TGL_12,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 13 THEN eff ELSE NULL END),2) AS TGL_13,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 14 THEN eff ELSE NULL END),2) AS TGL_14,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 15 THEN eff ELSE NULL END),2) AS TGL_15,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 16 THEN eff ELSE NULL END),2) AS TGL_16,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 17 THEN eff ELSE NULL END),2) AS TGL_17,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 18 THEN eff ELSE NULL END),2) AS TGL_18,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 19 THEN eff ELSE NULL END),2) AS TGL_19,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 20 THEN eff ELSE NULL END),2) AS TGL_20,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 21 THEN eff ELSE NULL END),2) AS TGL_21,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 22 THEN eff ELSE NULL END),2) AS TGL_22,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 23 THEN eff ELSE NULL END),2) AS TGL_23,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 24 THEN eff ELSE NULL END),2) AS TGL_24,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 25 THEN eff ELSE NULL END),2) AS TGL_25,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 26 THEN eff ELSE NULL END),2) AS TGL_26,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 27 THEN eff ELSE NULL END),2) AS TGL_27,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 28 THEN eff ELSE NULL END),2) AS TGL_28,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 29 THEN eff ELSE NULL END),2) AS TGL_29,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 30 THEN eff ELSE NULL END),2) AS TGL_30,
					ROUND(AVG(CASE WHEN DAY(tgl_input) = 31 THEN eff ELSE NULL END),2) AS TGL_31,
					ROUND(AVG(eff),2) AS rata2_
					FROM input_shtl3,mesin_shtl3,maintenance_shtl3
					WHERE input_shtl3.`kd_mtc`=maintenance_shtl3.`kd_mtc` AND input_shtl3.`no_mesin`=mesin_shtl3.`no_mesin`
					AND MONTH(tgl_input)='$bulan' AND YEAR(tgl_input)='$tahun'
					GROUP BY nama_mtc DESC");
		return $query->result();
	}


}

/* End of file M_laporan.php */
/* Location: ./application/models/M_laporan.php */