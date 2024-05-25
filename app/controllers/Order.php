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
        $cart = new \app\controllers\Cart();

        

        if ($_SERVER['REQUEST_METHOD'] === "POST") {

            $order = new \app\models\Order();
            $order->customer_id = $_SESSION['customer_id'];
            $order->address = $_POST['address'];
            $order->postal_code = $_POST['postalCode'];
            $order->state = $_POST['state'];


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


            $order = new \app\controllers\Order();
            $order->sucessfullOrder();

        } else {
            $this->view('Customer/Checkout');
            include ('app/views/footer.php');
        }
    }

    function sucessfullOrder()
    {
        $order = new \app\models\Order();
        $latestOrderFromCustomer = $order->getLatestOrderFromCustomer($_SESSION['customer_id']);
        $this->view('Customer/successOrder', $latestOrderFromCustomer);

    }

    function charge()
    {
        require_once 'vendor/omnipay/paypal/config.php';

        if (isset($_POST['submit'])) {

            try {
                $response = $gateway->purchase(
                    array(
                        'amount' => $_POST['amount'],
                        'currency' => PAYPAL_CURRENCY,
                        'returnUrl' => PAYPAL_RETURN_URL,
                        'cancelUrl' => PAYPAL_CANCEL_URL,
                    )
                )->send();

                if ($response->isRedirect()) {
                    $response->redirect();
                } else {
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
        if (array_key_exists('paymentId', $_GET) && array_key_exists('PayerID', $_GET)) {
            $transaction = $gateway->completePurchase(
                array(
                    'payer_id' => $_GET['PayerID'],
                    'transactionReference' => $_GET['paymentId'],
                )
            );
            $response = $transaction->send();

            if ($response->isSuccessful()) {
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
                session_destroy();
                header('location:/home');
            } else {
                echo $response->getMessage();
                session_destroy();
                header('location:/home');
            }
        } else {

            echo 'Transaction is declined';
            session_destroy();
            header('location:/home');
        }
    }

    function cancel()
    {
        echo '<h3>User cancelled the payment.</h3>';
    }

    function viewCustomerOrdersForCustomer()
    {
        $order = new \app\models\Order();
        $product = new \app\models\Product();



        $allCustOrders = $order->getOrdersByCustomerId($_SESSION['customer_id']);

        if ($_SERVER['REQUEST_METHOD'] === "GET") {

            if (isset($_GET['search'])) {
                $allCustOrders = $order->getMultiFilter('order_id', 'timestamp', 'address', $_SESSION['customer_id'], $_GET['search']);
            }

        }

        foreach ($allCustOrders as $custOrder) {
            $amountBought = 0;
            $orderItems = $order->getAllOrderItemsFromCustomer($custOrder->order_id);
            $orderInfomation = $order->getItemsPerOrder($custOrder->order_id);

            foreach ($orderInfomation as $oaa) {
                $amountBought += $oaa->quantity;
            }
            $custOrder->items_bought_each_order = $amountBought;
            foreach ($orderItems as $item) {
                $productInformation = $product->getId($item->product_id);
                $custOrder->product_information = $productInformation;

            }
            $status = $custOrder->status;
            switch ($status) {
                case 1: {
                    $custOrder->statusText = "Processed";
                    break;
                }
                default: {
                    $custOrder->statusText = "To Be Processed";
                    break;
                }
            }
        }
        include 'app/views/Customer/orders.php';
        include 'app/views/footer.php';
    }


    function viewCustomerOrder()
    {
        $order = new \app\models\Order();
        $customer = new \app\models\Customer();
        $product = new \app\models\Product();

        $orderInfomation = $order->getItemsPerOrder($_GET['order_id']);
        $customerOrderInfo = $order->getOrdersByCustomerId($_GET['cust_id']);
        $customerInfo = $customer->getById($_GET['cust_id']);
        $extraCustomerInfo = $order->getCustomerOrderInformationById($_GET['cust_id']);

        foreach ($orderInfomation as $order) {

            $order->product_information = $product->getId($order->product_id);
            $status = $order->status;

            switch ($status) {
                case 1: {
                    $order->statusText = "Processed";
                    break;
                }
                default: {
                    $order->statusText = "Needs To Be Processed";
                    break;
                }
            }
        }
        include 'app/views/Admin/order.php';
        include 'app/views/footer.php';
    }
}
