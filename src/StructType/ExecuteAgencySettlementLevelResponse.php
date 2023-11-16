<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteAgencySettlementLevelResponse StructType
 * @subpackage Structs
 */
class ExecuteAgencySettlementLevelResponse extends AbstractStructBase
{
    /**
     * The MidocoAgencySettlementLevelBilling
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAgencySettlementLevelBilling
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelBilling[]
     */
    protected array $MidocoAgencySettlementLevelBilling = [];
    /**
     * The MidocoAgencySettlementLevelError
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAgencySettlementLevelError
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelError[]
     */
    protected array $MidocoAgencySettlementLevelError = [];
    /**
     * Constructor method for ExecuteAgencySettlementLevelResponse
     * @uses ExecuteAgencySettlementLevelResponse::setMidocoAgencySettlementLevelBilling()
     * @uses ExecuteAgencySettlementLevelResponse::setMidocoAgencySettlementLevelError()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelBilling[] $midocoAgencySettlementLevelBilling
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelError[] $midocoAgencySettlementLevelError
     */
    public function __construct(array $midocoAgencySettlementLevelBilling = [], array $midocoAgencySettlementLevelError = [])
    {
        $this
            ->setMidocoAgencySettlementLevelBilling($midocoAgencySettlementLevelBilling)
            ->setMidocoAgencySettlementLevelError($midocoAgencySettlementLevelError);
    }
    /**
     * Get MidocoAgencySettlementLevelBilling value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelBilling[]
     */
    public function getMidocoAgencySettlementLevelBilling(): array
    {
        return $this->MidocoAgencySettlementLevelBilling;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAgencySettlementLevelBilling method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAgencySettlementLevelBilling method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAgencySettlementLevelBillingForArrayConstraintsFromSetMidocoAgencySettlementLevelBilling(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeAgencySettlementLevelResponseMidocoAgencySettlementLevelBillingItem) {
            // validation for constraint: itemType
            if (!$executeAgencySettlementLevelResponseMidocoAgencySettlementLevelBillingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelBilling) {
                $invalidValues[] = is_object($executeAgencySettlementLevelResponseMidocoAgencySettlementLevelBillingItem) ? get_class($executeAgencySettlementLevelResponseMidocoAgencySettlementLevelBillingItem) : sprintf('%s(%s)', gettype($executeAgencySettlementLevelResponseMidocoAgencySettlementLevelBillingItem), var_export($executeAgencySettlementLevelResponseMidocoAgencySettlementLevelBillingItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementLevelResponse
     */
    public function setMidocoAgencySettlementLevelBilling(array $midocoAgencySettlementLevelBilling = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAgencySettlementLevelBillingArrayErrorMessage = self::validateMidocoAgencySettlementLevelBillingForArrayConstraintsFromSetMidocoAgencySettlementLevelBilling($midocoAgencySettlementLevelBilling))) {
            throw new InvalidArgumentException($midocoAgencySettlementLevelBillingArrayErrorMessage, __LINE__);
        }
        $this->MidocoAgencySettlementLevelBilling = $midocoAgencySettlementLevelBilling;
        
        return $this;
    }
    /**
     * Add item to MidocoAgencySettlementLevelBilling value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelBilling $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementLevelResponse
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
    /**
     * Get MidocoAgencySettlementLevelError value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelError[]
     */
    public function getMidocoAgencySettlementLevelError(): array
    {
        return $this->MidocoAgencySettlementLevelError;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAgencySettlementLevelError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAgencySettlementLevelError method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAgencySettlementLevelErrorForArrayConstraintsFromSetMidocoAgencySettlementLevelError(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeAgencySettlementLevelResponseMidocoAgencySettlementLevelErrorItem) {
            // validation for constraint: itemType
            if (!$executeAgencySettlementLevelResponseMidocoAgencySettlementLevelErrorItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelError) {
                $invalidValues[] = is_object($executeAgencySettlementLevelResponseMidocoAgencySettlementLevelErrorItem) ? get_class($executeAgencySettlementLevelResponseMidocoAgencySettlementLevelErrorItem) : sprintf('%s(%s)', gettype($executeAgencySettlementLevelResponseMidocoAgencySettlementLevelErrorItem), var_export($executeAgencySettlementLevelResponseMidocoAgencySettlementLevelErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAgencySettlementLevelError property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelError, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAgencySettlementLevelError value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelError[] $midocoAgencySettlementLevelError
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementLevelResponse
     */
    public function setMidocoAgencySettlementLevelError(array $midocoAgencySettlementLevelError = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAgencySettlementLevelErrorArrayErrorMessage = self::validateMidocoAgencySettlementLevelErrorForArrayConstraintsFromSetMidocoAgencySettlementLevelError($midocoAgencySettlementLevelError))) {
            throw new InvalidArgumentException($midocoAgencySettlementLevelErrorArrayErrorMessage, __LINE__);
        }
        $this->MidocoAgencySettlementLevelError = $midocoAgencySettlementLevelError;
        
        return $this;
    }
    /**
     * Add item to MidocoAgencySettlementLevelError value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelError $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementLevelResponse
     */
    public function addToMidocoAgencySettlementLevelError(\Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelError $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelError) {
            throw new InvalidArgumentException(sprintf('The MidocoAgencySettlementLevelError property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelError, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAgencySettlementLevelError[] = $item;
        
        return $this;
    }
}
