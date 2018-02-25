<?php

namespace MyApp\Component\Exception;


use Throwable;

class DivisionByZeroException extends \Exception
{
    /**
     * MissingParamException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     * @throws \Exception
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        throw new \Exception($message);
    }
}