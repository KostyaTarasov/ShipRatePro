<?php

namespace MyProject\Models\Delivery;

use MyProject\Services\Db;

class SlowDelivery
{
    public function calculatePriceAndDate($sourceKladr, $targetKladr, $weight)
    {
        $db = Db::getInstance();
        $result = $db->query(
            sprintf(
                'SELECT coefficient, delivery_date FROM `%s` WHERE source_kladr = ? AND target_kladr = ?;',
                'slow_delivery',
            ),
            [$sourceKladr, $targetKladr],
            static::class
        );
        if (!empty($result)) {
            $coefficient = $result[0]->coefficient;
            $date = $result[0]->delivery_date;
            $price = 150 * $weight * $coefficient;
            return new DeliveryPrice($price, $date);
        } else {
            return new DeliveryPrice(0, null, "Доставка невозможна");
        }
    }
}
