<?php

namespace MyProject\Controllers;

use MyProject\Models\Delivery\FastDelivery;

class FastDeliveryController extends AbstractController
{
    public function calculateFastDelivery()
    {
        $response = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fastDeliveryService = new FastDelivery();
            $result = $fastDeliveryService->calculatePriceAndDate($_POST['sourceKladrFast'], $_POST['targetKladrFast'], $_POST['weightFast']);
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

        $this->view->renderHtml('companies/fast-delivery.php', [
            'response' => $response,
        ]);
    }
}
