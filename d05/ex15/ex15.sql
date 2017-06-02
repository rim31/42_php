SELECT
  REVERSE(SUBSTRING(telephone,
  2)) AS "enohpelet"
FROM
  distrib
WHERE
  LEFT(telephone,
  2) = 05;
