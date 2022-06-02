SELECT input_ajl.`jns_konstruksi`, 
MONTH(input_ajl.`tgl_input`)='01',AVG(eff ) AS 'Jan', 
MONTH(input_ajl.`tgl_input`)='02',AVG(eff) AS 'Feb', 
MONTH(input_ajl.`tgl_input`)='03',AVG(eff) AS 'mar', 
AVG(eff) AS Jumlah_eff
	FROM konstruksi,input_ajl,mesin
WHERE konstruksi.`jns_konstruksi`=input_ajl.`jns_konstruksi` 
AND input_ajl.`no_mesin`=mesin.`no_mesin`
AND input_ajl.`tgl_input` BETWEEN '2019/02/01' AND '2019/03/30' 
GROUP BY input_ajl.`jns_konstruksi`