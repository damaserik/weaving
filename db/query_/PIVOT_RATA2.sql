SELECT DISTINCT input_ajl.`jns_konstruksi`, 
AVG(IF (MONTH(input_ajl.`tgl_input`)='1', eff, 0)) AS 'JAN',
AVG(IF (MONTH(input_ajl.`tgl_input`)='2', eff, 0)) AS 'FEB',
AVG(IF (MONTH(input_ajl.`tgl_input`)='3', eff, 0)) AS 'MARET',
AVG(eff) AS RATA, COUNT(input_ajl.`tgl_input`) AS JML_INPUT
FROM  konstruksi,input_ajl,mesin 
WHERE konstruksi.`jns_konstruksi` = input_ajl.`jns_konstruksi` 
  AND input_ajl.`no_mesin` = mesin.`no_mesin` 
  AND input_ajl.`tgl_input` BETWEEN '2019/01/01' 
  AND '2019/03/30' 
GROUP BY konstruksi.`jns_konstruksi`,MONTH(input_ajl.`tgl_input`)