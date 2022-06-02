SELECT input_ajl.`no_mesin`,tgl_input, jns_konstruksi, AVG(eff), AVG(putus_lusi), AVG(putus_pakan)
FROM input_ajl,mesin 
WHERE input_ajl.`no_mesin`=mesin.`no_mesin`
AND tgl_input BETWEEN '2019-01-01' AND '2019-04-01'
GROUP BY  tgl_input