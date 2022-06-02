SELECT tgl_input,nama_kagrup,rs,nama_mtc,input_ajl.`no_mesin`,AVG(eff) AS eff,AVG(putus_lusi) AS putus_lusi,AVG(putus_pakan) AS putus_pakan,
AVG(wf_1) AS wf_1,AVG(wf_2) AS wf_2,SUM(gulung_mtr) AS gul_mtr,SUM(msn) AS msn
FROM input_ajl,mesin,maintenance,kagrup
WHERE input_ajl.`kd_kagrup`=kagrup.`kd_kagrup` AND input_ajl.`kd_mtc`=maintenance.`kd_mtc` AND input_ajl.`no_mesin`=mesin.`no_mesin` 
AND tgl_input BETWEEN '2019-02-01' AND '2019-02-28'
GROUP BY tgl_input,nama_kagrup,rs,nama_mtc

