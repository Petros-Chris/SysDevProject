<?php
namespace app\controllers;

//require_once 'vendor/omnipay/paypal/config.php';
use Exception;
use stdClass;


class Order extends \app\core\Controller
{
    #[\app\filters\IsCustomer]
    function createOrder()
    {

        if ($_SERVER['REQUEST_METHOD'] === "POST") {

            $order = new \app\models\Order();
            $order->customer_id = $_SESSION['customer_id'];
            $order->address = $_POST['address'];


            $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
            $total = 0;
            foreach ($cart as $item) {
                $total += $item->cost_price;
            }
            $order->total = $total;

          
            $order_id = $order->insertOrder_Customer();


            foreach ($cart as $item) {
                $item_order = new \app\models\Order(); 
                $item_order->order_id = $order_id;
                $item_order->product_id = $item->product_id;
                $item_order->quantity = 1; 
                $item_order->price = $item->cost_price;
                $item_order->insertItem_Order();
            }


            header('location:/Order/Success');
        } else {
            $this->view('Customer/Checkout');
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
