<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportSettlementOverviewRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExportSettlementOverviewRequest extends AbstractStructBase
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
     * The exportAs
     * Meta information extracted from the WSDL
     * - default: CSV
     * @var string|null
     */
    protected ?string $exportAs = null;
    /**
     * Constructor method for ExportSettlementOverviewRequest
     * @uses ExportSettlementOverviewRequest::setMidocoSupplierAgencySettlementBooking()
     * @uses ExportSettlementOverviewRequest::setExportAs()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking[] $midocoSupplierAgencySettlementBooking
     * @param string $exportAs
     */
    public function __construct(?array $midocoSupplierAgencySettlementBooking = null, ?string $exportAs = 'CSV')
    {
        $this
            ->setMidocoSupplierAgencySettlementBooking($midocoSupplierAgencySettlementBooking)
            ->setExportAs($exportAs);
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
        foreach ($values as $exportSettlementOverviewRequestMidocoSupplierAgencySettlementBookingItem) {
            // validation for constraint: itemType
            if (!$exportSettlementOverviewRequestMidocoSupplierAgencySettlementBookingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking) {
                $invalidValues[] = is_object($exportSettlementOverviewRequestMidocoSupplierAgencySettlementBookingItem) ? get_class($exportSettlementOverviewRequestMidocoSupplierAgencySettlementBookingItem) : sprintf('%s(%s)', gettype($exportSettlementOverviewRequestMidocoSupplierAgencySettlementBookingItem), var_export($exportSettlementOverviewRequestMidocoSupplierAgencySettlementBookingItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportSettlementOverviewRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportSettlementOverviewRequest
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
     * Get exportAs value
     * @return string|null
     */
    public function getExportAs(): ?string
    {
        return $this->exportAs;
    }
    /**
     * Set exportAs value
     * @param string $exportAs
     * @return \Pggns\MidocoApi\Order\StructType\ExportSettlementOverviewRequest
     */
    public function setExportAs(?string $exportAs = 'CSV'): self
    {
        // validation for constraint: string
        if (!is_null($exportAs) && !is_string($exportAs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportAs, true), gettype($exportAs)), __LINE__);
        }
        $this->exportAs = $exportAs;
        
        return $this;
    }
}
