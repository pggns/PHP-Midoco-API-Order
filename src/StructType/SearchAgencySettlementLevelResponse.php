<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAgencySettlementLevelResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchAgencySettlementLevelResponse extends AbstractStructBase
{
    /**
     * The MidocoAgencySettlementLevelBilling
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAgencySettlementLevelBilling
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelBilling[]
     */
    protected ?array $MidocoAgencySettlementLevelBilling = null;
    /**
     * Constructor method for SearchAgencySettlementLevelResponse
     * @uses SearchAgencySettlementLevelResponse::setMidocoAgencySettlementLevelBilling()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelBilling[] $midocoAgencySettlementLevelBilling
     */
    public function __construct(?array $midocoAgencySettlementLevelBilling = null)
    {
        $this
            ->setMidocoAgencySettlementLevelBilling($midocoAgencySettlementLevelBilling);
    }
    /**
     * Get MidocoAgencySettlementLevelBilling value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelBilling[]
     */
    public function getMidocoAgencySettlementLevelBilling(): ?array
    {
        return $this->MidocoAgencySettlementLevelBilling;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAgencySettlementLevelBilling method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAgencySettlementLevelBilling method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAgencySettlementLevelBillingForArrayConstraintFromSetMidocoAgencySettlementLevelBilling(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchAgencySettlementLevelResponseMidocoAgencySettlementLevelBillingItem) {
            // validation for constraint: itemType
            if (!$searchAgencySettlementLevelResponseMidocoAgencySettlementLevelBillingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelBilling) {
                $invalidValues[] = is_object($searchAgencySettlementLevelResponseMidocoAgencySettlementLevelBillingItem) ? get_class($searchAgencySettlementLevelResponseMidocoAgencySettlementLevelBillingItem) : sprintf('%s(%s)', gettype($searchAgencySettlementLevelResponseMidocoAgencySettlementLevelBillingItem), var_export($searchAgencySettlementLevelResponseMidocoAgencySettlementLevelBillingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAgencySettlementLevelBilling property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelBilling, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAgencySettlementLevelBilling value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelBilling[] $midocoAgencySettlementLevelBilling
     * @return \Pggns\MidocoApi\Order\StructType\SearchAgencySettlementLevelResponse
     */
    public function setMidocoAgencySettlementLevelBilling(?array $midocoAgencySettlementLevelBilling = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAgencySettlementLevelBillingArrayErrorMessage = self::validateMidocoAgencySettlementLevelBillingForArrayConstraintFromSetMidocoAgencySettlementLevelBilling($midocoAgencySettlementLevelBilling))) {
            throw new InvalidArgumentException($midocoAgencySettlementLevelBillingArrayErrorMessage, __LINE__);
        }
        $this->MidocoAgencySettlementLevelBilling = $midocoAgencySettlementLevelBilling;
        
        return $this;
    }
    /**
     * Add item to MidocoAgencySettlementLevelBilling value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelBilling $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchAgencySettlementLevelResponse
     */
    public function addToMidocoAgencySettlementLevelBilling(\Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelBilling $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelBilling) {
            throw new InvalidArgumentException(sprintf('The MidocoAgencySettlementLevelBilling property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelBilling, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAgencySettlementLevelBilling[] = $item;
        
        return $this;
    }
}
