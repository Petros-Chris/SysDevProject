<?php

namespace app\controllers;

use stdClass;

#[\app\filters\IsCustomer]
class Ticket extends \app\core\Controller
{
    function createTicket()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $ticket = new \app\models\Ticket();

            $ticket->product_id = 1;
            $ticket->customer_id = $_SESSION['customer_id'];
            $ticket->issue = $_POST['issue'];
            $ticket->issue_description = $_POST['issue_description'];

            $ticket->insert();

            header('location:/User/login');
        } else {
            $this->view('Ticket/create');
        }
    }
}