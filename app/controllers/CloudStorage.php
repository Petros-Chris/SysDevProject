<?php
require_once "vendor/autoload.php";

use Google\Cloud\Storage\StorageClient;

try {
    $storage = new StorageClient([
        'keyFilePath' => 'app/dark-voltage-422922-r4-82c41811752e.json',
    ]);

    $bucketName = 'artisansweb-bucket';
    $bucket = $storage->bucket($bucketName);
    $response = $storage->createBucket($bucketName);
    echo "Your Bucket $bucketName is created successfully.";
} catch(Exception $e) {
    echo $e->getMessage();
}