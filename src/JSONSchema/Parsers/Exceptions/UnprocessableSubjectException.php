<?php
namespace JSONSchema\Parsers\Exceptions;

/**
 * @package JSONSchema\Parsers\Exceptions
 * @author steven
 */
class UnprocessableSubjectException extends \RuntimeException
{
    public function __construct($message = "The provided subject could not be processed", $code = null, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
