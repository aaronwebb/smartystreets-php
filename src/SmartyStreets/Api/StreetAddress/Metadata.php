<?php
namespace SmartyStreets\Api\StreetAddress;

/**
 *
 * The metadata element of the address verification response.
 *
 * @package SmartyStreets\Api\StreetAddress
 *
 */
class Metadata
{
    const RECORD_TYPE_FIRM = 'F';
    const RECORD_TYPE_GENERAL_DELIVERY = 'G';
    const RECORD_TYPE_HIGH_RISE = 'H';
    const RECORD_TYPE_POST_OFFICE_BOX = 'P';
    const RECORD_TYPE_RURAL_ROUTE = 'R';
    const RECORD_TYPE_STREET = 'S';
    const RECORD_TYPE_NO_MATCH = '';

    const ZIP_TYPE_UNIQUE = 'Unique';
    const ZIP_TYPE_MILITARY = 'Military';
    const ZIP_TYPE_PO_BOX = 'POBox';
    const ZIP_TYPE_STANDARD = 'Standard';

    const RDI_RESIDENTIAL = 'residential';
    const RDI_COMMERCIAL = 'commercial';
    const RDI_UNKNOWN = 'unknown';

    const ELOT_ASCENDING = 'A';
    const ELOT_DESCENDING = 'D';
    const ELOT_NONE = '';

    const PRECISION_UNKNOWN = 'Unknown';
    const PRECISION_NONE = 'None';
    const PRECISION_STATE = 'State';
    const PRECISION_SOLUTION_AREA = 'SolutionArea';
    const PRECISION_CITY = 'City';
    const PRECISION_ZIP5 = 'Zip5';
    const PRECISION_ZIP6 = 'Zip6';
    const PRECISION_ZIP7 = 'Zip7';
    const PRECISION_ZIP8 = 'Zip8';
    const PRECISION_ZIP9 = 'Zip9';
    const PRECISION_STRUCTURE = 'Structure';

    /**
     *
     * The type of record that was matched.
     *
     * @var string
     *
     */
    private $recordType;

    /**
     *
     * The type of the zip code.
     *
     * @var string
     *
     */
    private $zipType;

    /**
     *
     * The 5-digit county FIPS code.
     *
     * @var string
     *
     */
    private $countyFips;

    /**
     *
     * The name of the county.
     *
     * @var string
     *
     */
    private $countyName;

    /**
     *
     * The postal carrier route.
     *
     * @var string
     *
     */
    private $carrierRoute;

    /**
     *
     * The congressional district.
     *
     * @var string
     *
     */
    private $congressionalDistrict;

    /**
     *
     * The default address for a building.
     *
     * @var string
     *
     */
    private $buildingDefaultIndicator;

    /**
     *
     * The residential delivery indicator.
     *
     * @var string
     *
     */
    private $rdi;

    /**
     *
     * The eLOT sequence number.
     *
     * @var string
     *
     */
    private $elotSequence;

    /**
     *
     * The eLOT sort order.
     *
     * @var string
     *
     */
    private $elotSort;

    /**
     *
     * The latitude coordinate.
     *
     * @var float
     *
     */
    private $latitude;

    /**
     *
     * The longitude coordinate.
     *
     * @var float
     *
     */
    private $longitude;

    /**
     *
     * The precision of the coordinates.
     *
     * @var string
     *
     */
    private $precision;

    /**
     *
     * The common name of the time zone.
     *
     * @var string
     *
     */
    private $timeZone;

    /**
     *
     * The number of hours that the time zone is offset from UTC.
     *
     * @var int
     *
     */
    private $utcOffset;

    /**
     *
     * Indicates if the time zone observes daylight saving time.
     *
     * @var bool
     *
     */
    private $dst;

    /**
     *
     * Create the output element.
     *
     * @param string $recordType The type of record that was matched.
     *
     * @param string $zipType The type of the zip code.
     *
     * @param string $countyFips The 5-digit county FIPS code.
     *
     * @param string $countyName The name of the county.
     *
     * @param string $carrierRoute The postal carrier route.
     *
     * @param string $congressionalDistrict The congressional district.
     *
     * @param string $buildingDefaultIndicator The default address for a building.
     *
     * @param string $rdi The residential delivery indicator.
     *
     * @param string $elotSequence The eLOT sequence number.
     *
     * @param string $elotSort The eLOT sort order.
     *
     * @param float $latitude The latitude coordinate.
     *
     * @param float $longitude The longitude coordinate.
     *
     * @param string $precision The precision of the coordinates.
     *
     * @param string $timeZone The common name of the time zone.
     *
     * @param int $utcOffset The number of hours that the time zone is offset from UTC.
     *
     * @param bool $dst Indicator of whether the time zone observes daylight saving time.
     *
     */
    public function __construct(
        $recordType,
        $zipType,
        $countyFips,
        $countyName,
        $carrierRoute,
        $congressionalDistrict,
        $buildingDefaultIndicator,
        $rdi,
        $elotSequence,
        $elotSort,
        $latitude,
        $longitude,
        $precision,
        $timeZone,
        $utcOffset,
        $dst
    ) {
        $this->setRecordType($recordType);
        $this->setZipType($zipType);
        $this->setCountyFips($countyFips);
        $this->setCountyName($countyName);
        $this->setCarrierRoute($carrierRoute);
        $this->setCongressionalDistrict($congressionalDistrict);
        $this->setBuildingDefaultIndicator($buildingDefaultIndicator);
        $this->setRdi($rdi);
        $this->setElotSequence($elotSequence);
        $this->setElotSort($elotSort);
        $this->setLatitude($latitude);
        $this->setLongitude($longitude);
        $this->setPrecision($precision);
        $this->setTimeZone($timeZone);
        $this->setUtcOffset($utcOffset);
        $this->setDst($dst);
    }

    /**
     *
     * Get the type of record that was matched.
     *
     * @return string The type of record that was matched.
     *
     */
    public function recordType()
    {
        return $this->recordType;
    }

    /**
     *
     * Get the type of the zip code.
     *
     * @return string The type of the zip code.
     *
     */
    public function zipType()
    {
        return $this->zipType;
    }

    /**
     *
     * Get the 5-digit county FIPS code.
     *
     * @return string The 5-digit county FIPS code.
     *
     */
    public function countyFips()
    {
        return $this->countyFips;
    }

    /**
     *
     * Get the name of the county.
     *
     * @return string The name of the county.
     *
     */
    public function countyName()
    {
        return $this->countyName;
    }

    /**
     *
     * Get the postal carrier route.
     *
     * @return string The postal carrier route.
     *
     */
    public function carrierRoute()
    {
        return $this->carrierRoute;
    }

    /**
     *
     * Get the congressional district.
     *
     * @return string The congressional district.
     *
     */
    public function congressionalDistrict()
    {
        return $this->congressionalDistrict;
    }

    /**
     *
     * Get the default address for a building.
     *
     * @return string The default address for a building.
     *
     */
    public function buildingDefaultIndicator()
    {
        return $this->buildingDefaultIndicator;
    }

    /**
     *
     * Get the residential delivery indicator.
     *
     * @return string The residential delivery indicator.
     *
     */
    public function rdi()
    {
        return $this->rdi;
    }

    /**
     *
     * Get the eLOT sequence number.
     *
     * @return string The eLOT sequence number.
     *
     */
    public function elotSequence()
    {
        return $this->elotSequence;
    }

    /**
     *
     * Get the eLOT sort order.
     *
     * @return string The eLOT sort order.
     *
     */
    public function elotSort()
    {
        return $this->elotSort;
    }

    /**
     *
     * Get the latitude coordinate.
     *
     * @return float The latitude coordinate.
     *
     */
    public function latitude()
    {
        return $this->latitude;
    }

    /**
     *
     * Get the longitude coordinate.
     *
     * @return float The longitude coordinate.
     *
     */
    public function longitude()
    {
        return $this->longitude;
    }

    /**
     *
     * Get the precision of the coordinates.
     *
     * @return string The precision of the coordinates.
     *
     */
    public function precision()
    {
        return $this->precision;
    }

    /**
     *
     * Get the common name of the time zone.
     *
     * @return string The common name of the time zone.
     *
     */
    public function timeZone()
    {
        return $this->timeZone;
    }

    /**
     *
     * Get the number of hours that the time zone is offset from UTC.
     *
     * @return int The number of hours that the time zone is offset from UTC.
     *
     */
    public function utcOffset()
    {
        return $this->utcOffset;
    }

    /**
     *
     * Does the time zone observe daylight saving time?
     *
     * @return boolean If the time zone observes daylight saving time.
     *
     */
    public function isDst()
    {
        return $this->dst;
    }

    /**
     *
     * Set the type of record that was matched.
     *
     * @param string $recordType The type of record that was matched.
     *
     */
    private function setRecordType($recordType)
    {
        $this->recordType = $recordType;
    }

    /**
     *
     * Set the type of the zip code.
     *
     * @param string $zipType The type of the zip code.
     *
     */
    private function setZipType($zipType)
    {
        $this->zipType = $zipType;
    }

    /**
     *
     * Set the 5-digit county FIPS code.
     *
     * @param string $countyFips The 5-digit county FIPS code.
     *
     */
    private function setCountyFips($countyFips)
    {
        $this->countyFips = $countyFips;
    }

    /**
     *
     * Set the name of the county.
     *
     * @param string $countyName The name of the county.
     *
     */
    private function setCountyName($countyName)
    {
        $this->countyName = $countyName;
    }

    /**
     *
     * Set the postal carrier route.
     *
     * @param string $carrierRoute The postal carrier route.
     *
     */
    private function setCarrierRoute($carrierRoute)
    {
        $this->carrierRoute = $carrierRoute;
    }

    /**
     *
     * Set the congressional district.
     *
     * @param string $congressionalDistrict The congressional district.
     *
     */
    private function setCongressionalDistrict($congressionalDistrict)
    {
        $this->congressionalDistrict = $congressionalDistrict;
    }

    /**
     *
     * Set the default address for a building.
     *
     * @param string $buildingDefaultIndicator The default address for a building.
     *
     */
    private function setBuildingDefaultIndicator($buildingDefaultIndicator)
    {
        $this->buildingDefaultIndicator = $buildingDefaultIndicator;
    }

    /**
     *
     * Set the residential delivery indicator.
     *
     * @param string $rdi The residential delivery indicator.
     *
     */
    private function setRdi($rdi)
    {
        $this->rdi = $rdi;
    }

    /**
     *
     * Set the eLOT sequence number.
     *
     * @param string $elotSequence The eLOT sequence number.
     *
     */
    private function setElotSequence($elotSequence)
    {
        $this->elotSequence = $elotSequence;
    }

    /**
     *
     * Set the eLOT sort order.
     *
     * @param string $elotSort The eLOT sort order.
     *
     */
    private function setElotSort($elotSort)
    {
        $this->elotSort = $elotSort;
    }

    /**
     *
     * Set the latitude coordinate.
     *
     * @param float $latitude The latitude coordinate.
     *
     */
    private function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     *
     * Set the longitude coordinate.
     *
     * @param float $longitude The longitude coordinate.
     *
     */
    private function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     *
     * Set the precision of the coordinates.
     *
     * @param string $precision The precision of the coordinates.
     *
     */
    private function setPrecision($precision)
    {
        $this->precision = $precision;
    }

    /**
     *
     * Set the common name of the time zone.
     *
     * @param string $timeZone The common name of the time zone.
     *
     */
    private function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }

    /**
     *
     * Set the number of hours that the time zone is offset from UTC.
     *
     * @param int $utcOffset The number of hours that the time zone is offset from UTC.
     *
     */
    private function setUtcOffset($utcOffset)
    {
        $this->utcOffset = $utcOffset;
    }

    /**
     *
     * Set indicator of whether the time zone observes daylight saving time.
     *
     * @param boolean $dst The indicator of whether the time zone observes daylight saving time.
     *
     */
    private function setDst($dst)
    {
        $this->dst = $dst;
    }
}
