SELECT input_ajl.`jns_konstruksi`, 
SUM(CASE input_ajl.`eff` WHEN MONTH(input_ajl.`tgl_input`)='1' THEN 1 ELSE '' END) AS 'JAN', 
SUM(CASE input_ajl.`eff` WHEN MONTH(input_ajl.`tgl_input`)='2' THEN 1 ELSE '' END) AS 'FEB', 
SUM(CASE input_ajl.`eff` WHEN MONTH(input_ajl.`tgl_input`)='3' THEN 1 ELSE '' END) AS 'MAR', 
AVG(input_ajl.`eff`) AS EFF
FROM
  konstruksi,
  input_ajl,
  mesin 
WHERE konstruksi.`jns_konstruksi` = input_ajl.`jns_konstruksi` 
  AND input_ajl.`no_mesin` = mesin.`no_mesin` 
  AND input_ajl.`tgl_input` BETWEEN '2019/01/01' 
  AND '2019/03/30' 
GROUP BY konstruksi.`jns_konstruksi`,MONTH(input_ajl.`tgl_input`)='3'