<?php

namespace app\controllers;

use stdClass;


class Ticket extends \app\core\Controller
{
    #[\app\filters\IsCustomer]
    function createTicket()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $ticket = new \app\models\Ticket();

            $ticket->product_id = 1;
            $ticket->customer_id = $_SESSION['customer_id'];
            $ticket->issue = $_POST['issue'];
            $ticket->issue_title = $_POST['title'];
            $ticket->issue_description = $_POST['issue_description'];

            $ticket->insert();
            $ticketController = new \app\controllers\Ticket();
            $ticketController->currentTicketsForSpecificCustomer();
        } else {
            $this->view('Ticket/create');
        }
    }

    function currentTickets()
    {
        $ticket = new \app\models\Ticket();
        $order = new \app\models\Order();
        $customer = new \app\models\Customer();

        $tickets = $ticket->getAll();

        foreach ($tickets as $ticket) {
            $tick_status = $ticket->ticket_status;
            $customerInfo = $customer->getById($ticket->customer_id);
            $extraCustomerinfo = $order->getCustomerOrderInformationById($ticket->customer_id);

            $ticket->customer_information = $customerInfo;
            $ticket->extra_customer_information = $extraCustomerinfo;

            switch ($tick_status) {
                case 1:
                    $ticket->ticket_status_text = "Closed";
                    break;

                default:
                    $ticket->ticket_status_text = "Ongoing";
            }
        }
        include 'app/views/Ticket/list.php';
        include 'app/views/footer.php';
    }

    function currentTicketsForSpecificCustomer()
    {
        $ticket = new \app\models\Ticket();
        $order = new \app\models\Order();
        $customer = new \app\models\Customer();

        $tickets = $ticket->getAllByCustomerId($_SESSION['customer_id']);

        foreach ($tickets as $ticket) {
            $tick_status = $ticket->ticket_status;
            $customerInfo = $customer->getById($ticket->customer_id);
            $extraCustomerinfo = $order->getCustomerOrderInformationById($ticket->customer_id);

            $ticket->customer_information = $customerInfo;
            $ticket->extra_customer_information = $extraCustomerinfo;

            switch ($tick_status) {
                case 1:
                    $ticket->ticket_status_text = "Closed";
                    break;

                default:
                    $ticket->ticket_status_text = "Ongoing";
            }
        }
        include 'app/views/Ticket/custList.php';
        include 'app/views/footer.php';
    }

    function descriptionForCustomer()
    {
        $ticket = new \app\models\Ticket();
        $order = new \app\models\Order();
        $customer = new \app\models\Customer();

        //To Allow BackTracking
        $_SESSION['ticket_id'] = $_GET['id'];

        $ticketInfo = $ticket->getId($_GET['id']);

        $tick_status = $ticketInfo->ticket_status;
        $customerInfo = $customer->getById($ticketInfo->customer_id);
        $extraCustomerinfo = $order->getCustomerOrderInformationById($ticketInfo->customer_id);

        $ticket->customer_information = $customerInfo;
        $ticket->extra_customer_information = $extraCustomerinfo;

        switch ($tick_status) {
            case 1:
                $ticket->ticket_status_text = "Closed";
                break;

            default:
                $ticket->ticket_status_text = "Ongoing";
        }

        include 'app/views/Ticket/custIndex.php';

        $ticketMessage = new \app\controllers\TicketMessage();
        $ticketMessage->viewMessage();
        include 'app/views/footer.php';
    }

    //stopper
    function descriptionForEmployee()
    {
        $ticket = new \app\models\Ticket();
        $order = new \app\models\Order();
        $customer = new \app\models\Customer();

        //To Allow BackTracking
        $_SESSION['ticket_id'] = $_GET['id'];

        $ticketInfo = $ticket->getId($_GET['id']);

        //To mark the ticket as resolved
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($ticketInfo->ticket_status == 1) {
                $ticketInfo->ticket_status = 0;
                $ticketInfo->update();
            } else {
                $ticketInfo->ticket_status = 1;
                $ticketInfo->update();
            }
        }

        $tick_status = $ticketInfo->ticket_status;
        $customerInfo = $customer->getById($ticketInfo->customer_id);
        $extraCustomerinfo = $order->getCustomerOrderInformationById($ticketInfo->customer_id);

        $ticket->customer_information = $customerInfo;
        $ticket->extra_customer_information = $extraCustomerinfo;



        switch ($tick_status) {
            case 1:
                $ticket->ticket_status_text = "Closed";
                break;

            default:
                $ticket->ticket_status_text = "Ongoing";
        }


        include 'app/views/Ticket/index.php';

        $ticketMessage = new \app\controllers\TicketMessage();
        $ticketMessage->viewMessage();
        include 'app/views/footer.php';
    }
}