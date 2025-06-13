<?php

namespace Dfed\PeshkarikiTest\Logging\Concrete;

use Dfed\PeshkarikiTest\Logging\Interface\Logger;

class EchoLogger implements Logger
{
    public function log(string $message): void
    {
        echo date('Y-m-d H:i:s') . ' - ' . $message . PHP_EOL;
    }
}

