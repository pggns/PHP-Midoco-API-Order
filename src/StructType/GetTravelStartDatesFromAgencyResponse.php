<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelStartDatesFromAgencyResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: returns a list of travel start dates from an agency
 * @subpackage Structs
 */
class GetTravelStartDatesFromAgencyResponse extends AbstractStructBase
{
    /**
     * The startTravelDate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $startTravelDate = [];
    /**
     * Constructor method for GetTravelStartDatesFromAgencyResponse
     * @uses GetTravelStartDatesFromAgencyResponse::setStartTravelDate()
     * @param string[] $startTravelDate
     */
    public function __construct(array $startTravelDate = [])
    {
        $this
            ->setStartTravelDate($startTravelDate);
    }
    /**
     * Get startTravelDate value
     * @return string[]
     */
    public function getStartTravelDate(): array
    {
        return $this->startTravelDate;
    }
    /**
     * This method is responsible for validating the values passed to the setStartTravelDate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStartTravelDate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStartTravelDateForArrayConstraintsFromSetStartTravelDate(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTravelStartDatesFromAgencyResponseStartTravelDateItem) {
            // validation for constraint: itemType
            if (!is_string($getTravelStartDatesFromAgencyResponseStartTravelDateItem)) {
                $invalidValues[] = is_object($getTravelStartDatesFromAgencyResponseStartTravelDateItem) ? get_class($getTravelStartDatesFromAgencyResponseStartTravelDateItem) : sprintf('%s(%s)', gettype($getTravelStartDatesFromAgencyResponseStartTravelDateItem), var_export($getTravelStartDatesFromAgencyResponseStartTravelDateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The startTravelDate property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set startTravelDate value
     * @throws InvalidArgumentException
     * @param string[] $startTravelDate
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelStartDatesFromAgencyResponse
     */
    public function setStartTravelDate(array $startTravelDate = []): self
    {
        // validation for constraint: array
        if ('' !== ($startTravelDateArrayErrorMessage = self::validateStartTravelDateForArrayConstraintsFromSetStartTravelDate($startTravelDate))) {
            throw new InvalidArgumentException($startTravelDateArrayErrorMessage, __LINE__);
        }
        $this->startTravelDate = $startTravelDate;
        
        return $this;
    }
    /**
     * Add item to startTravelDate value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelStartDatesFromAgencyResponse
     */
    public function addToStartTravelDate(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The startTravelDate property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->startTravelDate[] = $item;
        
        return $this;
    }
}
