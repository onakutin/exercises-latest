SELECT *
FROM `countries`
WHERE 1;

select *
FROM `countries`
WHERE `population` > 20000000
ORDER BY `population`
LIMIT 10;

select *
FROM `countries`
WHERE `name` = `Czech Republic`
ORDER BY `population`
LIMIT 1;

select *
FROM `cities`
WHERE `country_id` = '56'
ORDER BY `population`
LIMIT 10;