<?php
namespace SmartyStreets\Api\StreetAddress;

class OutputFactoryTest extends \PHPUnit_Framework_TestCase
{
    protected $jsonResponse;

    public function setUp()
    {
        $this->jsonResponse = json_decode(file_get_contents(__DIR__ . '/response.json'), true);
    }

    public function testOutputCreation()
    {
        $factory = new OutputFactory();
        $addressOutput = $factory->newOutput($this->jsonResponse[0]);

        $this->assertNull($addressOutput->inputId());
        $this->assertSame(0, $addressOutput->inputIndex());
        $this->assertSame(0, $addressOutput->candidateIndex());
        $this->assertNull($addressOutput->addressee());
        $this->assertSame('1 Santa Claus Ln', $addressOutput->deliveryLine1());
        $this->assertNull($addressOutput->deliveryLine2());
        $this->assertSame('North Pole AK 99705-9901', $addressOutput->lastLine());
        $this->assertSame('997059901010', $addressOutput->deliveryPointBarcode());
        $this->assertNull($addressOutput->components()->urbanization());
        $this->assertSame('1', $addressOutput->components()->primaryNumber());
        $this->assertSame('Santa Claus', $addressOutput->components()->streetName());
        $this->assertNull($addressOutput->components()->streetPreDirection());
        $this->assertNull($addressOutput->components()->streetPostDirection());
        $this->assertSame('Ln', $addressOutput->components()->streetSuffix());
        $this->assertNull($addressOutput->components()->secondaryNumber());
        $this->assertNull($addressOutput->components()->secondaryDesignator());
        $this->assertNull($addressOutput->components()->extraSecondaryNumber());
        $this->assertNull($addressOutput->components()->extraSecondaryDesignator());
        $this->assertNull($addressOutput->components()->pmbDesignator());
        $this->assertNull($addressOutput->components()->pmbNumber());
        $this->assertSame('North Pole', $addressOutput->components()->cityName());
        $this->assertNull($addressOutput->components()->defaultCityName());
        $this->assertSame('AK', $addressOutput->components()->stateAbbreviation());
        $this->assertSame('99705', $addressOutput->components()->zipCode());
        $this->assertSame('9901', $addressOutput->components()->plus4Code());
        $this->assertSame('01', $addressOutput->components()->deliveryPoint());
        $this->assertSame('0', $addressOutput->components()->deliveryPointCheckDigit());
        $this->assertSame('S', $addressOutput->metadata()->recordType());
        $this->assertSame('Standard', $addressOutput->metadata()->zipType());
        $this->assertSame('02090', $addressOutput->metadata()->countyFips());
        $this->assertSame('Fairbanks North Star', $addressOutput->metadata()->countyName());
        $this->assertSame('C004', $addressOutput->metadata()->carrierRoute());
        $this->assertSame('AL', $addressOutput->metadata()->congressionalDistrict());
        $this->assertNull($addressOutput->metadata()->buildingDefaultIndicator());
        $this->assertSame('Commercial', $addressOutput->metadata()->rdi());
        $this->assertSame('0001', $addressOutput->metadata()->elotSequence());
        $this->assertSame('A', $addressOutput->metadata()->elotSort());
        $this->assertSame(64.75233, $addressOutput->metadata()->latitude());
        $this->assertSame(-147.35297, $addressOutput->metadata()->longitude());
        $this->assertSame('Zip8', $addressOutput->metadata()->precision());
        $this->assertSame('Alaska', $addressOutput->metadata()->timeZone());
        $this->assertSame(-9, $addressOutput->metadata()->utcOffset());
        $this->assertTrue($addressOutput->metadata()->isDst());
        $this->assertSame('Y', $addressOutput->analysis()->dpvMatchCode());
        $this->assertSame('AABB', $addressOutput->analysis()->dpvFootnotes());
        $this->assertFalse($addressOutput->analysis()->isDpvCmra());
        $this->assertFalse($addressOutput->analysis()->isDpvVacant());
        $this->assertTrue($addressOutput->analysis()->isActive());
        $this->assertNull($addressOutput->analysis()->hasEwsMatch());
        $this->assertCount(1, $addressOutput->analysis()->footnotes());
        $this->assertSame('L#', $addressOutput->analysis()->footnotes()[0]);
        $this->assertNull($addressOutput->analysis()->lacslinkCode());
        $this->assertNull($addressOutput->analysis()->lacslinkIndicator());
        $this->assertNull($addressOutput->analysis()->hasSuitelinkMatch());
    }
}
