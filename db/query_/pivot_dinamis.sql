SET @DateBegin = CONVERT('2019-03-01',DATE);
SET @DateEnd = CONVERT('2019-03-03',DATE);

SET @cols =
(
SELECT 
	GROUP_CONCAT(
	CONCAT('SUM(IF(t.DateRange = \'',t.DateRange,'\', t.Sessions, 0)) AS \'',t.DateRange,'\''),'')
	FROM
	(
	SELECT @DateBegin AS DateRange
	UNION ALL
	SELECT 
		DATE_ADD(@DateBegin, INTERVAL n.Seq DAY) AS DateRange
	FROM 
		numbers AS n
	WHERE 
		DATE_ADD(@DateBegin, INTERVAL n.Seq DAY) <= DateEnd
	) AS t
);

SET @q =
(
	SELECT CONCAT(
	'SELECT 
		t.ItemId,',
		@cols,
	'FROM
		(
		SELECT 
			c.DateRange,
			i.ItemId,
			IF(s.TotalSession IS NULL, 0, s.TotalSession) AS Sessions
		FROM
				(
				SELECT @DateBegin AS DateRange
				UNION ALL
				SELECT 
					DATE_ADD(@DateBegin, INTERVAL n.Seq DAY) AS DateRange
				FROM 
					numbers AS n
				WHERE 
					DATE_ADD(@DateBegin, INTERVAL n.Seq DAY) <= DateEnd
				) AS c
				CROSS JOIN
					(
					SELECT
						g.ItemId
					FROM 
						SessionsLogs AS g
					GROUP BY
						g.ItemId
					) AS i
				LEFT JOIN SessionsLogs AS s
					ON s.ItemId = i.ItemId AND
						s.DateLog = c.DateRange
		) AS t]
		GROUP BY
		t.ItemId')
	
);
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;