<?php
namespace SmartyStreets\Api\StreetAddress;

/**
 *
 * The analysis element of the address verification response.
 *
 * @package SmartyStreets\Api\StreetAddress
 *
 */
class Analysis
{
    const DPV_CONFIRMED = 'Y';
    const DPV_NOT_CONFIRMED = 'N';
    const DPV_CONFIRMED_DROP_SECONDARY = 'S';
    const DPV_CONFIRMED_MISSING_SECONDARY = 'D';

    const DPV_MATCH_CITY_STATE_ZIP = 'AA';
    const DPV_MATCH_NO_ZIP4 = 'A1';
    const DPV_MATCH_WITH_ZIP4 = 'BB';
    const DPV_MATCH_DROP_SECONDARY = 'CC';
    const DPV_MATCH_MILITARY = 'F1';
    const DPV_MATCH_GENERAL = 'G1';
    const DPV_MATCH_PRIMARY_NUMBER_MISSING = 'M1';
    const DPV_MATCH_PRIMARY_NUMBER_INVALID = 'M3';
    const DPV_MATCH_MISSING_SECONDARY = 'N1';
    const DPV_MATCH_BOX_MISSING = 'P1';
    const DPV_MATCH_BOX_INVALID = 'P3';
    const DPV_MATCH_WITH_PMB = 'RR';
    const DPV_MATCH_NO_PMB = 'R1';
    const DPV_MATCH_ZIP_CODE = 'U1';

    const LACSLINK_MATCH = 'Y';
    const LACSLINK_DROP_SECONDARY = 'S';
    const LACSLINK_NO_MATCH = 'N';
    const LACSLINK_FALSE_POSITIVE = 'F';

    /**
     *
     * The delivery point validation status.
     *
     * @var string
     *
     */
    private $dpvMatchCode;

    /**
     *
     * The reason for the dpv code.
     *
     * @var string
     *
     */
    private $dpvFootnotes;

    /**
     *
     * Indicates if the address is at a CMRA.
     *
     * @var bool
     *
     */
    private $dpvCmra;

    /**
     *
     * Indicates the delivery point was active but is not currently.
     *
     * @var bool
     *
     */
    private $dpvVacant;

    /**
     *
     * Indicates if the address is active.
     *
     * @var bool
     *
     */
    private $active;

    /**
     *
     * Indicates if the address is flagged by the early warning system.
     *
     * @var bool
     *
     */
    private $ewsMatch;

    /**
     *
     * The list of changes that were made to the input.
     *
     * @var array
     *
     */
    private $footnotes;

    /**
     *
     * The reason for the LACSLink indication.
     *
     * @var string
     *
     */
    private $lacslinkCode;

    /**
     *
     * The LACSLink indication.
     *
     * @var string
     *
     */
    private $lacslinkIndicator;

    /**
     *
     * Indicates if there was a SuiteLink match.
     *
     * @var bool
     *
     */
    private $suitelinkMatch;

    /**
     *
     * Create the output element.
     *
     * @param string $dpvMatchCode The delivery point validation status.
     *
     * @param string $dpvFootnotes The reason for the dpv code.
     *
     * @param bool $dpvCmra The indicator of whether the address is at a CMRA.
     *
     * @param bool $dpvVacant The indicator of whether the delivery point was active but is not currently.
     *
     * @param bool $active The indicator of whether the address is active.
     *
     * @param bool $ewsMatch The indicator of whether the address is flagged by the early warning system.
     *
     * @param array $footnotes The list of changes that were made to the input.
     *
     * @param string $lacslinkCode The reason for the LACSLink indication.
     *
     * @param string $lacslinkIndicator The LACSLink indication.
     *
     * @param bool $suitelinkMatch The indicator of whether there was a SuiteLink match.
     *
     */
    public function __construct(
        $dpvMatchCode,
        $dpvFootnotes,
        $dpvCmra,
        $dpvVacant,
        $active,
        $ewsMatch,
        $footnotes,
        $lacslinkCode,
        $lacslinkIndicator,
        $suitelinkMatch
    ) {
        $this->setDpvMatchCode($dpvMatchCode);
        $this->setDpvFootnotes($dpvFootnotes);
        $this->setDpvCmra($dpvCmra);
        $this->setDpvVacant($dpvVacant);
        $this->setActive($active);
        $this->setEwsMatch($ewsMatch);
        $this->setFootnotes($footnotes);
        $this->setLacslinkCode($lacslinkCode);
        $this->setLacslinkIndicator($lacslinkIndicator);
        $this->setSuitelinkMatch($suitelinkMatch);
    }

    /**
     *
     * Get the delivery point validation status.
     *
     * @return string The delivery point validation status.
     *
     */
    public function dpvMatchCode()
    {
        return $this->dpvMatchCode;
    }

    /**
     *
     * Get the reason for the dpv code.
     *
     * @return string The reason for the dpv code.
     *
     */
    public function dpvFootnotes()
    {
        return $this->dpvFootnotes;
    }

    /**
     *
     * Is the address is at a CMRA?
     *
     * @return boolean The indicator of whether the address is at a CMRA.
     *
     */
    public function isDpvCmra()
    {
        return $this->dpvCmra;
    }

    /**
     *
     * Was the delivery point was active but is not currently?
     *
     * @return boolean The indicator or whether the delivery point was active but is not currently.
     *
     */
    public function isDpvVacant()
    {
        return $this->dpvVacant;
    }

    /**
     *
     * Is the address active?
     *
     * @return boolean The indicator of whether the address is active.
     *
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     *
     * Has the address been flagged by the early warning system?
     *
     * @return boolean The indicator of whether the address is flagged by the early warning system.
     *
     */
    public function hasEwsMatch()
    {
        return $this->ewsMatch;
    }

    /**
     *
     * Get the list of changes that were made to the input.
     *
     * @return array The list of changes that were made to the input.
     *
     */
    public function footnotes()
    {
        return $this->footnotes;
    }

    /**
     *
     * Get the reason for the LACSLink indication.
     *
     * @return string The reason for the LACSLink indication.
     *
     */
    public function lacslinkCode()
    {
        return $this->lacslinkCode;
    }

    /**
     *
     * Get the LACSLink indication.
     *
     * @return string The LACSLink indication.
     *
     */
    public function lacslinkIndicator()
    {
        return $this->lacslinkIndicator;
    }

    /**
     *
     * Is there a SuiteLink match?
     *
     * @return boolean The indicator of whether there was a SuiteLink match.
     *
     */
    public function hasSuitelinkMatch()
    {
        return $this->suitelinkMatch;
    }

    /**
     *
     * Set the delivery point validation status.
     *
     * @param string $dpvMatchCode The delivery point validation status.
     *
     */
    private function setDpvMatchCode($dpvMatchCode)
    {
        $this->dpvMatchCode = $dpvMatchCode;
    }

    /**
     *
     * Set the reason for the dpv code.
     *
     * @param string $dpvFootnotes The reason for the dpv code.
     *
     */
    private function setDpvFootnotes($dpvFootnotes)
    {
        $this->dpvFootnotes = $dpvFootnotes;
    }

    /**
     *
     * Set the indicator of whether the address is at a CMRA.
     *
     * @param boolean $dpvCmra The indicator of whether the address is at a CMRA.
     *
     */
    private function setDpvCmra($dpvCmra)
    {
        $this->dpvCmra = $dpvCmra;
    }

    /**
     *
     * Set the indicator of whether the delivery point was active but is not currently.
     *
     * @param boolean $dpvVacant The indicator of whether the delivery point was active but is not currently.
     *
     */
    private function setDpvVacant($dpvVacant)
    {
        $this->dpvVacant = $dpvVacant;
    }

    /**
     *
     * Set the indicator of whether the address is active.
     *
     * @param boolean $active The indicator of whether the address is active.
     *
     */
    private function setActive($active)
    {
        $this->active = $active;
    }

    /**
     *
     * Set the indicator of whether the address is flagged by the early warning system.
     *
     * @param boolean $ewsMatch The indicator of whether the address is flagged by the early warning system.
     *
     */
    private function setEwsMatch($ewsMatch)
    {
        $this->ewsMatch = $ewsMatch;
    }

    /**
     *
     * Set the list of changes that were made to the input.
     *
     * @param array $footnotes The list of changes that were made to the input.
     *
     */
    private function setFootnotes($footnotes)
    {
        $this->footnotes = $footnotes;
    }

    /**
     *
     * Set the reason for the LACSLink indication.
     *
     * @param string $lacslinkCode The reason for the LACSLink indication.
     *
     */
    private function setLacslinkCode($lacslinkCode)
    {
        $this->lacslinkCode = $lacslinkCode;
    }

    /**
     *
     * Set the LACSLink indication.
     *
     * @param string $lacslinkIndicator The LACSLink indication.
     *
     */
    private function setLacslinkIndicator($lacslinkIndicator)
    {
        $this->lacslinkIndicator = $lacslinkIndicator;
    }

    /**
     *
     * Set the indicator of whether there was a SuiteLink match.
     *
     * @param boolean $suitelinkMatch The indicator of whether there was a SuiteLink match.
     *
     */
    private function setSuitelinkMatch($suitelinkMatch)
    {
        $this->suitelinkMatch = $suitelinkMatch;
    }
}
