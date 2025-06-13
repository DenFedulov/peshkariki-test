<?php

namespace Dfed\PeshkarikiTest\Logging\Interface;

interface Logger
{
    public function log(string $massage): void;
}