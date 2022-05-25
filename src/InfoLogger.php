<?php

namespace MVF\Servicer\Contracts;

interface InfoLogger
{
    public function info(string $message, array $meta = []): void;
}
