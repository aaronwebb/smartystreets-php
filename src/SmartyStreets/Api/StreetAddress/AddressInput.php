<?php
namespace SmartyStreets\Api\StreetAddress;

/**
 *
 * An input address query passed to the validation API.
 *
 * @package SmartyStreets\Api\StreetAddress
 *
 */
class AddressInput
{
    /**
     *
     * A unique identifier for this address used in your application.
     *
     * @var string
     *
     */
    protected $inputId;

    /**
     *
     * The street line of the address.
     *
     * @var string
     *
     */
    protected $street;

    /**
     *
     * Extra address information.
     *
     * @var string
     *
     */
    protected $street2;

    /**
     *
     * Apartment, suite, or office number.
     *
     * @var string
     *
     */
    protected $secondary;

    /**
     *
     * The city name.
     *
     * @var string
     *
     */
    protected $city;

    /**
     *
     * The state name or abbreviation.
     *
     * @var string
     *
     */
    protected $state;

    /**
     *
     * The ZIP code.
     *
     * @var string
     *
     */
    protected $zipCode;

    /**
     *
     * City, state and ZIP code combined.
     *
     * @var string
     *
     */
    protected $lastLine;

    /**
     *
     * The name of the recipient, firm, or company at this address.
     *
     * @var string
     *
     */
    protected $addressee;

    /**
     *
     * Only used in Puerto Rico.
     *
     * @var string
     *
     */
    protected $urbanization;

    /**
     *
     * The maximum number of valid addresses returned when the input is ambiguious.
     *
     * @var int
     *
     */
    protected $candidates = 1;

    /**
     *
     * Create the address input.
     *
     * @param string $inputId
     *
     * @param string $street
     *
     * @param string $street2
     *
     * @param string $secondary
     *
     * @param string $city
     *
     * @param string $state
     *
     * @param string $zipCode
     *
     * @param string|null $lastLine
     *
     * @param string|null $addressee
     *
     * @param string|null $urbanization
     *
     * @throws \Exception
     *
     */
    public function __construct(
        $inputId,
        $street,
        $street2,
        $secondary,
        $city,
        $state,
        $zipCode,
        $lastLine = null,
        $addressee = null,
        $urbanization = null
    ) {
        if ((empty($city) || empty($state)) && empty($zipCode)) {
            throw new \Exception('city and state or zip code are required.');
        }

        $this->setInputId($inputId);
        $this->setStreet($street);
        $this->setStreet2($street2);
        $this->setSecondary($secondary);
        $this->setCity($city);
        $this->setState($state);
        $this->setZipCode($zipCode);
        $this->setLastLine($lastLine);
        $this->setAddressee($addressee);
        $this->setUrbanization($urbanization);
    }

    /**
     *
     * Return the properties as an array to be used in query string.
     *
     * @return array The properties as an array.
     *
     */
    public function toArray()
    {
        return [
            'input_id' => $this->inputId(),
            'street' => $this->street(),
            'street2' => $this->street2(),
            'secondary' => $this->secondary(),
            'city' => $this->city(),
            'state' => $this->state(),
            'zipcode' => $this->zipCode(),
            'lastline' => $this->lastLine(),
            'addressee' => $this->addressee(),
            'urbanization' => $this->urbanization(),
            'candidates' => $this->candidates()
        ];
    }

    /**
     *
     * Get the unique identifier of this address.
     *
     * @return string The unique identifier of this address.
     *
     */
    public function inputId()
    {
        return $this->inputId;
    }

    /**
     *
     * Get the street line of the address.
     *
     * @return string The street line of the address.
     *
     */
    public function street()
    {
        return $this->street;
    }

    /**
     *
     * Get the extra address information.
     *
     * @return string The extra address information.
     *
     */
    public function street2()
    {
        return $this->street2;
    }

    /**
     *
     * Get the secondary unit designation.
     *
     * @return string The secondary unit designation.
     *
     */
    public function secondary()
    {
        return $this->secondary;
    }

    /**
     *
     * Get the city name.
     *
     * @return string The city name.
     *
     */
    public function city()
    {
        return $this->city;
    }

    /**
     *
     * Get the state name or abbreviation.
     *
     * @return string The state name or abbreviation.
     *
     */
    public function state()
    {
        return $this->state;
    }

    /**
     *
     * Get the zip code.
     *
     * @return string The zip code.
     *
     */
    public function zipCode()
    {
        return $this->zipCode;
    }

    /**
     *
     * Get the city, state, and zip code combined.
     *
     * @return string The city, state, and zip code combined.
     *
     */
    public function lastLine()
    {
        return $this->lastLine;
    }

    /**
     *
     * Get the name of the recipient.
     *
     * @return string The name of the recipient.
     *
     */
    public function addressee()
    {
        return $this->addressee;
    }

    /**
     *
     * Get the urbanization.
     *
     * @return string The urbanization.
     *
     */
    public function urbanization()
    {
        return $this->urbanization;
    }

    /**
     *
     * Get the maximum number of valid addresses returned.
     *
     * @return int The maximum number of valid addresses returned.
     *
     */
    public function candidates()
    {
        return $this->candidates;
    }

    /**
     *
     * Set the unique identifier of this address.
     *
     * @param string $inputId The unique identifier of this address.
     *
     * @throws \Exception If there is a validation error.
     *
     */
    private function setInputId($inputId)
    {
        if (strlen($inputId) > 16) {
            throw new \Exception('input_id must be 16 characters or less.');
        }

        $this->inputId = $inputId;
    }

    /**
     *
     * Set the street line of the address.
     *
     * @param string $street The street line of the address.
     *
     * @throws \Exception If there is a validation error.
     *
     */
    private function setStreet($street)
    {
        if (empty($street)) {
            throw new \Exception('street is required.');
        }
        if (strlen($street) > 64) {
            throw new \Exception('street must be 64 characters or less.');
        }

        $this->street = $street;
    }

    /**
     *
     * Set the extra address information.
     *
     * @param string $street2 The extra address information.
     *
     * @throws \Exception If there is a validation error.
     *
     */
    private function setStreet2($street2)
    {
        if (strlen($street2) > 64) {
            throw new \Exception('street2 must be 64 characters or less.');
        }

        $this->street2 = $street2;
    }

    /**
     *
     * Set the secondary unit designation.
     *
     * @param string $secondary The secondary unit designation.
     *
     * @throws \Exception If there is a validation error.
     *
     */
    private function setSecondary($secondary)
    {
        if (strlen($secondary) > 32) {
            throw new \Exception('secondary must be 32 characters or less.');
        }

        $this->secondary = $secondary;
    }

    /**
     *
     * Set the city name.
     *
     * @param string $city The city name.
     *
     * @throws \Exception If there is a validation error.
     *
     */
    private function setCity($city)
    {
        if (strlen($city) > 64) {
            throw new \Exception('city must be 64 characters or less.');
        }

        $this->city = $city;
    }

    /**
     *
     * Set the state name or abbreviation.
     *
     * @param string $state The state name or abbreviation.
     *
     * @throws \Exception If there is a validation error.
     *
     */
    private function setState($state)
    {
        if (strlen($state) > 32) {
            throw new \Exception('state must be 32 characters or less.');
        }

        $this->state = $state;
    }

    /**
     *
     * Set the zip code.
     *
     * @param string $zipCode The zip code.
     *
     * @throws \Exception If there is a validation error.
     *
     */
    private function setZipCode($zipCode)
    {
        if (strlen($zipCode) > 16) {
            throw new \Exception('zipcode must be 16 characters or less');
        }

        $this->zipCode = $zipCode;
    }

    /**
     *
     * Set the city, state, and zip code combined.
     *
     * @param string $lastLine The city, state, and zip code combined.
     *
     * @throws \Exception If there is a validation error.
     *
     */
    private function setLastLine($lastLine)
    {
        if (strlen($lastLine) > 64) {
            throw new \Exception('lastline must be 64 characters or less.');
        }

        $this->lastLine = $lastLine;
    }

    /**
     *
     * Set the name of the recipient.
     *
     * @param string $addressee The name of the recipient.
     *
     * @throws \Exception If there is a validation error.
     *
     */
    private function setAddressee($addressee)
    {
        if (strlen($addressee) > 64) {
            throw new \Exception('addressee must be 64 characters or less.');
        }

        $this->addressee = $addressee;
    }

    /**
     *
     * Set the urbanization.
     *
     * @param string $urbanization The urbanization.
     *
     * @throws \Exception If there is a validation error.
     *
     */
    private function setUrbanization($urbanization)
    {
        if (strlen($urbanization) > 64) {
            throw new \Exception('urbanization must be 64 characters or less.');
        }

        $this->urbanization = $urbanization;
    }

    /**
     * Set the maximum number of valid addresses returned.
     *
     * @param int $candidates The maximum number of valid addresses returned.
     *
     * @throws \Exception If there is a validation error.
     *
     */
    public function setCandidates($candidates)
    {
        if ($candidates) {
            if (!is_int($candidates)) {
                throw new \Exception('candidates is not an integer.');
            }
            if ($candidates < 1 || $candidates > 10) {
                throw new \Exception('candidates must be at least 1 and at most 10.');
            }
        }

        $this->candidates = $candidates;
    }
}
