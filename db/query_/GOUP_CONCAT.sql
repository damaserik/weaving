SELECT
A.`jns_konstruksi` AS kons,
GROUP_CONCAT(A.eff) AS '20',
GROUP_CONCAT(A.tgl_input='21',eff) AS '21',
GROUP_CONCAT(A.tgl_input='22',eff) AS '22'
FROM input_ajl AS A
GROUP BY A.`jns_konstruksi`