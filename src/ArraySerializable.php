<?php

namespace MVF\Servicer\Contracts;

interface ArraySerializable
{
    /**
     * Constructs array of object's attributes and values and transforms attributes to snake case.
     */
    public function toArray(): array;
}
