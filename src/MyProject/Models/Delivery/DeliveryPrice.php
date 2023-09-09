<?php

namespace MyProject\Models\Delivery;


class DeliveryPrice
{
    private $price;
    private $date;
    private $error;

    public function __construct($price, $date, $error = null)
    {
        $this->price = $price;
        $this->date = $date;
        $this->error = $error;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getError()
    {
        return $this->error;
    }
}
