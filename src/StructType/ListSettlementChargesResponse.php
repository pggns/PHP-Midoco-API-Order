<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListSettlementChargesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListSettlementChargesResponse extends AbstractStructBase
{
    /**
     * The MidocoSettlementCharge
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSettlementCharge
     * @var \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO[]
     */
    protected ?array $MidocoSettlementCharge = null;
    /**
     * Constructor method for ListSettlementChargesResponse
     * @uses ListSettlementChargesResponse::setMidocoSettlementCharge()
     * @param \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO[] $midocoSettlementCharge
     */
    public function __construct(?array $midocoSettlementCharge = null)
    {
        $this
            ->setMidocoSettlementCharge($midocoSettlementCharge);
    }
    /**
     * Get MidocoSettlementCharge value
     * @return \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO[]
     */
    public function getMidocoSettlementCharge(): ?array
    {
        return $this->MidocoSettlementCharge;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSettlementCharge method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSettlementCharge method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSettlementChargeForArrayConstraintFromSetMidocoSettlementCharge(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listSettlementChargesResponseMidocoSettlementChargeItem) {
            // validation for constraint: itemType
            if (!$listSettlementChargesResponseMidocoSettlementChargeItem instanceof \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO) {
                $invalidValues[] = is_object($listSettlementChargesResponseMidocoSettlementChargeItem) ? get_class($listSettlementChargesResponseMidocoSettlementChargeItem) : sprintf('%s(%s)', gettype($listSettlementChargesResponseMidocoSettlementChargeItem), var_export($listSettlementChargesResponseMidocoSettlementChargeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSettlementCharge property can only contain items of type \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSettlementCharge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO[] $midocoSettlementCharge
     * @return \Pggns\MidocoApi\Order\StructType\ListSettlementChargesResponse
     */
    public function setMidocoSettlementCharge(?array $midocoSettlementCharge = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSettlementChargeArrayErrorMessage = self::validateMidocoSettlementChargeForArrayConstraintFromSetMidocoSettlementCharge($midocoSettlementCharge))) {
            throw new InvalidArgumentException($midocoSettlementChargeArrayErrorMessage, __LINE__);
        }
        $this->MidocoSettlementCharge = $midocoSettlementCharge;
        
        return $this;
    }
    /**
     * Add item to MidocoSettlementCharge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\ListSettlementChargesResponse
     */
    public function addToMidocoSettlementCharge(\Pggns\MidocoApi\Order\StructType\SettlementChargeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSettlementCharge property can only contain items of type \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSettlementCharge[] = $item;
        
        return $this;
    }
}
