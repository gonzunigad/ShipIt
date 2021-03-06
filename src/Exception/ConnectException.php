<?php namespace Kattatzu\ShipIt\Exception;

use Exception;

class ConnectException extends Exception
{
    function __construct($endpoint)
    {
        parent::__construct("Could not resolve host ($endpoint)");
    }
}
