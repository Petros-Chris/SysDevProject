<?php
namespace app\controllers;

require_once 'vendor/omnipay/paypal/config.php';
use Exception;
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



    function charge()
    {
        require_once 'vendor/omnipay/paypal/config.php';

        if (isset($_POST['submit'])) {

            try {
                $response = $gateway->purchase(array(
                    'amount' => $_POST['amount'],
                    'currency' => PAYPAL_CURRENCY,
                    'returnUrl' => PAYPAL_RETURN_URL,
                    'cancelUrl' => PAYPAL_CANCEL_URL,
                ))->send();

                if ($response->isRedirect()) {
                    $response->redirect(); // this will automatically forward the customer
                } else {
                    // not successful
                    echo $response->getMessage();
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }

    function success()
    {
        require_once 'vendor/omnipay/paypal/config.php';
        // Once the transaction has been approved, we need to complete it.
        if (array_key_exists('paymentId', $_GET) && array_key_exists('PayerID', $_GET)) {
            $transaction = $gateway->completePurchase(array(
                'payer_id'             => $_GET['PayerID'],
                'transactionReference' => $_GET['paymentId'],
            ));
            $response = $transaction->send();

            if ($response->isSuccessful()) {
                // The customer has successfully paid.
                $arr_body = $response->getData();

                $payment_id = $db->real_escape_string($arr_body['id']);
                $payer_id = $db->real_escape_string($arr_body['payer']['payer_info']['payer_id']);
                $payer_email = $db->real_escape_string($arr_body['payer']['payer_info']['email']);
                $amount = $db->real_escape_string($arr_body['transactions'][0]['amount']['total']);
                $currency = PAYPAL_CURRENCY;
                $payment_status = $db->real_escape_string($arr_body['state']);

                $sql = sprintf("INSERT INTO payments(payment_id, payer_id, payer_email, amount, currency, payment_status) VALUES('%s', '%s', '%s', '%s', '%s', '%s')", $payment_id, $payer_id, $payer_email, $amount, $currency, $payment_status);
                $db->query($sql);

                echo "Payment is successful. Your transaction id is: " . $payment_id;
            } else {
                echo $response->getMessage();
            }
        } else {
            echo 'Transaction is declined';
        }
    }

    function cancel()
    {
        echo '<h3>User cancelled the payment.</h3>';
    }
}
