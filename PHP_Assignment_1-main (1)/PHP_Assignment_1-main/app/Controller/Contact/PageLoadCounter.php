<?php
namespace app\Controller;

use app\models\CounterModel;

class CountController {
    public function index() {
        // Increment count
        $counter = new Counter();
        $counter->increment();
        $counter->write();
        // Echo JSON-encoded count
        echo json_encode(['count' => $counter->count]);
    }
}
?>