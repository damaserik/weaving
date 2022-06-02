SELECT input_ajl.`jns_konstruksi`, input_ajl.`tgl_input`,input_ajl.`eff`, input_ajl.`putus_lusi`, input_ajl.`putus_pakan`
FROM input_ajl


SELECT IFNULL(jns_konstruksi,'grand_total')AS jns_konstruksi,
MAX(CASE WHEN DAY(tgl_input) = 22 THEN eff ELSE NULL END) AS tgl22,
MAX(CASE WHEN DAY(tgl_input) = 22 THEN putus_lusi ELSE NULL END) AS ptls,
MAX(CASE WHEN DAY(tgl_input) = 22 THEN putus_lusi ELSE NULL END) AS ptpk,
MAX(CASE WHEN DAY(tgl_input) = 21 THEN eff ELSE NULL END) AS tgl21,
MAX(CASE WHEN DAY(tgl_input) = 21 THEN putus_lusi ELSE NULL END) AS ptls,
MAX(CASE WHEN DAY(tgl_input) = 21 THEN putus_pakan ELSE NULL END) AS ptpk,
MAX(CASE WHEN DAY(tgl_input) = 20 THEN eff ELSE NULL END) AS tgl20,
MAX(CASE WHEN DAY(tgl_input) = 20 THEN putus_lusi ELSE NULL END) AS ptls,
MAX(CASE WHEN DAY(tgl_input) = 20 THEN putus_pakan ELSE NULL END) AS ptpk
FROM input_ajl
WHERE MONTH(tgl_input) BETWEEN 01 AND 12
GROUP BY jns_konstruksi
WITH ROLLUP
