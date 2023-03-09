<?php

namespace MVF\Servicer\Contracts;

interface EventHandler
{
    /**
     * @return void|EventTransformer
     */
    public function consume(array $payload);
}
