<?php
namespace SmartyStreets\Api;

use SmartyStreets\Api\StreetAddress\AddressInput;
use SmartyStreets\Api\StreetAddress\OutputFactory;
use SmartyStreets\Client;

class StreetAddressTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var string
     */
    protected $jsonResponse;

    /**
     * @var string
     */
    protected $batchJsonResponse;

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var StreetAddress
     */
    protected $api;

    public function setUp()
    {
        $this->jsonResponse = file_get_contents(__DIR__ . '/StreetAddress/response.json');
        $this->batchJsonResponse = file_get_contents(__DIR__ . '/StreetAddress/batch-response.json');
        $this->client = $this->getMock('SmartyStreets\Client', array('get', 'post'), array('', ''));
    }

    public function testAddressValidation()
    {
        $this->client->expects($this->any())
            ->method('get')
            ->willReturn($this->jsonResponse);
        $this->api = new StreetAddress(
            $this->client,
            new OutputFactory()
        );

        $output = $this->api->validate(new AddressInput(
            '1',
            '1 Santa Claus Ln',
            null,
            null,
            'North Pole',
            'AK',
            '99705',
            null,
            null,
            null
        ));

        $this->assertTrue(is_array($output));
        $this->assertInstanceOf('SmartyStreets\Api\StreetAddress\AddressOutput', $output[0]);
    }

    public function testAddressBatchValidation()
    {
        $this->client->expects($this->any())
            ->method('post')
            ->willReturn($this->batchJsonResponse);
        $this->api = new StreetAddress(
            $this->client,
            new OutputFactory()
        );

        $output = $this->api->batchValidate([
            new AddressInput(
                '1',
                '1 Santa Claus Ln',
                null,
                null,
                'North Pole',
                'AK',
                '99705',
                null,
                null,
                null
            ),
            new AddressInput(
                '2',
                '2 Santa Claus Ln',
                null,
                null,
                'North Pole',
                'AK',
                '99705',
                null,
                null,
                null
            )
        ]);

        $this->assertTrue(is_array($output));
        $this->assertCount(2, $output);
        $this->assertInstanceOf('SmartyStreets\Api\StreetAddress\AddressOutput', $output[0]);
        $this->assertInstanceOf('SmartyStreets\Api\StreetAddress\AddressOutput', $output[1]);
    }
}
