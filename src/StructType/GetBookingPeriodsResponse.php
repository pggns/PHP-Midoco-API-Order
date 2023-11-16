<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingPeriodsResponse StructType
 * @subpackage Structs
 */
class GetBookingPeriodsResponse extends AbstractStructBase
{
    /**
     * The MidocoCompleteBookingPeriod
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCompleteBookingPeriod
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCompleteBookingPeriod[]
     */
    protected array $MidocoCompleteBookingPeriod = [];
    /**
     * Constructor method for GetBookingPeriodsResponse
     * @uses GetBookingPeriodsResponse::setMidocoCompleteBookingPeriod()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCompleteBookingPeriod[] $midocoCompleteBookingPeriod
     */
    public function __construct(array $midocoCompleteBookingPeriod = [])
    {
        $this
            ->setMidocoCompleteBookingPeriod($midocoCompleteBookingPeriod);
    }
    /**
     * Get MidocoCompleteBookingPeriod value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCompleteBookingPeriod[]
     */
    public function getMidocoCompleteBookingPeriod(): array
    {
        return $this->MidocoCompleteBookingPeriod;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCompleteBookingPeriod method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCompleteBookingPeriod method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCompleteBookingPeriodForArrayConstraintsFromSetMidocoCompleteBookingPeriod(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBookingPeriodsResponseMidocoCompleteBookingPeriodItem) {
            // validation for constraint: itemType
            if (!$getBookingPeriodsResponseMidocoCompleteBookingPeriodItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCompleteBookingPeriod) {
                $invalidValues[] = is_object($getBookingPeriodsResponseMidocoCompleteBookingPeriodItem) ? get_class($getBookingPeriodsResponseMidocoCompleteBookingPeriodItem) : sprintf('%s(%s)', gettype($getBookingPeriodsResponseMidocoCompleteBookingPeriodItem), var_export($getBookingPeriodsResponseMidocoCompleteBookingPeriodItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCompleteBookingPeriod property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCompleteBookingPeriod, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCompleteBookingPeriod value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCompleteBookingPeriod[] $midocoCompleteBookingPeriod
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingPeriodsResponse
     */
    public function setMidocoCompleteBookingPeriod(array $midocoCompleteBookingPeriod = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCompleteBookingPeriodArrayErrorMessage = self::validateMidocoCompleteBookingPeriodForArrayConstraintsFromSetMidocoCompleteBookingPeriod($midocoCompleteBookingPeriod))) {
            throw new InvalidArgumentException($midocoCompleteBookingPeriodArrayErrorMessage, __LINE__);
        }
        $this->MidocoCompleteBookingPeriod = $midocoCompleteBookingPeriod;
        
        return $this;
    }
    /**
     * Add item to MidocoCompleteBookingPeriod value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCompleteBookingPeriod $item
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingPeriodsResponse
     */
    public function addToMidocoCompleteBookingPeriod(\Pggns\MidocoApi\Order\StructType\MidocoCompleteBookingPeriod $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCompleteBookingPeriod) {
            throw new InvalidArgumentException(sprintf('The MidocoCompleteBookingPeriod property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCompleteBookingPeriod, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCompleteBookingPeriod[] = $item;
        
        return $this;
    }
}
