SET @sql = NULL;
SELECT GROUP_CONCAT(DISTINCT
         CONCAT('MAX(CASE WHEN datelog = ''', TotalSession,
                ''' THEN TotalSession END) '', datelog, '''))
  INTO @sql
  FROM sessionlogs;

SET @sql = CONCAT('SELECT itemid, ', @sql, '
                     FROM sessionlogs 
                    GROUP BY itemid');

SELECT @sql;

PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;