<?php
function distributeDiscount(int $discount, array $prices): array {
    // Шаг 1: Найдем общую стоимость всех товаров
    $total_price = 0;
    foreach ($prices as $price) {
        $total_price += $price; // Суммируем все цены
    }
    
    // Если общая стоимость равна нулю, просто вернем исходный массив
    if ($total_price == 0) {
        return $prices;
    }
    
    // Массив для новых цен
    $new_prices = [];

    // Шаг 2: Распределяем скидку по каждому товару
    foreach ($prices as $price) {
        // Рассчитываем, какая часть скидки идет на текущий товар
        $item_discount = ($price / $total_price) * $discount;
        
        // Вычитаем скидку из цены товара
        $new_price = $price - $item_discount;

        // Добавляем новую цену в массив
        $new_prices[] = round($new_price); // Округляем до целого числа
    }

    return $new_prices; // Возвращаем массив с новыми ценами
}

// Пример использования
$prices = [1000, 2000, 3000]; // Цены товаров
$discount = 600; // Размер скидки в рублях
$new_prices = distributeDiscount($discount, $prices); // Получаем новые цены
print_r($new_prices); // Выводим результат
?>
