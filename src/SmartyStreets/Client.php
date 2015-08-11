<?php
namespace SmartyStreets;

use Psr\Http\Message\ResponseInterface;
use SmartyStreets\Api\StreetAddress\OutputFactory;
use SmartyStreets\Api\StreetAddress;

/**
 *
 * Class Client
 *
 * @package SmartyStreets
 *
 */
class Client
{
    /**
     *
     * The base URL for the SmartyStreets API.
     *
     */
    const BASE_URL = 'https://api.smartystreets.com/';

    /**
     *
     * The user agent.
     *
     */
    const USER_AGENT = 'smartystreets-php';

    /**
     *
     * The authentication ID to use for API requests.
     *
     * @var string
     *
     */
    protected $authId;

    /**
     *
     * The authentication token to use for API requests.
     *
     * @var string
     *
     */
    protected $authToken;

    /**
     *
     * The HTTP client used to make API requests.
     *
     * @var \GuzzleHttp\Client
     *
     */
    protected $client;

    /**
     *
     * Create the API client with secret key.
     *
     * @param string $authId The authentication ID to use for API requests.
     *
     * @param string $authToken The authentication token to use for API requests.
     *
     */
    public function __construct($authId, $authToken)
    {
        $this->authId = $authId;
        $this->authToken = $authToken;

        $this->client = new \GuzzleHttp\Client();
    }

    /**
     *
     * Get the street address API facade.
     *
     * @return StreetAddress The street address API.
     *
     */
    public function streetAddress()
    {
        return new StreetAddress($this, new OutputFactory);
    }

    /**
     *
     * Handles a get request to the API.
     *
     * @param string $path The URI path.
     *
     * @param array $params The query data to be sent.
     *
     * @return string The API response.
     *
     */
    public function get($path, array $params)
    {
        $response = $this->client->get($this->getPath($path, http_build_query($params)));
        $response = $this->processResponse($response);

        return $response;
    }

    /**
     *
     * Handles a post request to the API.
     *
     * @param string $path The URI path.
     *
     * @param array $params The query data to be sent.
     *
     * @return string The API response.
     *
     */
    public function post($path, array $params)
    {
        $response = $this->client->post($this->getPath($path), ['body' => json_encode($params)]);
        $response = $this->processResponse($response);

        return $response;
    }

    /**
     *
     * Build the complete URL to execute the request.
     *
     * @param string $path The URI path.
     *
     * @param array|null $params The query data to be sent in the URL.
     *
     * @return string The complete URL.
     *
     */
    private function getPath($path, array $params = null)
    {
        $query = [
            'auth-id' => $this->authId,
            'auth-token' => $this->authToken
        ];
        if ($params) {
            $query = array_merge($query, $params);
        }
        $query = http_build_query($query);

        return self::BASE_URL . $path . '?' . $query;
    }

    /**
     *
     * Check response for errors.
     *
     * @param ResponseInterface $response The HTTP client response.
     *
     * @return string The response contents.
     *
     * @throws \Exception If the request was not successful.
     *
     */
    private function processResponse(ResponseInterface $response)
    {
        if ($this->getStatus($response) !== 200) {
            throw new \Exception();
        }

        return $response->getBody()->getContents();
    }

    /**
     *
     * Get the status code returned by the API.
     *
     * @param ResponseInterface $response The HTTP client response.
     *
     * @return int The status code.
     *
     */
    private function getStatus(ResponseInterface $response)
    {
        return $response->getHeader('status')[0];
    }
}
