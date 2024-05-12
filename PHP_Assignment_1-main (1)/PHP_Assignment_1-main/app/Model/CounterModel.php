<?php

namespace app\Model

class CounterModel
{
    private $count;

    public function _construct()
    {
        
        $counterFilePath = __DIR__ . "/../../resources/counter.txt";
        if (file_exists($counterFilePath)) {
            $fileHandle = fopen($counterFilePath, "r");
            if ($fileHandle) { 
                flock($fileHandle, LOCK_SH);
                $countContents = fread($fileHandle, filesize($counterFilePath));
                fclose($fileHandle);
                // Decode JSON and set count property
                $countData = json_decode($countContents, true);
                $this->count = $countData['count'] ?? 0;
            }
        } else {
            $this->count = 0;
        }
    }

    // Increment method
    public function increment()
    {
        $this->count++;
    }

    // Write method
    public function write()
    {
        $countData = ['count' => $this->count];
        $jsonCount = json_encode($countData);

        $counterFilePath = __DIR__ . "/../../resources/counter.txt";
        $fileHandle = fopen($counterFilePath, "w");

        if ($fileHandle) {
            flock($fileHandle, LOCK_EX);
            fwrite($fileHandle, $jsonCount);
            fclose($fileHandle);
        }
    }

    // __toString method
    public function __toString()
    {
        return json_encode(['count' => $this->count]);
    }
}
?> 