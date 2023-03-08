<?php

namespace MVF\Servicer\Contracts;

interface EventRedirector
{
    public function __invoke(array $payload): ArraySerializable;
}
