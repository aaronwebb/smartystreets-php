<?php
namespace SmartyStreets\Api;

use SmartyStreets\Client;

abstract class AbstractApi
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}
