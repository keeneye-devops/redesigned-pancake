-- Summary
SELECT
    s.name AS "Status", count(t.id) As "Tickets"
FROM
    erp_access_req.ea_wpsp_ticket t
        JOIN
    ea_wpsp_custom_status s ON t.status_id=s.id
WHERE
    cat_id = 1 
    AND t.create_time between $__timeFrom() AND $__timeTo() 
    AND cust11="Vehicle"
    
    
GROUP BY cust11 , status_id;


-- single stat
SELECT COUNT(*) / t.cnt * 100 AS `percentage`
  FROM ea_wpsp_ticket ma
 CROSS
  JOIN (SELECT COUNT(*) AS cnt FROM ea_wpsp_ticket where cat_id = 1
    AND create_time between $__timeFrom() AND $__timeTo()
    AND cust11="Vehicle") t
  where status_id=3
    AND cat_id = 1
    AND create_time between $__timeFrom() AND $__timeTo()
    AND cust11="Vehicle";

-- SLA
SELECT COUNT(*) / t.cnt * 100 AS `percentage`
  FROM ea_wpsp_ticket ma
 CROSS
  JOIN (SELECT COUNT(*) AS cnt FROM ea_wpsp_ticket 
    where status_id=3
    AND cat_id = 1
    AND create_time between $__timeFrom() AND $__timeTo()
    AND cust11="Vehicle") t
  where status_id=3
    AND cat_id = 1
    AND create_time between $__timeFrom() AND $__timeTo()
    AND cust11="Vehicle"
    AND cust40>0;
