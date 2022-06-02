SELECT konstruksi.`jns_konstruksi`,input_ajl.`tgl_input`,input_ajl.`putus_lusi`,input_ajl.`putus_pakan`, 
AVG(input_ajl.eff) AS tot_pertanggal, MONTH(input_ajl.`tgl_input`) AS bln
FROM konstruksi,input_ajl,mesin
WHERE konstruksi.`jns_konstruksi`=input_ajl.`jns_konstruksi` 
AND input_ajl.`no_mesin`=mesin.`no_mesin`
AND input_ajl.`tgl_input` BETWEEN '2019/02/01' AND '2019/03/30' 
GROUP BY konstruksi.`jns_konstruksi`,MONTH(input_ajl.`tgl_input`)