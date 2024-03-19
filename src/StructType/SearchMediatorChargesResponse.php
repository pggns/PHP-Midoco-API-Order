<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMediatorChargesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchMediatorChargesResponse extends AbstractStructBase
{
    /**
     * The MidocoMediatorCharge
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMediatorCharge
     * @var \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO[]
     */
    protected ?array $MidocoMediatorCharge = null;
    /**
     * Constructor method for SearchMediatorChargesResponse
     * @uses SearchMediatorChargesResponse::setMidocoMediatorCharge()
     * @param \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO[] $midocoMediatorCharge
     */
    public function __construct(?array $midocoMediatorCharge = null)
    {
        $this
            ->setMidocoMediatorCharge($midocoMediatorCharge);
    }
    /**
     * Get MidocoMediatorCharge value
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO[]
     */
    public function getMidocoMediatorCharge(): ?array
    {
        return $this->MidocoMediatorCharge;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMediatorCharge method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMediatorCharge method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMediatorChargeForArrayConstraintFromSetMidocoMediatorCharge(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchMediatorChargesResponseMidocoMediatorChargeItem) {
            // validation for constraint: itemType
            if (!$searchMediatorChargesResponseMidocoMediatorChargeItem instanceof \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO) {
                $invalidValues[] = is_object($searchMediatorChargesResponseMidocoMediatorChargeItem) ? get_class($searchMediatorChargesResponseMidocoMediatorChargeItem) : sprintf('%s(%s)', gettype($searchMediatorChargesResponseMidocoMediatorChargeItem), var_export($searchMediatorChargesResponseMidocoMediatorChargeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMediatorCharge property can only contain items of type \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMediatorCharge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO[] $midocoMediatorCharge
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorChargesResponse
     */
    public function setMidocoMediatorCharge(?array $midocoMediatorCharge = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMediatorChargeArrayErrorMessage = self::validateMidocoMediatorChargeForArrayConstraintFromSetMidocoMediatorCharge($midocoMediatorCharge))) {
            throw new InvalidArgumentException($midocoMediatorChargeArrayErrorMessage, __LINE__);
        }
        $this->MidocoMediatorCharge = $midocoMediatorCharge;
        
        return $this;
    }
    /**
     * Add item to MidocoMediatorCharge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorChargesResponse
     */
    public function addToMidocoMediatorCharge(\Pggns\MidocoApi\Order\StructType\MediatorChargeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMediatorCharge property can only contain items of type \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMediatorCharge[] = $item;
        
        return $this;
    }
}
