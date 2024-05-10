<?php

namespace app\controllers;

use stdClass;

class Order extends \app\core\Controller
{
    #[\app\filters\IsCustomer]
    function createOrder()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $order = new \app\models\Order();

            $order->product_id = 1;
            $order->customer_id = $_SESSION['customer_id'];
            $order->address = $_POST['address'];
            $order->total = $_POST['total'];

            $order->insert();

            header('location:/User/login');
        } else {
            $this->view('Ticket/create');
        }
    }

    function currentTickets()
    {
        $ticket = new \app\models\Ticket();

        $tickets = $ticket->getAll();

        foreach ($tickets as $ticket) {
            $tick_id = $ticket->ticket_id;
            $tick_issue = $ticket->issue;
            $cus_id = $ticket->customer_id;
            $tick_status = $ticket->ticket_status;
            $tick_status_text = "";

            if ($tick_status == 0) {
                $tick_status_text = "Ongoing";
            } else {
                $tick_status_text = "Closed";
            }

            echo "<a href='../Ticket/index?id=$tick_id'> <div class='product-container'>
                        
                            <div class='product-details'>The Issue: $tick_issue</div>
                            <div class='product-brand'>User: $cus_id</div>
                            <div class='product-brand'>Status: $tick_status_text</div>
                            
                    </a></div>";
        }

        $this->view('Ticket/list');
    }

    function description()
    {
        $ticket = new \app\models\Ticket();
        $ticketInfo = $ticket->getId($_GET['id']);
        $this->view('Ticket/index', $ticketInfo);
    }

}