SELECT tgl_input,mesin.`rs`,weff,mesin.`no_mesin`,jns_konstruksi, COUNT(weff) AS count_weff,AVG(eff) AS eff,AVG(putus_lusi) AS putus_lusi,AVG(putus_pakan) AS putus_pakan,SUM(gulung_mtr) AS gulung_mtr
FROM input_ajl,mesin
WHERE input_ajl.`no_mesin`=mesin.`no_mesin` AND tgl_input BETWEEN '2019-03-01' AND '2019-03-31'
GROUP BY tgl_input,rs,no_mesin
ORDER BY tgl_input ASC