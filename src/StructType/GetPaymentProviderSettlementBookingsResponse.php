<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPaymentProviderSettlementBookingsResponse StructType
 * @subpackage Structs
 */
class GetPaymentProviderSettlementBookingsResponse extends AbstractStructBase
{
    /**
     * The MidocoPaymentProviderSettlBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPaymentProviderSettlBooking
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType[]
     */
    protected array $MidocoPaymentProviderSettlBooking = [];
    /**
     * The MidocoPaymentProviderSettlBookingSums
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType $MidocoPaymentProviderSettlBookingSums = null;
    /**
     * The checkSum
     * @var float|null
     */
    protected ?float $checkSum = null;
    /**
     * Constructor method for GetPaymentProviderSettlementBookingsResponse
     * @uses GetPaymentProviderSettlementBookingsResponse::setMidocoPaymentProviderSettlBooking()
     * @uses GetPaymentProviderSettlementBookingsResponse::setMidocoPaymentProviderSettlBookingSums()
     * @uses GetPaymentProviderSettlementBookingsResponse::setCheckSum()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType[] $midocoPaymentProviderSettlBooking
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType $midocoPaymentProviderSettlBookingSums
     * @param float $checkSum
     */
    public function __construct(array $midocoPaymentProviderSettlBooking = [], ?\Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType $midocoPaymentProviderSettlBookingSums = null, ?float $checkSum = null)
    {
        $this
            ->setMidocoPaymentProviderSettlBooking($midocoPaymentProviderSettlBooking)
            ->setMidocoPaymentProviderSettlBookingSums($midocoPaymentProviderSettlBookingSums)
            ->setCheckSum($checkSum);
    }
    /**
     * Get MidocoPaymentProviderSettlBooking value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType[]
     */
    public function getMidocoPaymentProviderSettlBooking(): array
    {
        return $this->MidocoPaymentProviderSettlBooking;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPaymentProviderSettlBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPaymentProviderSettlBooking method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPaymentProviderSettlBookingForArrayConstraintsFromSetMidocoPaymentProviderSettlBooking(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPaymentProviderSettlementBookingsResponseMidocoPaymentProviderSettlBookingItem) {
            // validation for constraint: itemType
            if (!$getPaymentProviderSettlementBookingsResponseMidocoPaymentProviderSettlBookingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType) {
                $invalidValues[] = is_object($getPaymentProviderSettlementBookingsResponseMidocoPaymentProviderSettlBookingItem) ? get_class($getPaymentProviderSettlementBookingsResponseMidocoPaymentProviderSettlBookingItem) : sprintf('%s(%s)', gettype($getPaymentProviderSettlementBookingsResponseMidocoPaymentProviderSettlBookingItem), var_export($getPaymentProviderSettlementBookingsResponseMidocoPaymentProviderSettlBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPaymentProviderSettlBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPaymentProviderSettlBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType[] $midocoPaymentProviderSettlBooking
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentProviderSettlementBookingsResponse
     */
    public function setMidocoPaymentProviderSettlBooking(array $midocoPaymentProviderSettlBooking = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPaymentProviderSettlBookingArrayErrorMessage = self::validateMidocoPaymentProviderSettlBookingForArrayConstraintsFromSetMidocoPaymentProviderSettlBooking($midocoPaymentProviderSettlBooking))) {
            throw new InvalidArgumentException($midocoPaymentProviderSettlBookingArrayErrorMessage, __LINE__);
        }
        $this->MidocoPaymentProviderSettlBooking = $midocoPaymentProviderSettlBooking;
        
        return $this;
    }
    /**
     * Add item to MidocoPaymentProviderSettlBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentProviderSettlementBookingsResponse
     */
    public function addToMidocoPaymentProviderSettlBooking(\Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType) {
            throw new InvalidArgumentException(sprintf('The MidocoPaymentProviderSettlBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPaymentProviderSettlBooking[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoPaymentProviderSettlBookingSums value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType|null
     */
    public function getMidocoPaymentProviderSettlBookingSums(): ?\Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType
    {
        return $this->MidocoPaymentProviderSettlBookingSums;
    }
    /**
     * Set MidocoPaymentProviderSettlBookingSums value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType $midocoPaymentProviderSettlBookingSums
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentProviderSettlementBookingsResponse
     */
    public function setMidocoPaymentProviderSettlBookingSums(?\Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType $midocoPaymentProviderSettlBookingSums = null): self
    {
        $this->MidocoPaymentProviderSettlBookingSums = $midocoPaymentProviderSettlBookingSums;
        
        return $this;
    }
    /**
     * Get checkSum value
     * @return float|null
     */
    public function getCheckSum(): ?float
    {
        return $this->checkSum;
    }
    /**
     * Set checkSum value
     * @param float $checkSum
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentProviderSettlementBookingsResponse
     */
    public function setCheckSum(?float $checkSum = null): self
    {
        // validation for constraint: float
        if (!is_null($checkSum) && !(is_float($checkSum) || is_numeric($checkSum))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($checkSum, true), gettype($checkSum)), __LINE__);
        }
        $this->checkSum = $checkSum;
        
        return $this;
    }
}
