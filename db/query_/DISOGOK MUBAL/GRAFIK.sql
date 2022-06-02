SELECT jns_konstruksi, AVG(eff) AS eff 
FROM input_ajl
WHERE MONTH(tgl_input) = MONTH(NOW()) AND YEAR(tgl_input) = YEAR(NOW())
GROUP BY jns_konstruksi
ORDER BY jns_konstruksi DESC