<?php
namespace SmartyStreets\Api\StreetAddress;

/**
 *
 * The root element of the address verification response.
 *
 * @package SmartyStreets\Api\StreetAddress
 *
 */
class AddressOutput
{
    /**
     *
     * The unique identifier of the input address.
     *
     * @var string
     *
     */
    private $inputId;

    /**
     *
     * The order in which this address was submitted.
     *
     * @var int
     *
     */
    private $inputIndex;

    /**
     *
     * The order index when multiple candidates are returned.
     *
     * @var int
     *
     */
    private $candidateIndex;

    /**
     *
     * The intended recipient at an address.
     *
     * @var string
     *
     */
    private $addressee;

    /**
     *
     * The first delivery line.
     *
     * @var string
     *
     */
    private $deliveryLine1;

    /**
     *
     * The second delivery line.
     *
     * @var string
     *
     */
    private $deliveryLine2;

    /**
     *
     * The city, state, and zip code combined.
     *
     * @var string
     *
     */
    private $lastLine;

    /**
     *
     * The 12-digit POSTNET barcode.
     *
     * @var string
     *
     */
    private $deliveryPointBarcode;

    /**
     *
     * The components output.
     *
     * @var Components
     *
     */
    private $components;

    /**
     *
     * The metadata output.
     *
     * @var Metadata
     *
     */
    private $metadata;

    /**
     *
     * The analysis output.
     *
     * @var Analysis
     *
     */
    private $analysis;

    /**
     *
     * Create the output.
     *
     * @param string $inputId The unique identifier of the input address.
     *
     * @param int $inputIndex The order in which this address was submitted.
     *
     * @param int $candidateIndex The order index when multiple candidates are returned.
     *
     * @param string $addressee The intended recipient at an address.
     *
     * @param string $deliveryLine1 The first delivery line.
     *
     * @param string $deliveryLine2 The second delivery line.
     *
     * @param string $lastLine The city, state, and zip code combined.
     *
     * @param string $deliveryPointBarcode The 12-digit POSTNET barcode.
     *
     * @param Components $components The components output.
     *
     * @param Metadata $metadata The metadata output.
     *
     * @param Analysis $analysis The analysis output.
     *
     */
    public function __construct(
        $inputId,
        $inputIndex,
        $candidateIndex,
        $addressee,
        $deliveryLine1,
        $deliveryLine2,
        $lastLine,
        $deliveryPointBarcode,
        Components $components,
        Metadata $metadata,
        Analysis $analysis
    ) {
        $this->setInputId($inputId);
        $this->setInputIndex($inputIndex);
        $this->setCandidateIndex($candidateIndex);
        $this->setAddressee($addressee);
        $this->setDeliveryLine1($deliveryLine1);
        $this->setDeliveryLine2($deliveryLine2);
        $this->setLastLine($lastLine);
        $this->setDeliveryPointBarcode($deliveryPointBarcode);
        $this->setComponents($components);
        $this->setMetadata($metadata);
        $this->setAnalysis($analysis);
    }

    /**
     *
     * Get the unique identifier of the input address.
     *
     * @return string The unique identifier of the input address.
     *
     */
    public function inputId()
    {
        return $this->inputId;
    }

    /**
     *
     * Get the order in which this address was submitted.
     *
     * @return int The order in which this address was submitted.
     *
     */
    public function inputIndex()
    {
        return $this->inputIndex;
    }

    /**
     *
     * Get the order index when multiple candidates are returned.
     *
     * @return int The order index when multiple candidates are returned.
     *
     */
    public function candidateIndex()
    {
        return $this->candidateIndex;
    }

    /**
     *
     * Get the intended recipient at an address.
     *
     * @return string The intended recipient at an address.
     *
     */
    public function addressee()
    {
        return $this->addressee;
    }

    /**
     *
     * Get the first delivery line.
     *
     * @return string The first delivery line.
     *
     */
    public function deliveryLine1()
    {
        return $this->deliveryLine1;
    }

    /**
     *
     * Get the second delivery line.
     *
     * @return string The second delivery line.
     *
     */
    public function deliveryLine2()
    {
        return $this->deliveryLine2;
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
     * Get the 12-digit POSTNET barcode.
     *
     * @return string The 12-digit POSTNET barcode.
     *
     */
    public function deliveryPointBarcode()
    {
        return $this->deliveryPointBarcode;
    }

    /**
     *
     * Get the components output.
     *
     * @return Components The components output.
     *
     */
    public function components()
    {
        return $this->components;
    }

    /**
     *
     * Get the metadata output.
     *
     * @return Metadata The metadata output.
     *
     */
    public function metadata()
    {
        return $this->metadata;
    }

    /**
     *
     * Get the analysis output.
     *
     * @return Analysis The analysis output.
     *
     */
    public function analysis()
    {
        return $this->analysis;
    }

    /**
     *
     * Set the unique identifier of the input address.
     *
     * @param string $inputId The unique identifier of the input address.
     *
     */
    private function setInputId($inputId)
    {
        $this->inputId = $inputId;
    }

    /**
     *
     * Set the order in which this address was submitted.
     *
     * @param int $inputIndex The order in which this address was submitted.
     *
     */
    private function setInputIndex($inputIndex)
    {
        $this->inputIndex = $inputIndex;
    }

    /**
     *
     * Set the order index when multiple candidates are returned.
     *
     * @param int $candidateIndex The order index when multiple candidates are returned.
     *
     */
    private function setCandidateIndex($candidateIndex)
    {
        $this->candidateIndex = $candidateIndex;
    }

    /**
     *
     * Set the intended recipient at an address.
     *
     * @param string $addressee The intended recipient at an address.
     *
     */
    private function setAddressee($addressee)
    {
        $this->addressee = $addressee;
    }

    /**
     *
     * Set the first delivery line.
     *
     * @param string $deliveryLine1 The first delivery line.
     *
     */
    private function setDeliveryLine1($deliveryLine1)
    {
        $this->deliveryLine1 = $deliveryLine1;
    }

    /**
     *
     * Set the second delivery line.
     *
     * @param string $deliveryLine2 The second delivery line.
     *
     */
    private function setDeliveryLine2($deliveryLine2)
    {
        $this->deliveryLine2 = $deliveryLine2;
    }

    /**
     *
     * Set the city, state, and zip code combined.
     *
     * @param string $lastLine The city, state, and zip code combined.
     *
     */
    private function setLastLine($lastLine)
    {
        $this->lastLine = $lastLine;
    }

    /**
     *
     * Set the 12-digit POSTNET barcode.
     *
     * @param string $deliveryPointBarcode The 12-digit POSTNET barcode.
     *
     */
    private function setDeliveryPointBarcode($deliveryPointBarcode)
    {
        $this->deliveryPointBarcode = $deliveryPointBarcode;
    }

    /**
     *
     * Set the components output.
     *
     * @param Components $components The components output.
     *
     */
    private function setComponents($components)
    {
        $this->components = $components;
    }

    /**
     *
     * Set the metadata output.
     *
     * @param Metadata $metadata The metadata output.
     *
     */
    private function setMetadata($metadata)
    {
        $this->metadata = $metadata;
    }

    /**
     *
     * Set the analysis output.
     *
     * @param Analysis $analysis The analysis output.
     *
     */
    private function setAnalysis($analysis)
    {
        $this->analysis = $analysis;
    }
}
