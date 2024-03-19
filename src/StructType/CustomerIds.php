<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerIds StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CustomerIds extends AbstractStructBase
{
    /**
     * The included
     * Meta information extracted from the WSDL
     * - documentation: List of customer ids, for which the creation of the campaign info was successful
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $included = null;
    /**
     * The dropped
     * Meta information extracted from the WSDL
     * - documentation: List of customer ids, for which the creation of the campaign info was not successful
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $dropped = null;
    /**
     * Constructor method for CustomerIds
     * @uses CustomerIds::setIncluded()
     * @uses CustomerIds::setDropped()
     * @param int[] $included
     * @param int[] $dropped
     */
    public function __construct(?array $included = null, ?array $dropped = null)
    {
        $this
            ->setIncluded($included)
            ->setDropped($dropped);
    }
    /**
     * Get included value
     * @return int[]
     */
    public function getIncluded(): ?array
    {
        return $this->included;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setIncluded method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIncluded method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIncludedForArrayConstraintFromSetIncluded(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerIdsIncludedItem) {
            // validation for constraint: itemType
            if (!(is_int($customerIdsIncludedItem) || ctype_digit($customerIdsIncludedItem))) {
                $invalidValues[] = is_object($customerIdsIncludedItem) ? get_class($customerIdsIncludedItem) : sprintf('%s(%s)', gettype($customerIdsIncludedItem), var_export($customerIdsIncludedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The included property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set included value
     * @throws InvalidArgumentException
     * @param int[] $included
     * @return \Pggns\MidocoApi\Order\StructType\CustomerIds
     */
    public function setIncluded(?array $included = null): self
    {
        // validation for constraint: array
        if ('' !== ($includedArrayErrorMessage = self::validateIncludedForArrayConstraintFromSetIncluded($included))) {
            throw new InvalidArgumentException($includedArrayErrorMessage, __LINE__);
        }
        $this->included = $included;
        
        return $this;
    }
    /**
     * Add item to included value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\CustomerIds
     */
    public function addToIncluded(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The included property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->included[] = $item;
        
        return $this;
    }
    /**
     * Get dropped value
     * @return int[]
     */
    public function getDropped(): ?array
    {
        return $this->dropped;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDropped method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDropped method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDroppedForArrayConstraintFromSetDropped(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerIdsDroppedItem) {
            // validation for constraint: itemType
            if (!(is_int($customerIdsDroppedItem) || ctype_digit($customerIdsDroppedItem))) {
                $invalidValues[] = is_object($customerIdsDroppedItem) ? get_class($customerIdsDroppedItem) : sprintf('%s(%s)', gettype($customerIdsDroppedItem), var_export($customerIdsDroppedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The dropped property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set dropped value
     * @throws InvalidArgumentException
     * @param int[] $dropped
     * @return \Pggns\MidocoApi\Order\StructType\CustomerIds
     */
    public function setDropped(?array $dropped = null): self
    {
        // validation for constraint: array
        if ('' !== ($droppedArrayErrorMessage = self::validateDroppedForArrayConstraintFromSetDropped($dropped))) {
            throw new InvalidArgumentException($droppedArrayErrorMessage, __LINE__);
        }
        $this->dropped = $dropped;
        
        return $this;
    }
    /**
     * Add item to dropped value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\CustomerIds
     */
    public function addToDropped(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The dropped property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->dropped[] = $item;
        
        return $this;
    }
}
