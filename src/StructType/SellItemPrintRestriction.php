<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellItemPrintRestriction StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SellItemPrintRestriction extends AbstractStructBase
{
    /**
     * The mustPrintSeparateFrom
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $mustPrintSeparateFrom = null;
    /**
     * The mustPrintWith
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $mustPrintWith = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * Constructor method for SellItemPrintRestriction
     * @uses SellItemPrintRestriction::setMustPrintSeparateFrom()
     * @uses SellItemPrintRestriction::setMustPrintWith()
     * @uses SellItemPrintRestriction::setItemId()
     * @param int[] $mustPrintSeparateFrom
     * @param int[] $mustPrintWith
     * @param int $itemId
     */
    public function __construct(?array $mustPrintSeparateFrom = null, ?array $mustPrintWith = null, ?int $itemId = null)
    {
        $this
            ->setMustPrintSeparateFrom($mustPrintSeparateFrom)
            ->setMustPrintWith($mustPrintWith)
            ->setItemId($itemId);
    }
    /**
     * Get mustPrintSeparateFrom value
     * @return int[]
     */
    public function getMustPrintSeparateFrom(): ?array
    {
        return $this->mustPrintSeparateFrom;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMustPrintSeparateFrom method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMustPrintSeparateFrom method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMustPrintSeparateFromForArrayConstraintFromSetMustPrintSeparateFrom(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellItemPrintRestrictionMustPrintSeparateFromItem) {
            // validation for constraint: itemType
            if (!(is_int($sellItemPrintRestrictionMustPrintSeparateFromItem) || ctype_digit($sellItemPrintRestrictionMustPrintSeparateFromItem))) {
                $invalidValues[] = is_object($sellItemPrintRestrictionMustPrintSeparateFromItem) ? get_class($sellItemPrintRestrictionMustPrintSeparateFromItem) : sprintf('%s(%s)', gettype($sellItemPrintRestrictionMustPrintSeparateFromItem), var_export($sellItemPrintRestrictionMustPrintSeparateFromItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The mustPrintSeparateFrom property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set mustPrintSeparateFrom value
     * @throws InvalidArgumentException
     * @param int[] $mustPrintSeparateFrom
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintRestriction
     */
    public function setMustPrintSeparateFrom(?array $mustPrintSeparateFrom = null): self
    {
        // validation for constraint: array
        if ('' !== ($mustPrintSeparateFromArrayErrorMessage = self::validateMustPrintSeparateFromForArrayConstraintFromSetMustPrintSeparateFrom($mustPrintSeparateFrom))) {
            throw new InvalidArgumentException($mustPrintSeparateFromArrayErrorMessage, __LINE__);
        }
        $this->mustPrintSeparateFrom = $mustPrintSeparateFrom;
        
        return $this;
    }
    /**
     * Add item to mustPrintSeparateFrom value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintRestriction
     */
    public function addToMustPrintSeparateFrom(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The mustPrintSeparateFrom property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->mustPrintSeparateFrom[] = $item;
        
        return $this;
    }
    /**
     * Get mustPrintWith value
     * @return int[]
     */
    public function getMustPrintWith(): ?array
    {
        return $this->mustPrintWith;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMustPrintWith method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMustPrintWith method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMustPrintWithForArrayConstraintFromSetMustPrintWith(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellItemPrintRestrictionMustPrintWithItem) {
            // validation for constraint: itemType
            if (!(is_int($sellItemPrintRestrictionMustPrintWithItem) || ctype_digit($sellItemPrintRestrictionMustPrintWithItem))) {
                $invalidValues[] = is_object($sellItemPrintRestrictionMustPrintWithItem) ? get_class($sellItemPrintRestrictionMustPrintWithItem) : sprintf('%s(%s)', gettype($sellItemPrintRestrictionMustPrintWithItem), var_export($sellItemPrintRestrictionMustPrintWithItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The mustPrintWith property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set mustPrintWith value
     * @throws InvalidArgumentException
     * @param int[] $mustPrintWith
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintRestriction
     */
    public function setMustPrintWith(?array $mustPrintWith = null): self
    {
        // validation for constraint: array
        if ('' !== ($mustPrintWithArrayErrorMessage = self::validateMustPrintWithForArrayConstraintFromSetMustPrintWith($mustPrintWith))) {
            throw new InvalidArgumentException($mustPrintWithArrayErrorMessage, __LINE__);
        }
        $this->mustPrintWith = $mustPrintWith;
        
        return $this;
    }
    /**
     * Add item to mustPrintWith value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintRestriction
     */
    public function addToMustPrintWith(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The mustPrintWith property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->mustPrintWith[] = $item;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintRestriction
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
}
