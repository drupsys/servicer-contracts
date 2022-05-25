<?php

namespace MVF\Servicer\Contracts;

interface ValidatedObject
{
    public static function validate(array $payload, array $rules): void;

    /**
     * @param array $payload
     * @return static
     */
    public static function validateAndParse(array $payload);
}
