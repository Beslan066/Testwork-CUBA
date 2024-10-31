SELECT customer_name
FROM orders
GROUP BY customer_name
HAVING SUM(order_price) > 10000       -- Общая сумма покупок более 10 тыс. руб.
   AND MIN(order_price) >= 500;       -- Минимальный заказ не меньше 500 руб.
