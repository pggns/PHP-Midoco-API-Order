<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderAttributesRequest StructType
 * @subpackage Structs
 */
class SaveOrderAttributesRequest extends AbstractStructBase
{
    /**
     * The MidocoAttributeValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoAttributeValue
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue[]
     */
    protected array $MidocoAttributeValue = [];
    /**
     * The doUpdate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $doUpdate = null;
    /**
     * Constructor method for SaveOrderAttributesRequest
     * @uses SaveOrderAttributesRequest::setMidocoAttributeValue()
     * @uses SaveOrderAttributesRequest::setDoUpdate()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue[] $midocoAttributeValue
     * @param bool $doUpdate
     */
    public function __construct(array $midocoAttributeValue = [], ?bool $doUpdate = null)
    {
        $this
            ->setMidocoAttributeValue($midocoAttributeValue)
            ->setDoUpdate($doUpdate);
    }
    /**
     * Get MidocoAttributeValue value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue[]
     */
    public function getMidocoAttributeValue(): array
    {
        return $this->MidocoAttributeValue;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAttributeValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAttributeValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAttributeValueForArrayConstraintsFromSetMidocoAttributeValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveOrderAttributesRequestMidocoAttributeValueItem) {
            // validation for constraint: itemType
            if (!$saveOrderAttributesRequestMidocoAttributeValueItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue) {
                $invalidValues[] = is_object($saveOrderAttributesRequestMidocoAttributeValueItem) ? get_class($saveOrderAttributesRequestMidocoAttributeValueItem) : sprintf('%s(%s)', gettype($saveOrderAttributesRequestMidocoAttributeValueItem), var_export($saveOrderAttributesRequestMidocoAttributeValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAttributeValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAttributeValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue[] $midocoAttributeValue
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderAttributesRequest
     */
    public function setMidocoAttributeValue(array $midocoAttributeValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAttributeValueArrayErrorMessage = self::validateMidocoAttributeValueForArrayConstraintsFromSetMidocoAttributeValue($midocoAttributeValue))) {
            throw new InvalidArgumentException($midocoAttributeValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoAttributeValue = $midocoAttributeValue;
        
        return $this;
    }
    /**
     * Add item to MidocoAttributeValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderAttributesRequest
     */
    public function addToMidocoAttributeValue(\Pggns\MidocoApi\Order\StructType\MidocoAttributeValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue) {
            throw new InvalidArgumentException(sprintf('The MidocoAttributeValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAttributeValue[] = $item;
        
        return $this;
    }
    /**
     * Get doUpdate value
     * @return bool|null
     */
    public function getDoUpdate(): ?bool
    {
        return $this->doUpdate;
    }
    /**
     * Set doUpdate value
     * @param bool $doUpdate
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderAttributesRequest
     */
    public function setDoUpdate(?bool $doUpdate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($doUpdate) && !is_bool($doUpdate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($doUpdate, true), gettype($doUpdate)), __LINE__);
        }
        $this->doUpdate = $doUpdate;
        
        return $this;
    }
}
