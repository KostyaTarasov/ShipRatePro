<?php

namespace MyProject\Controllers;

use MyProject\Models\Delivery\SlowDelivery;

class SlowDeliveryController extends AbstractController
{
    public function calculateSlowDelivery()
    {
        $response = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $deliveryService = new SlowDelivery();
            $result = $deliveryService->calculatePriceAndDate($_POST['sourceKladrSlow'], $_POST['targetKladrSlow'], $_POST['weightSlow']);
            $response = [
                'price' => $result->getPrice(),
                'date' => $result->getDate(),
                'error' => $result->getError(),
            ];
        }

        // $jsonResponse = json_encode($response);
        // // Отправка JSON в ответе
        // header('Content-Type: application/json');
        // echo $jsonResponse;

        $this->view->renderHtml('companies/slow-delivery.php', [
            'response' => $response,
        ]);
    }
}
