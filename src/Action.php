<?php

namespace MVF\Servicer\Contracts;

interface Action
{
    public function handler(array $request): array;
}
