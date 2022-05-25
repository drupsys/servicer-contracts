<?php

namespace MVF\Servicer\Contracts;

interface EventHandler
{
    public function consume(array $payload): void;
}
