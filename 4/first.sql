SELECT
    DATE_FORMAT(date, '%Y-%m') AS month,  -- Форматируем дату в формат "год-месяц"
    customer_name,
    SUM(order_price) AS total_revenue
FROM orders
GROUP BY month, customer_name
ORDER BY month, customer_name;
