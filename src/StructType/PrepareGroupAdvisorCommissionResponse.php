<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareGroupAdvisorCommissionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrepareGroupAdvisorCommissionResponse extends AbstractStructBase
{
    /**
     * The GroupAdvisorSettlement
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: GroupAdvisorSettlement
     * @var \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement[]
     */
    protected ?array $GroupAdvisorSettlement = null;
    /**
     * Constructor method for PrepareGroupAdvisorCommissionResponse
     * @uses PrepareGroupAdvisorCommissionResponse::setGroupAdvisorSettlement()
     * @param \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement[] $groupAdvisorSettlement
     */
    public function __construct(?array $groupAdvisorSettlement = null)
    {
        $this
            ->setGroupAdvisorSettlement($groupAdvisorSettlement);
    }
    /**
     * Get GroupAdvisorSettlement value
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement[]
     */
    public function getGroupAdvisorSettlement(): ?array
    {
        return $this->GroupAdvisorSettlement;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setGroupAdvisorSettlement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupAdvisorSettlement method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroupAdvisorSettlementForArrayConstraintFromSetGroupAdvisorSettlement(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $prepareGroupAdvisorCommissionResponseGroupAdvisorSettlementItem) {
            // validation for constraint: itemType
            if (!$prepareGroupAdvisorCommissionResponseGroupAdvisorSettlementItem instanceof \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement) {
                $invalidValues[] = is_object($prepareGroupAdvisorCommissionResponseGroupAdvisorSettlementItem) ? get_class($prepareGroupAdvisorCommissionResponseGroupAdvisorSettlementItem) : sprintf('%s(%s)', gettype($prepareGroupAdvisorCommissionResponseGroupAdvisorSettlementItem), var_export($prepareGroupAdvisorCommissionResponseGroupAdvisorSettlementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GroupAdvisorSettlement property can only contain items of type \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GroupAdvisorSettlement value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement[] $groupAdvisorSettlement
     * @return \Pggns\MidocoApi\Order\StructType\PrepareGroupAdvisorCommissionResponse
     */
    public function setGroupAdvisorSettlement(?array $groupAdvisorSettlement = null): self
    {
        // validation for constraint: array
        if ('' !== ($groupAdvisorSettlementArrayErrorMessage = self::validateGroupAdvisorSettlementForArrayConstraintFromSetGroupAdvisorSettlement($groupAdvisorSettlement))) {
            throw new InvalidArgumentException($groupAdvisorSettlementArrayErrorMessage, __LINE__);
        }
        $this->GroupAdvisorSettlement = $groupAdvisorSettlement;
        
        return $this;
    }
    /**
     * Add item to GroupAdvisorSettlement value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement $item
     * @return \Pggns\MidocoApi\Order\StructType\PrepareGroupAdvisorCommissionResponse
     */
    public function addToGroupAdvisorSettlement(\Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement) {
            throw new InvalidArgumentException(sprintf('The GroupAdvisorSettlement property can only contain items of type \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->GroupAdvisorSettlement[] = $item;
        
        return $this;
    }
}
