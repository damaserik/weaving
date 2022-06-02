SELECT jns_konstruksi, AVG(input_ajl.`eff`)
FROM input_ajl
WHERE MONTH(input_ajl.`tgl_input`)='2'
GROUP BY jns_konstruksi