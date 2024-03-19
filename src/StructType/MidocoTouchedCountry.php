<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTouchedCountry StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoTouchedCountry extends TouchedCountryDTO
{
    /**
     * The usedByItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $usedByItemId = null;
    /**
     * Constructor method for MidocoTouchedCountry
     * @uses MidocoTouchedCountry::setUsedByItemId()
     * @param int[] $usedByItemId
     */
    public function __construct(?array $usedByItemId = null)
    {
        $this
            ->setUsedByItemId($usedByItemId);
    }
    /**
     * Get usedByItemId value
     * @return int[]
     */
    public function getUsedByItemId(): ?array
    {
        return $this->usedByItemId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUsedByItemId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUsedByItemId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUsedByItemIdForArrayConstraintFromSetUsedByItemId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTouchedCountryUsedByItemIdItem) {
            // validation for constraint: itemType
            if (!(is_int($midocoTouchedCountryUsedByItemIdItem) || ctype_digit($midocoTouchedCountryUsedByItemIdItem))) {
                $invalidValues[] = is_object($midocoTouchedCountryUsedByItemIdItem) ? get_class($midocoTouchedCountryUsedByItemIdItem) : sprintf('%s(%s)', gettype($midocoTouchedCountryUsedByItemIdItem), var_export($midocoTouchedCountryUsedByItemIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The usedByItemId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set usedByItemId value
     * @throws InvalidArgumentException
     * @param int[] $usedByItemId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTouchedCountry
     */
    public function setUsedByItemId(?array $usedByItemId = null): self
    {
        // validation for constraint: array
        if ('' !== ($usedByItemIdArrayErrorMessage = self::validateUsedByItemIdForArrayConstraintFromSetUsedByItemId($usedByItemId))) {
            throw new InvalidArgumentException($usedByItemIdArrayErrorMessage, __LINE__);
        }
        $this->usedByItemId = $usedByItemId;
        
        return $this;
    }
    /**
     * Add item to usedByItemId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTouchedCountry
     */
    public function addToUsedByItemId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The usedByItemId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->usedByItemId[] = $item;
        
        return $this;
    }
}
