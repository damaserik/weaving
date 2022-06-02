SET @sql = NULL;
SELECT
  GROUP_CONCAT(DISTINCT
    CONCAT(
      'avg(case when date_format(tgl_input, \'%m-%d\') = \'',DATE_FORMAT(tgl_input, '%m-%d'),'\' then eff end) AS ','`',DATE_FORMAT(tgl_input, '%Y-%m-%d'), '`' 
    )
  ) INTO @sql
FROM input_ajl;

SET @sql = CONCAT('SELECT jns_konstruksi, ', @sql, ' 
		   from input_ajl 
		   WHERE month(tgl_input)=''02''
		   group by jns_konstruksi');

SELECT @sql;

PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;