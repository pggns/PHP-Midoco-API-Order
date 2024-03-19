<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierAgencySettlementBookingsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSupplierAgencySettlementBookingsResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencySettlementBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierAgencySettlementBooking
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking[]
     */
    protected ?array $MidocoSupplierAgencySettlementBooking = null;
    /**
     * The CheckSum
     * @var float|null
     */
    protected ?float $CheckSum = null;
    /**
     * Constructor method for GetSupplierAgencySettlementBookingsResponse
     * @uses GetSupplierAgencySettlementBookingsResponse::setMidocoSupplierAgencySettlementBooking()
     * @uses GetSupplierAgencySettlementBookingsResponse::setCheckSum()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking[] $midocoSupplierAgencySettlementBooking
     * @param float $checkSum
     */
    public function __construct(?array $midocoSupplierAgencySettlementBooking = null, ?float $checkSum = null)
    {
        $this
            ->setMidocoSupplierAgencySettlementBooking($midocoSupplierAgencySettlementBooking)
            ->setCheckSum($checkSum);
    }
    /**
     * Get MidocoSupplierAgencySettlementBooking value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking[]
     */
    public function getMidocoSupplierAgencySettlementBooking(): ?array
    {
        return $this->MidocoSupplierAgencySettlementBooking;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplierAgencySettlementBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierAgencySettlementBooking method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierAgencySettlementBookingForArrayConstraintFromSetMidocoSupplierAgencySettlementBooking(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierAgencySettlementBookingsResponseMidocoSupplierAgencySettlementBookingItem) {
            // validation for constraint: itemType
            if (!$getSupplierAgencySettlementBookingsResponseMidocoSupplierAgencySettlementBookingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking) {
                $invalidValues[] = is_object($getSupplierAgencySettlementBookingsResponseMidocoSupplierAgencySettlementBookingItem) ? get_class($getSupplierAgencySettlementBookingsResponseMidocoSupplierAgencySettlementBookingItem) : sprintf('%s(%s)', gettype($getSupplierAgencySettlementBookingsResponseMidocoSupplierAgencySettlementBookingItem), var_export($getSupplierAgencySettlementBookingsResponseMidocoSupplierAgencySettlementBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierAgencySettlementBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierAgencySettlementBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking[] $midocoSupplierAgencySettlementBooking
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAgencySettlementBookingsResponse
     */
    public function setMidocoSupplierAgencySettlementBooking(?array $midocoSupplierAgencySettlementBooking = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierAgencySettlementBookingArrayErrorMessage = self::validateMidocoSupplierAgencySettlementBookingForArrayConstraintFromSetMidocoSupplierAgencySettlementBooking($midocoSupplierAgencySettlementBooking))) {
            throw new InvalidArgumentException($midocoSupplierAgencySettlementBookingArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierAgencySettlementBooking = $midocoSupplierAgencySettlementBooking;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierAgencySettlementBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAgencySettlementBookingsResponse
     */
    public function addToMidocoSupplierAgencySettlementBooking(\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierAgencySettlementBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierAgencySettlementBooking[] = $item;
        
        return $this;
    }
    /**
     * Get CheckSum value
     * @return float|null
     */
    public function getCheckSum(): ?float
    {
        return $this->CheckSum;
    }
    /**
     * Set CheckSum value
     * @param float $checkSum
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAgencySettlementBookingsResponse
     */
    public function setCheckSum(?float $checkSum = null): self
    {
        // validation for constraint: float
        if (!is_null($checkSum) && !(is_float($checkSum) || is_numeric($checkSum))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($checkSum, true), gettype($checkSum)), __LINE__);
        }
        $this->CheckSum = $checkSum;
        
        return $this;
    }
}
