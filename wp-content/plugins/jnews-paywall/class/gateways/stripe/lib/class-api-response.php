<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

use JNews\Paywall\Gateways\Stripe\Util\Case_Insensitive_Array;

/**
 * Class ApiResponse
 *
 * @package Stripe
 */
class Api_Response
{
    /**
     * @var array|Case_Insensitive_Array|null
     */
    public $headers;
    
    /**
     * @var string
     */
    public $body;

    /**
     * @var array|null
     */
    public $json;

    /**
     * @var int
     */
    public $code;

    /**
     * @param string $body
     * @param integer $code
     * @param array|Case_Insensitive_Array|null $headers
     * @param array|null $json
     */
    public function __construct($body, $code, $headers, $json)
    {
        $this->body = $body;
        $this->code = $code;
        $this->headers = $headers;
        $this->json = $json;
    }
}
