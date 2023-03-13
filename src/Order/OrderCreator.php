<?php


namespace App\Order;

use App\Budget;
use DateTimeImmutable;

class OrderCreator
{
    private array $templates = [];
    public function create(string $clientName, string $formatedDate, Budget $budget): Order
    {

        $template = $this->generateTemplate($clientName, $formatedDate);
        $order = new Order;
        $order->template = $template;
        $order->budget = $budget;

        return $order;
    }

    private function generateTemplate(string $clientName, string $formatedDate)
    {
        $hash = md5($clientName . $formatedDate);

        if (!array_key_exists($hash, $this->templates)) {
            $template = new OrderTemplate($clientName, new DateTimeImmutable($formatedDate));

            $this->templates[$hash] = $template;
        }

        return $this->templates[$hash];
    }
}
