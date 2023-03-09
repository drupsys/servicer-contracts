<?php

namespace MVF\Servicer\Contracts;

interface EventTransformer
{
    public function __invoke(array $payload): ArraySerializable;
}
