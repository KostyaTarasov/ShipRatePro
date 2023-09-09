<?php

return [
    '~^$~' => [\MyProject\Controllers\MainController::class, 'main'],
    '~^companies/fast-delivery$~' => [\MyProject\Controllers\FastDeliveryController::class, 'calculateFastDelivery'],
    '~^companies/slow-delivery$~' => [\MyProject\Controllers\SlowDeliveryController::class, 'calculateSlowDelivery'],
];
