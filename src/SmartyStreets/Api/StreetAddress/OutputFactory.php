<?php
namespace SmartyStreets\Api\StreetAddress;

/**
 *
 * Factory to turn the json response into an object representation.
 *
 * @package SmartyStreets\Api\StreetAddress
 *
 */
class OutputFactory
{
    /**
     *
     * Create the output.
     *
     * @param array $response The array representation of the json response.
     *
     * @return AddressOutput The output object.
     *
     */
    public function newOutput(array $response)
    {
        $inputId =
            (isset($response['input_id'])) ? $response['input_id'] : null;
        $inputIndex =
            (isset($response['input_index'])) ? $response['input_index'] : null;
        $candidateIndex =
            (isset($response['candidate_index'])) ? $response['candidate_index'] : null;
        $addressee =
            (isset($response['addressee'])) ? $response['addressee'] : null;
        $deliveryLine1 =
            (isset($response['delivery_line_1'])) ? $response['delivery_line_1'] : null;
        $deliveryLine2 =
            (isset($response['delivery_line_2'])) ? $response['delivery_line_2'] : null;
        $lastLine =
            (isset($response['last_line'])) ? $response['last_line'] : null;
        $deliveryPointBarcode =
            (isset($response['delivery_point_barcode'])) ? $response['delivery_point_barcode'] : null;
        $components =
            $this->newComponents((isset($response['components'])) ? $response['components'] : null);
        $metadata =
            $this->newMetadata((isset($response['metadata'])) ? $response['metadata'] : null);
        $analysis =
            $this->newAnalysis((isset($response['analysis'])) ? $response['analysis'] : null);
        $output = new AddressOutput(
            $inputId,
            $inputIndex,
            $candidateIndex,
            $addressee,
            $deliveryLine1,
            $deliveryLine2,
            $lastLine,
            $deliveryPointBarcode,
            $components,
            $metadata,
            $analysis
        );

        return $output;
    }

    /**
     *
     * Create the component part of the output.
     *
     * @param array $response The array representation of the json response.
     *
     * @return Components The component output.
     *
     */
    private function newComponents(array $response)
    {
        $components = null;

        if ($response) {
            $urbanization =
                (isset($response['urbanization'])) ? $response['urbanization'] : null;
            $primaryNumber =
                (isset($response['primary_number'])) ? $response['primary_number']: null;
            $streetName =
                (isset($response['street_name'])) ? $response['street_name'] : null;
            $streetPreDirection =
                (isset($response['street_pre_direction'])) ? $response['street_pre_direction'] : null;
            $streetPostDirection =
                (isset($response['street_post_direction'])) ? $response['street_post_direction'] : null;
            $streetSuffix =
                (isset($response['street_suffix'])) ? $response['street_suffix'] : null;
            $secondaryNumber =
                (isset($response['secondary_number'])) ? $response['secondary_number'] : null;
            $secondaryDesignator =
                (isset($response['secondary_designator'])) ? $response['secondary_designator'] : null;
            $extraSecondaryNumber =
                (isset($response['extra_secondary_number'])) ? $response['extra_secondary_number'] : null;
            $extraSecondaryDesignator =
                (isset($response['extra_secondary_designator'])) ? $response['extra_secondary_designator'] : null;
            $pmbDesignator =
                (isset($response['pmb_designator'])) ? $response['pmb_designator'] : null;
            $pmbNumber =
                (isset($response['pmb_number'])) ? $response['pmb_number'] : null;
            $cityName =
                (isset($response['city_name'])) ? $response['city_name'] : null;
            $defaultCityName =
                (isset($response['default_city_name'])) ? $response['default_city_name'] : null;
            $stateAbbreviation =
                (isset($response['state_abbreviation'])) ? $response['state_abbreviation'] : null;
            $zipCode =
                (isset($response['zipcode'])) ? $response['zipcode'] : null;
            $plus4Code =
                (isset($response['plus4_code'])) ? $response['plus4_code'] : null;
            $deliveryPoint =
                (isset($response['delivery_point'])) ? $response['delivery_point'] : null;
            $deliveryPointCheckDigit =
                (isset($response['delivery_point_check_digit'])) ? $response['delivery_point_check_digit'] : null;
            $components = new Components(
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
            );
        }

        return $components;
    }

    /**
     *
     * Create the metadata part of the output.
     *
     * @param array $response The array representation of the json response.
     *
     * @return Metadata The metadata output.
     *
     */
    private function newMetadata(array $response)
    {
        $recordType =
            (isset($response['record_type'])) ? $response['record_type'] : null;
        $zipType =
            (isset($response['zip_type'])) ? $response['zip_type'] : null;
        $countyFips =
            (isset($response['county_fips'])) ? $response['county_fips'] : null;
        $countyName =
            (isset($response['county_name'])) ? $response['county_name'] : null;
        $carrierRoute =
            (isset($response['carrier_route'])) ? $response['carrier_route'] : null;
        $congressionalDistrict =
            (isset($response['congressional_district'])) ? $response['congressional_district'] : null;
        $buildingDefaultIndicator =
            (isset($response['building_default_indicator'])) ? $response['building_default_indicator'] : null;
        $rdi =
            (isset($response['rdi'])) ? $response['rdi'] : null;
        $elotSequence =
            (isset($response['elot_sequence'])) ? $response['elot_sequence'] : null;
        $elotSort =
            (isset($response['elot_sort'])) ? $response['elot_sort'] : null;
        $latitude =
            (isset($response['latitude'])) ? $response['latitude'] : null;
        $longitude =
            (isset($response['longitude'])) ? $response['longitude'] : null;
        $precision =
            (isset($response['precision'])) ? $response['precision'] : null;
        $timeZone =
            (isset($response['time_zone'])) ? $response['time_zone'] : null;
        $utcOffset =
            (isset($response['utc_offset'])) ? $response['utc_offset'] : null;
        $dst =
            (isset($response['dst'])) ? $response['dst'] : null;
        $metadata = new Metadata(
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
        );

        return $metadata;
    }

    /**
     *
     * Create the analysis part of the output.
     *
     * @param array $response The array representation of the json response.
     *
     * @return Analysis The analysis output.
     *
     */
    private function newAnalysis(array $response)
    {
        $dpvMatchCode =
            (isset($response['dpv_match_code'])) ? $response['dpv_match_code'] : null;
        $dpvFootnotes =
            (isset($response['dpv_footnotes'])) ? $response['dpv_footnotes'] : null;
        $dpvCmra =
            (isset($response['dpv_cmra'])) ? $response['dpv_cmra'] : null;
        $dpvCmra = ($dpvCmra === 'Y') ? true : (($dpvCmra === 'N') ? false : null);
        $dpvVacant =
            (isset($response['dpv_vacant'])) ? $response['dpv_vacant'] : null;
        $dpvVacant = ($dpvVacant === 'Y') ? true : (($dpvVacant === 'N') ? false : null);
        $active =
            (isset($response['active'])) ? $response['active'] : null;
        $active = ($active === 'Y') ? true : (($active === 'N') ? false : null);
        $ewsMatch =
            (isset($response['ews_match'])) ? $response['ews_match'] : null;
        $ewsMatch = ($ewsMatch === true) ? true : null;
        $footnotes = array();
        if (isset($response['footnotes'])) {
            foreach (explode('#', $response['footnotes']) as $footnote) {
                if ($footnote) {
                    $footnotes[] = $footnote . '#';
                }
            }
        }
        $lacslinkCode =
            (isset($response['lacslink_code'])) ? $response['lacslink_code'] : null;
        $lacslinkIndicator =
            (isset($response['lacslink_indicator'])) ? $response['lacslink_indicator'] : null;
        $suitelinkMatch =
            (isset($response['suitelink_match'])) ? $response['suitelink_match'] : null;
        $suitelinkMatch = ($suitelinkMatch === true) ? true : (($suitelinkMatch === false) ? false : null);
        $analysis = new Analysis(
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
        );

        return $analysis;
    }
}
