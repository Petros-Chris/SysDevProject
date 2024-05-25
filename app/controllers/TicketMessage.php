<?php

namespace app\controllers;

use stdClass;


class TicketMessage extends \app\core\Controller
{
    function createMessage()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $ticket = new \app\models\TicketMessage();

            $ticket->ticket_id = $_GET['ticket_id'];
            $ticket->user_id = isset($_SESSION['customer_id']) ?
                $_SESSION['customer_id'] : $_SESSION['employee_id'];
            $ticket->message = $_POST['message'];
            $ticket->image_link = $_POST['image_link'];

            $ticket->insert();

            header("Location: /Ticket/index?id=" . $_SESSION["ticket_id"]);
            unset($_SESSION['ticket_id']);
        } else {
            $this->view('Ticket/Message/create');
            include 'app/views/footer.php';
        }
    }

    function viewMessage()
    {
        $ticket = new \app\models\TicketMessage();
        $customer = new \app\models\Customer();
        $employee = new \app\models\Employee();



        $messages = $ticket->getMessageFromTicketId($_GET['id']);
        foreach ($messages as $message) {
            $message->user_information = $customer->getById($message->user_id);
            //if user is not a customer
            if ($message->user_information == null) {
                $message->user_information = $employee->getById($message->user_id);
            }
        }
        $canMakeNewMessage = true;
        include 'app/views/Ticket/Message/index.php';
    }
}