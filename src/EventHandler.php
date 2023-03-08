<?php

namespace MVF\Servicer\Contracts;

interface EventHandler
{
    /**
     * @return void|EventRedirector
     */
    public function consume(array $payload);
}
