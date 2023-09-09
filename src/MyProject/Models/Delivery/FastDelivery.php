<?php

namespace MyProject\Models\Delivery;

use MyProject\Services\Db;

class FastDelivery
{
    public function calculatePriceAndDate($sourceKladr, $targetKladr, $weight)
    {
        $db = Db::getInstance();
        $result = $db->query(
            sprintf(
                'SELECT price, delivery_date FROM `%s` WHERE source_kladr = ? AND target_kladr = ?;',
                'fast_delivery',
            ),
            [$sourceKladr, $targetKladr],
            static::class
        );

        if (!empty($result)) {
            $price = $result[0]->price * $weight;
            $date = $result[0]->delivery_date;
            return new DeliveryPrice($price, $date);
        } else {
            return new DeliveryPrice(0, null, "Доставка невозможна");
        }
    }
}
