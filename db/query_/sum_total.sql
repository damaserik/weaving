SELECT input_ajl.`jns_konstruksi`,SUM(input_ajl.`eff`) AS jml, 
SUM(input_ajl.`eff`) / COUNT(input_ajl.`tgl_input`) AS rata2
FROM
  konstruksi,
  input_ajl,
  mesin 
WHERE konstruksi.`jns_konstruksi` = input_ajl.`jns_konstruksi` 
  AND input_ajl.`no_mesin` = mesin.`no_mesin` 
  AND input_ajl.`tgl_input` BETWEEN '2019/02/01' 
  AND '2019/03/30' 
GROUP BY konstruksi.`jns_konstruksi`