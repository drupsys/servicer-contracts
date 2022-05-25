<?php

namespace MVF\Servicer\Contracts;

interface WarnLogger
{
    public function warn(string $message, array $meta = []): void;
}
