SELECT
  COUNT(*) AS 'films'
FROM
  `membre`
WHERE
  (
    DATE(date_dernier_film) < '2007-07-27' AND DATE(date_dernier_film) >= '2006-10-30'
  )
  OR
  (
    MONTH(date_dernier_film) = 12 AND DAY(date_dernier_film) = 24
);
