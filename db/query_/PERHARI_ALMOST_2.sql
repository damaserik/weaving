SET @sql = NULL;
 
SELECT
    GROUP_CONCAT(DISTINCT
        CONCAT(
        'avg(case when jns_konstruksi = ''',jns_konstruksi,''' then eff end) AS `',jns_konstruksi,'`')

    ) INTO @sql
FROM input_ajl; 

 
SET @sql =  CONCAT(
                'SELECT tgl_input, ',
                @sql,
                'FROM input_ajl WHERE tgl_input BETWEEN "2019-02-01" AND "2019-03-01" group by tgl_input '
                
            );
        
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;