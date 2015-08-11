<?php
namespace SmartyStreets\Api\StreetAddress;

/**
 *
 * The components element of the address verification response.
 *
 * @package SmartyStreets\Api\StreetAddress
 *
 */
class Components
{
    /**
     *
     * A component within a geographic area.
     *
     * @var string
     *
     */
    private $urbanization;

    /**
     *
     * The house, PO Box, or building number.
     *
     * @var string
     *
     */
    private $primaryNumber;

    /**
     *
     * The name of the street.
     *
     * @var string
     *
     */
    private $streetName;

    /**
     *
     * The directional information before a street name.
     *
     * @var string
     *
     */
    private $streetPreDirection;

    /**
     *
     * The directional information after a street name.
     *
     * @var string
     *
     */
    private $streetPostDirection;

    /**
     *
     * The abbreviated value describing the street.
     *
     * @var string
     *
     */
    private $streetSuffix;

    /**
     *
     * The apartment or suite number.
     *
     * @var string
     *
     */
    private $secondaryNumber;

    /**
     *
     * The description of a location within a complex/building.
     *
     * @var string
     *
     */
    private $secondaryDesignator;

    /**
     *
     * The descriptive information about the location of a building within a campus.
     *
     * @var string
     *
     */
    private $extraSecondaryNumber;

    /**
     *
     * The description of the location type within a campus.
     *
     * @var string
     *
     */
    private $extraSecondaryDesignator;

    /**
     *
     * The private mailbox unit designator.
     *
     * @var string
     *
     */
    private $pmbDesignator;

    /**
     *
     * The private mailbox number.
     *
     * @var string
     *
     */
    private $pmbNumber;

    /**
     *
     * The accepted/proper name of the city.
     *
     * @var string
     *
     */
    private $cityName;

    /**
     *
     * The default city name for the address.
     *
     * @var string
     *
     */
    private $defaultCityName;

    /**
     *
     * The two-letter state abbreviation.
     *
     * @var string
     *
     */
    private $stateAbbreviation;

    /**
     *
     * The 5-digit zip code.
     *
     * @var string
     *
     */
    private $zipCode;

    /**
     *
     * The 4-digit add-on code.
     *
     * @var string
     *
     */
    private $plus4Code;

    /**
     *
     * The last two digits of the house/box number.
     *
     * @var string
     *
     */
    private $deliveryPoint;

    /**
     *
     * The delivery point check digit.
     *
     * @var string
     *
     */
    private $deliveryPointCheckDigit;

    /**
     *
     * Create the output element.
     *
     * @param string $urbanization The component within a geographic area.
     *
     * @param string $primaryNumber The house, PO Box, or building number.
     *
     * @param string $streetName The name of the street.
     *
     * @param string $streetPreDirection The directional information before a street name.
     *
     * @param string $streetPostDirection The directional information after a street name.
     *
     * @param string $streetSuffix The abbreviated value describing the street.
     *
     * @param string $secondaryNumber The apartment or suite number.
     *
     * @param string $secondaryDesignator The description of a location within a complex/building.
     *
     * @param string $extraSecondaryNumber The descriptive information about the location of a building within a campus.
     *
     * @param string $extraSecondaryDesignator The description of the location type within a campus.
     *
     * @param string $pmbDesignator The private mailbox unit designator.
     *
     * @param string $pmbNumber The private mailbox number.
     *
     * @param string $cityName The accepted/proper name of the city.
     *
     * @param string $defaultCityName The default city name for the address.
     *
     * @param string $stateAbbreviation The two-letter state abbreviation.
     *
     * @param string $zipCode The 5-digit zip code.
     *
     * @param string $plus4Code The 4-digit add-on code.
     *
     * @param string $deliveryPoint The last two digits of the house/box number.
     *
     * @param string $deliveryPointCheckDigit The delivery point check digit.
     *
     */
    public function __construct(
        $urbanization,
        $primaryNumber,
        $streetName,
        $streetPreDirection,
        $streetPostDirection,
        $streetSuffix,
        $secondaryNumber,
        $secondaryDesignator,
        $extraSecondaryNumber,
        $extraSecondaryDesignator,
        $pmbDesignator,
        $pmbNumber,
        $cityName,
        $defaultCityName,
        $stateAbbreviation,
        $zipCode,
        $plus4Code,
        $deliveryPoint,
        $deliveryPointCheckDigit
    ) {
        $this->setUrbanization($urbanization);
        $this->setPrimaryNumber($primaryNumber);
        $this->setStreetName($streetName);
        $this->setStreetPreDirection($streetPreDirection);
        $this->setStreetPostDirection($streetPostDirection);
        $this->setStreetSuffix($streetSuffix);
        $this->setSecondaryNumber($secondaryNumber);
        $this->setSecondaryDesignator($secondaryDesignator);
        $this->setExtraSecondaryNumber($extraSecondaryNumber);
        $this->setExtraSecondaryDesignator($extraSecondaryDesignator);
        $this->setPmbDesignator($pmbDesignator);
        $this->setPmbNumber($pmbNumber);
        $this->setCityName($cityName);
        $this->setDefaultCityName($defaultCityName);
        $this->setStateAbbreviation($stateAbbreviation);
        $this->setZipCode($zipCode);
        $this->setPlus4Code($plus4Code);
        $this->setDeliveryPoint($deliveryPoint);
        $this->setDeliveryPointCheckDigit($deliveryPointCheckDigit);
    }

    /**
     *
     * Get the component within a geographic area.
     *
     * @return string The component within a geographic area.
     *
     */
    public function urbanization()
    {
        return $this->urbanization;
    }

    /**
     *
     * Get the house, PO Box, or building number.
     *
     * @return string The house, PO Box, or building number.
     *
     */
    public function primaryNumber()
    {
        return $this->primaryNumber;
    }

    /**
     *
     * Get the name of the street.
     *
     * @return string The name of the street.
     *
     */
    public function streetName()
    {
        return $this->streetName;
    }

    /**
     *
     * Get the directional information before a street name.
     *
     * @return string The directional information before a street name.
     *
     */
    public function streetPreDirection()
    {
        return $this->streetPreDirection;
    }

    /**
     *
     * Get the directional information after a street name.
     *
     * @return string The directional information after a street name.
     *
     */
    public function streetPostDirection()
    {
        return $this->streetPostDirection;
    }

    /**
     *
     * Get the abbreviated value describing the street.
     *
     * @return string The abbreviated value describing the street.
     *
     */
    public function streetSuffix()
    {
        return $this->streetSuffix;
    }

    /**
     *
     * Get the apartment or suite number.
     *
     * @return string The apartment or suite number.
     *
     */
    public function secondaryNumber()
    {
        return $this->secondaryNumber;
    }

    /**
     *
     * Get the description of a location within a complex/building.
     *
     * @return string The description of a location within a complex/building.
     *
     */
    public function secondaryDesignator()
    {
        return $this->secondaryDesignator;
    }

    /**
     *
     * Get the descriptive information about the location of a building within a campus.
     *
     * @return string The descriptive information about the location of a building within a campus.
     *
     */
    public function extraSecondaryNumber()
    {
        return $this->extraSecondaryNumber;
    }

    /**
     *
     * Get the description of the location type within a campus.
     *
     * @return string The description of the location type within a campus.
     *
     */
    public function extraSecondaryDesignator()
    {
        return $this->extraSecondaryDesignator;
    }

    /**
     *
     * Get the private mailbox unit designator.
     *
     * @return string The private mailbox unit designator.
     *
     */
    public function pmbDesignator()
    {
        return $this->pmbDesignator;
    }

    /**
     *
     * Get the private mailbox number.
     *
     * @return string The private mailbox number.
     *
     */
    public function pmbNumber()
    {
        return $this->pmbNumber;
    }

    /**
     *
     * Get the accepted/proper name of the city.
     *
     * @return string The accepted/proper name of the city.
     *
     */
    public function cityName()
    {
        return $this->cityName;
    }

    /**
     *
     * Get the default city name for the address.
     *
     * @return string The default city name for the address.
     *
     */
    public function defaultCityName()
    {
        return $this->defaultCityName;
    }

    /**
     *
     * Get the two-letter state abbreviation.
     *
     * @return string The two-letter state abbreviation.
     *
     */
    public function stateAbbreviation()
    {
        return $this->stateAbbreviation;
    }

    /**
     *
     * The 5-digit zip code.
     *
     * @return string The 5-digit zip code.
     *
     */
    public function zipCode()
    {
        return $this->zipCode;
    }

    /**
     *
     * The 4-digit add-on code.
     *
     * @return string The 4-digit add-on code.
     *
     */
    public function plus4Code()
    {
        return $this->plus4Code;
    }

    /**
     *
     * Get the last two digits of the house/box number.
     *
     * @return string The last two digits of the house/box number.
     *
     */
    public function deliveryPoint()
    {
        return $this->deliveryPoint;
    }

    /**
     *
     * Get the delivery point check digit.
     *
     * @return string The delivery point check digit.
     *
     */
    public function deliveryPointCheckDigit()
    {
        return $this->deliveryPointCheckDigit;
    }

    /**
     *
     * Set the component within a geographic area.
     *
     * @param string $urbanization The component within a geographic area.
     *
     */
    private function setUrbanization($urbanization)
    {
        $this->urbanization = $urbanization;
    }

    /**
     *
     * Set the house, PO Box, or building number.
     *
     * @param string $primaryNumber The house, PO Box, or building number.
     *
     */
    private function setPrimaryNumber($primaryNumber)
    {
        $this->primaryNumber = $primaryNumber;
    }

    /**
     *
     * Set the name of the street.
     *
     * @param string $streetName The name of the street.
     *
     */
    private function setStreetName($streetName)
    {
        $this->streetName = $streetName;
    }

    /**
     *
     * Set the directional information before a street name.
     *
     * @param string $streetPreDirection The directional information before a street name.
     *
     */
    private function setStreetPreDirection($streetPreDirection)
    {
        $this->streetPreDirection = $streetPreDirection;
    }

    /**
     *
     * Set the directional information after a street name.
     *
     * @param string $streetPostDirection The directional information after a street name.
     *
     */
    private function setStreetPostDirection($streetPostDirection)
    {
        $this->streetPostDirection = $streetPostDirection;
    }

    /**
     *
     * Set the abbreviated value describing the street.
     *
     * @param string $streetSuffix The abbreviated value describing the street.
     *
     */
    private function setStreetSuffix($streetSuffix)
    {
        $this->streetSuffix = $streetSuffix;
    }

    /**
     *
     * Set the apartment or suite number.
     *
     * @param string $secondaryNumber The apartment or suite number.
     *
     */
    private function setSecondaryNumber($secondaryNumber)
    {
        $this->secondaryNumber = $secondaryNumber;
    }

    /**
     *
     * Set the description of a location within a complex/building.
     *
     * @param string $secondaryDesignator The description of a location within a complex/building.
     *
     */
    private function setSecondaryDesignator($secondaryDesignator)
    {
        $this->secondaryDesignator = $secondaryDesignator;
    }

    /**
     *
     * Set the descriptive information about the location of a building within a campus.
     *
     * @param string $extraSecondaryNumber The descriptive information about the location of a building within a campus.
     *
     */
    private function setExtraSecondaryNumber($extraSecondaryNumber)
    {
        $this->extraSecondaryNumber = $extraSecondaryNumber;
    }

    /**
     *
     * Set the description of the location type within a campus.
     *
     * @param string $extraSecondaryDesignator The description of the location type within a campus.
     *
     */
    private function setExtraSecondaryDesignator($extraSecondaryDesignator)
    {
        $this->extraSecondaryDesignator = $extraSecondaryDesignator;
    }

    /**
     *
     * Set the private mailbox unit designator.
     *
     * @param string $pmbDesignator The private mailbox unit designator.
     *
     */
    private function setPmbDesignator($pmbDesignator)
    {
        $this->pmbDesignator = $pmbDesignator;
    }

    /**
     *
     * Set the private mailbox number.
     *
     * @param string $pmbNumber The private mailbox number.
     *
     */
    private function setPmbNumber($pmbNumber)
    {
        $this->pmbNumber = $pmbNumber;
    }

    /**
     *
     * Set the accepted/proper name of the city.
     *
     * @param string $cityName The accepted/proper name of the city.
     *
     */
    private function setCityName($cityName)
    {
        $this->cityName = $cityName;
    }

    /**
     *
     * Set the default city name for the address.
     *
     * @param string $defaultCityName The default city name for the address.
     *
     */
    private function setDefaultCityName($defaultCityName)
    {
        $this->defaultCityName = $defaultCityName;
    }

    /**
     *
     * Set the two-letter state abbreviation.
     *
     * @param string $stateAbbreviation The two-letter state abbreviation.
     *
     */
    private function setStateAbbreviation($stateAbbreviation)
    {
        $this->stateAbbreviation = $stateAbbreviation;
    }

    /**
     *
     * Set the 5-digit zip code.
     *
     * @param string $zipCode The 5-digit zip code.
     *
     */
    private function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     *
     * Set the 4-digit add-on code.
     *
     * @param string $plus4Code The 4-digit add-on code.
     *
     */
    private function setPlus4Code($plus4Code)
    {
        $this->plus4Code = $plus4Code;
    }

    /**
     *
     * Set the last two digits of the house/box number.
     *
     * @param string $deliveryPoint The last two digits of the house/box number.
     *
     */
    private function setDeliveryPoint($deliveryPoint)
    {
        $this->deliveryPoint = $deliveryPoint;
    }

    /**
     *
     * Set the delivery point check digit.
     *
     * @param string $deliveryPointCheckDigit The delivery point check digit.
     *
     */
    private function setDeliveryPointCheckDigit($deliveryPointCheckDigit)
    {
        $this->deliveryPointCheckDigit = $deliveryPointCheckDigit;
    }
}
