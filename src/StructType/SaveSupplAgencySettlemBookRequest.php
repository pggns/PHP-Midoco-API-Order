<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplAgencySettlemBookRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplAgencySettlemBookRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencySettlementBooking
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAgencySettlementBooking
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking $MidocoSupplierAgencySettlementBooking = null;
    /**
     * The MidocoSupplierAgencySettlementBookings
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierAgencySettlementBookings
     * @var \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO[]
     */
    protected ?array $MidocoSupplierAgencySettlementBookings = null;
    /**
     * Constructor method for SaveSupplAgencySettlemBookRequest
     * @uses SaveSupplAgencySettlemBookRequest::setMidocoSupplierAgencySettlementBooking()
     * @uses SaveSupplAgencySettlemBookRequest::setMidocoSupplierAgencySettlementBookings()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking $midocoSupplierAgencySettlementBooking
     * @param \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO[] $midocoSupplierAgencySettlementBookings
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking $midocoSupplierAgencySettlementBooking = null, ?array $midocoSupplierAgencySettlementBookings = null)
    {
        $this
            ->setMidocoSupplierAgencySettlementBooking($midocoSupplierAgencySettlementBooking)
            ->setMidocoSupplierAgencySettlementBookings($midocoSupplierAgencySettlementBookings);
    }
    /**
     * Get MidocoSupplierAgencySettlementBooking value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking|null
     */
    public function getMidocoSupplierAgencySettlementBooking(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking
    {
        return $this->MidocoSupplierAgencySettlementBooking;
    }
    /**
     * Set MidocoSupplierAgencySettlementBooking value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking $midocoSupplierAgencySettlementBooking
     * @return \Pggns\MidocoApi\Order\StructType\SaveSupplAgencySettlemBookRequest
     */
    public function setMidocoSupplierAgencySettlementBooking(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking $midocoSupplierAgencySettlementBooking = null): self
    {
        $this->MidocoSupplierAgencySettlementBooking = $midocoSupplierAgencySettlementBooking;
        
        return $this;
    }
    /**
     * Get MidocoSupplierAgencySettlementBookings value
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO[]
     */
    public function getMidocoSupplierAgencySettlementBookings(): ?array
    {
        return $this->MidocoSupplierAgencySettlementBookings;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplierAgencySettlementBookings method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierAgencySettlementBookings method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierAgencySettlementBookingsForArrayConstraintFromSetMidocoSupplierAgencySettlementBookings(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveSupplAgencySettlemBookRequestMidocoSupplierAgencySettlementBookingsItem) {
            // validation for constraint: itemType
            if (!$saveSupplAgencySettlemBookRequestMidocoSupplierAgencySettlementBookingsItem instanceof \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO) {
                $invalidValues[] = is_object($saveSupplAgencySettlemBookRequestMidocoSupplierAgencySettlementBookingsItem) ? get_class($saveSupplAgencySettlemBookRequestMidocoSupplierAgencySettlementBookingsItem) : sprintf('%s(%s)', gettype($saveSupplAgencySettlemBookRequestMidocoSupplierAgencySettlementBookingsItem), var_export($saveSupplAgencySettlemBookRequestMidocoSupplierAgencySettlementBookingsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierAgencySettlementBookings property can only contain items of type \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierAgencySettlementBookings value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO[] $midocoSupplierAgencySettlementBookings
     * @return \Pggns\MidocoApi\Order\StructType\SaveSupplAgencySettlemBookRequest
     */
    public function setMidocoSupplierAgencySettlementBookings(?array $midocoSupplierAgencySettlementBookings = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierAgencySettlementBookingsArrayErrorMessage = self::validateMidocoSupplierAgencySettlementBookingsForArrayConstraintFromSetMidocoSupplierAgencySettlementBookings($midocoSupplierAgencySettlementBookings))) {
            throw new InvalidArgumentException($midocoSupplierAgencySettlementBookingsArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierAgencySettlementBookings = $midocoSupplierAgencySettlementBookings;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierAgencySettlementBookings value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveSupplAgencySettlemBookRequest
     */
    public function addToMidocoSupplierAgencySettlementBookings(\Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierAgencySettlementBookings property can only contain items of type \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierAgencySettlementBookings[] = $item;
        
        return $this;
    }
}
