<?php
namespace SmartyStreets\Api;

use SmartyStreets\Api\StreetAddress\AddressInput;
use SmartyStreets\Api\StreetAddress\AddressOutput;
use SmartyStreets\Api\StreetAddress\OutputFactory;
use SmartyStreets\Client;

/**
 *
 * Handles interactions with the street address API.
 *
 * @package SmartyStreets\Api
 *
 */
class StreetAddress extends AbstractApi
{
    /**
     *
     * The factory to transform the response.
     *
     * @var OutputFactory
     *
     */
    protected $factory;

    /**
     *
     * Create the API client with dependencies.
     *
     * @param Client $client The API client.
     *
     * @param OutputFactory $factory The factory to transform the response.
     *
     */
    public function __construct(Client $client, OutputFactory $factory)
    {
        parent::__construct($client);

        $this->factory = $factory;
    }

    /**
     *
     * Perform verification of a single address.
     *
     * @param AddressInput $address The address to be verified.
     *
     * @return AddressOutput The verified response.
     *
     */
    public function validate(AddressInput $address)
    {
        $response = $this->client->get('/street-address', $address->toArray());
        $candidates = json_decode($response, true);

        $output = array();
        foreach ($candidates as $candidate) {
            $output[] = $this->factory->newOutput($candidate);
        }

        return $output;
    }

    /**
     *
     * Perform verification of multiple addresses.
     *
     * @param AddressInput[] $addresses The addresses to be verified.
     *
     * @return AddressOutput[] The verified response.
     *
     */
    public function batchValidate(array $addresses)
    {
        $input = [];
        foreach ($addresses as $address) {
            $input[] = $address->toArray();
        }

        $response = $this->client->post('/street-address', $input);

        $output = [];
        $results = json_decode($response, true);
        foreach ($results as $result) {
            $output[] = $this->factory->newOutput($result);
        }

        return $output;
    }
}
