<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteGroupAdvisorSettlementResponse StructType
 * @subpackage Structs
 */
class ExecuteGroupAdvisorSettlementResponse extends AbstractStructBase
{
    /**
     * The GroupAdvisorSettlement
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: GroupAdvisorSettlement
     * @var \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement[]
     */
    protected array $GroupAdvisorSettlement = [];
    /**
     * The MediatorError
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MediatorError
     * @var \Pggns\MidocoApi\Order\StructType\MediatorErrorType[]
     */
    protected array $MediatorError = [];
    /**
     * Constructor method for ExecuteGroupAdvisorSettlementResponse
     * @uses ExecuteGroupAdvisorSettlementResponse::setGroupAdvisorSettlement()
     * @uses ExecuteGroupAdvisorSettlementResponse::setMediatorError()
     * @param \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement[] $groupAdvisorSettlement
     * @param \Pggns\MidocoApi\Order\StructType\MediatorErrorType[] $mediatorError
     */
    public function __construct(array $groupAdvisorSettlement = [], array $mediatorError = [])
    {
        $this
            ->setGroupAdvisorSettlement($groupAdvisorSettlement)
            ->setMediatorError($mediatorError);
    }
    /**
     * Get GroupAdvisorSettlement value
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement[]
     */
    public function getGroupAdvisorSettlement(): array
    {
        return $this->GroupAdvisorSettlement;
    }
    /**
     * This method is responsible for validating the values passed to the setGroupAdvisorSettlement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupAdvisorSettlement method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroupAdvisorSettlementForArrayConstraintsFromSetGroupAdvisorSettlement(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeGroupAdvisorSettlementResponseGroupAdvisorSettlementItem) {
            // validation for constraint: itemType
            if (!$executeGroupAdvisorSettlementResponseGroupAdvisorSettlementItem instanceof \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement) {
                $invalidValues[] = is_object($executeGroupAdvisorSettlementResponseGroupAdvisorSettlementItem) ? get_class($executeGroupAdvisorSettlementResponseGroupAdvisorSettlementItem) : sprintf('%s(%s)', gettype($executeGroupAdvisorSettlementResponseGroupAdvisorSettlementItem), var_export($executeGroupAdvisorSettlementResponseGroupAdvisorSettlementItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteGroupAdvisorSettlementResponse
     */
    public function setGroupAdvisorSettlement(array $groupAdvisorSettlement = []): self
    {
        // validation for constraint: array
        if ('' !== ($groupAdvisorSettlementArrayErrorMessage = self::validateGroupAdvisorSettlementForArrayConstraintsFromSetGroupAdvisorSettlement($groupAdvisorSettlement))) {
            throw new InvalidArgumentException($groupAdvisorSettlementArrayErrorMessage, __LINE__);
        }
        $this->GroupAdvisorSettlement = $groupAdvisorSettlement;
        
        return $this;
    }
    /**
     * Add item to GroupAdvisorSettlement value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteGroupAdvisorSettlementResponse
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
    /**
     * Get MediatorError value
     * @return \Pggns\MidocoApi\Order\StructType\MediatorErrorType[]
     */
    public function getMediatorError(): array
    {
        return $this->MediatorError;
    }
    /**
     * This method is responsible for validating the values passed to the setMediatorError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMediatorError method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMediatorErrorForArrayConstraintsFromSetMediatorError(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeGroupAdvisorSettlementResponseMediatorErrorItem) {
            // validation for constraint: itemType
            if (!$executeGroupAdvisorSettlementResponseMediatorErrorItem instanceof \Pggns\MidocoApi\Order\StructType\MediatorErrorType) {
                $invalidValues[] = is_object($executeGroupAdvisorSettlementResponseMediatorErrorItem) ? get_class($executeGroupAdvisorSettlementResponseMediatorErrorItem) : sprintf('%s(%s)', gettype($executeGroupAdvisorSettlementResponseMediatorErrorItem), var_export($executeGroupAdvisorSettlementResponseMediatorErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MediatorError property can only contain items of type \Pggns\MidocoApi\Order\StructType\MediatorErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MediatorError value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MediatorErrorType[] $mediatorError
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteGroupAdvisorSettlementResponse
     */
    public function setMediatorError(array $mediatorError = []): self
    {
        // validation for constraint: array
        if ('' !== ($mediatorErrorArrayErrorMessage = self::validateMediatorErrorForArrayConstraintsFromSetMediatorError($mediatorError))) {
            throw new InvalidArgumentException($mediatorErrorArrayErrorMessage, __LINE__);
        }
        $this->MediatorError = $mediatorError;
        
        return $this;
    }
    /**
     * Add item to MediatorError value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MediatorErrorType $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteGroupAdvisorSettlementResponse
     */
    public function addToMediatorError(\Pggns\MidocoApi\Order\StructType\MediatorErrorType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MediatorErrorType) {
            throw new InvalidArgumentException(sprintf('The MediatorError property can only contain items of type \Pggns\MidocoApi\Order\StructType\MediatorErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MediatorError[] = $item;
        
        return $this;
    }
}
