<?php

namespace DigiComp\OpenproviderApi;

use DigiComp\OpenproviderApi\Model\ErrorError;
use Throwable;

class ClientException extends \Exception
{
    protected ErrorError $error;

    public function __construct($error, $message = "", $code = 0, Throwable $previous = null)
    {
        $this->error = $error;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return ErrorError
     */
    public function getError(): ErrorError
    {
        return $this->error;
    }
}
