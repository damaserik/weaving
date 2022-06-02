SELECT input_ajl.`no_mesin`,maintenance.`nama_mtc`,input_ajl.`tgl_input`,input_ajl.`eff`
FROM input_ajl,mesin,maintenance
WHERE input_ajl.`no_mesin`=mesin.`no_mesin`
AND input_ajl.`kd_mtc`=maintenance.`kd_mtc`