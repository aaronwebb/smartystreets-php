<?php
namespace SmartyStreets\Api\StreetAddress;

class AddressInputTest extends \PHPUnit_Framework_TestCase
{
    public function testBasicObjectCreation()
    {
        $input = $this->getBasicValidInput();

        $this->assertSame('1', $input->inputId());
        $this->assertSame('1600 Pennsylvania Ave NW', $input->street());
        $this->assertNull($input->street2());
        $this->assertNull($input->secondary());
        $this->assertSame('Washington', $input->city());
        $this->assertSame('DC', $input->state());
        $this->assertSame('20500', $input->zipCode());
        $this->assertNull($input->lastLine());
        $this->assertSame('Mr. President', $input->addressee());
        $this->assertNull($input->urbanization());
        $this->assertSame(1, $input->candidates());
    }

    public function testInputDataArray()
    {
        $input = $this->getBasicValidInput()->toArray();

        $this->assertArrayHasKey('input_id', $input);
        $this->assertArrayHasKey('street', $input);
        $this->assertArrayHasKey('street2', $input);
        $this->assertArrayHasKey('secondary', $input);
        $this->assertArrayHasKey('city', $input);
        $this->assertArrayHasKey('state', $input);
        $this->assertArrayHasKey('zipcode', $input);
        $this->assertArrayHasKey('lastline', $input);
        $this->assertArrayHasKey('addressee', $input);
        $this->assertArrayHasKey('urbanization', $input);
        $this->assertArrayHasKey('candidates', $input);

        $this->assertSame('1', $input['input_id']);
        $this->assertSame('1600 Pennsylvania Ave NW', $input['street']);
        $this->assertNull($input['street2']);
        $this->assertNull($input['secondary']);
        $this->assertSame('Washington', $input['city']);
        $this->assertSame('DC', $input['state']);
        $this->assertSame('20500', $input['zipcode']);
        $this->assertNull($input['lastline']);
        $this->assertSame('Mr. President', $input['addressee']);
        $this->assertNull($input['urbanization']);
        $this->assertSame(1, $input['candidates']);
    }

    public function testInputWithMoreCandidates()
    {
        $input = $this->getBasicValidInput();
        $input->setCandidates(10);

        $this->assertSame(10, $input->candidates());
    }

    /**
     * @expectedException \Exception
     */
    public function testInputWithInvalidInputId()
    {
        new AddressInput(
            '***** Test with a string that is longer than 16 characters. *****',
            '1600 Pennsylvania Ave NW',
            null,
            null,
            'Washington',
            'DC',
            '20500'
        );
    }

    /**
     * @expectedException \Exception
     */
    public function testInputStreetIsRequired()
    {
        new AddressInput(
            '1',
            null,
            null,
            null,
            'Washington',
            'DC',
            '20500'
        );
    }

    /**
     * @expectedException \Exception
     */
    public function testInputWithInvalidStreet()
    {
        new AddressInput(
            '1',
            '***** Test with a string that is longer than 64 characters. *****',
            null,
            null,
            'Washington',
            'DC',
            '20500'
        );
    }

    /**
     * @expectedException \Exception
     */
    public function testInputWithInvalidExtraAddress()
    {
        new AddressInput(
            '1',
            '1600 Pennsylvania Ave NW',
            '***** Test with a string that is longer than 64 characters. *****',
            null,
            'Washington',
            'DC',
            '20500'
        );
    }

    /**
     * @expectedException \Exception
     */
    public function testInputWithInvalidSecondary()
    {
        new AddressInput(
            '1',
            '1600 Pennsylvania Ave NW',
            null,
            '***** Test with a string that is longer than 32 characters. *****',
            'Washington',
            'DC',
            '20500'
        );
    }

    /**
     * @expectedException \Exception
     */
    public function testInputWithInvalidCity()
    {
        new AddressInput(
            '1',
            '1600 Pennsylvania Ave NW',
            null,
            null,
            '***** Test with a string that is longer than 64 characters. *****',
            'DC',
            '20500'
        );
    }

    /**
     * @expectedException \Exception
     */
    public function testInputWithInvalidState()
    {
        new AddressInput(
            '1',
            '1600 Pennsylvania Ave NW',
            null,
            null,
            'Washington',
            '***** Test with a string that is longer than 32 characters. *****',
            '20500'
        );
    }

    /**
     * @expectedException \Exception
     */
    public function testInputWithInvalidZipCode()
    {
        new AddressInput(
            '1',
            '1600 Pennsylvania Ave NW',
            null,
            null,
            'Washington',
            'DC',
            '***** Test with a string that is longer than 16 characters. *****'
        );
    }

    /**
     * @expectedException \Exception
     */
    public function testInputWithInvalidLastLine()
    {
        new AddressInput(
            '1',
            '1600 Pennsylvania Ave NW',
            null,
            null,
            'Washington',
            'DC',
            '20500',
            '***** Test with a string that is longer than 64 characters. *****'
        );
    }

    /**
     * @expectedException \Exception
     */
    public function testInputWithInvalidAddressee()
    {
        new AddressInput(
            '1',
            '1600 Pennsylvania Ave NW',
            null,
            null,
            'Washington',
            'DC',
            '20500',
            null,
            '***** Test with a string that is longer than 64 characters. *****'
        );
    }

    /**
     * @expectedException \Exception
     */
    public function testInputWithInvalidUrbanization()
    {
        new AddressInput(
            '1',
            '1600 Pennsylvania Ave NW',
            null,
            null,
            'Washington',
            'DC',
            '20500',
            null,
            'Mr. President',
            '***** Test with a string that is longer than 64 characters. *****'
        );
    }

    /**
     * @expectedException \Exception
     */
    public function testInputWithInvalidCandidates()
    {
        $input = $this->getBasicValidInput();

        $input->setCandidates('one');
    }

    /**
     * @expectedException \Exception
     */
    public function testInputWithTooManyCandidates()
    {
        $input = $this->getBasicValidInput();

        $input->setCandidates(100);
    }

    private function getBasicValidInput()
    {
        $input = new AddressInput(
            '1',
            '1600 Pennsylvania Ave NW',
            null,
            null,
            'Washington',
            'DC',
            '20500',
            null,
            'Mr. President',
            null
        );

        return $input;
    }
}