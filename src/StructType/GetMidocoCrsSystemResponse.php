<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoCrsSystemResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoCrsSystemResponse extends AbstractStructBase
{
    /**
     * The MidocoCrsSystem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrsSystem
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCrsSystem[]
     */
    protected ?array $MidocoCrsSystem = null;
    /**
     * Constructor method for GetMidocoCrsSystemResponse
     * @uses GetMidocoCrsSystemResponse::setMidocoCrsSystem()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrsSystem[] $midocoCrsSystem
     */
    public function __construct(?array $midocoCrsSystem = null)
    {
        $this
            ->setMidocoCrsSystem($midocoCrsSystem);
    }
    /**
     * Get MidocoCrsSystem value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrsSystem[]
     */
    public function getMidocoCrsSystem(): ?array
    {
        return $this->MidocoCrsSystem;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrsSystem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrsSystem method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrsSystemForArrayConstraintFromSetMidocoCrsSystem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoCrsSystemResponseMidocoCrsSystemItem) {
            // validation for constraint: itemType
            if (!$getMidocoCrsSystemResponseMidocoCrsSystemItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCrsSystem) {
                $invalidValues[] = is_object($getMidocoCrsSystemResponseMidocoCrsSystemItem) ? get_class($getMidocoCrsSystemResponseMidocoCrsSystemItem) : sprintf('%s(%s)', gettype($getMidocoCrsSystemResponseMidocoCrsSystemItem), var_export($getMidocoCrsSystemResponseMidocoCrsSystemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrsSystem property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCrsSystem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrsSystem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrsSystem[] $midocoCrsSystem
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoCrsSystemResponse
     */
    public function setMidocoCrsSystem(?array $midocoCrsSystem = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrsSystemArrayErrorMessage = self::validateMidocoCrsSystemForArrayConstraintFromSetMidocoCrsSystem($midocoCrsSystem))) {
            throw new InvalidArgumentException($midocoCrsSystemArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrsSystem = $midocoCrsSystem;
        
        return $this;
    }
    /**
     * Add item to MidocoCrsSystem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrsSystem $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoCrsSystemResponse
     */
    public function addToMidocoCrsSystem(\Pggns\MidocoApi\Order\StructType\MidocoCrsSystem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCrsSystem) {
            throw new InvalidArgumentException(sprintf('The MidocoCrsSystem property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCrsSystem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrsSystem[] = $item;
        
        return $this;
    }
}
