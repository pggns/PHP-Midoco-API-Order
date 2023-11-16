<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for attributes StructType
 * @subpackage Structs
 */
class Attributes extends AbstractStructBase
{
    /**
     * The attributetype
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: attributetype
     * @var \Pggns\MidocoApi\Order\StructType\Attributetype[]
     */
    protected array $attributetype = [];
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The count
     * @var int|null
     */
    protected ?int $count = null;
    /**
     * Constructor method for attributes
     * @uses Attributes::setAttributetype()
     * @uses Attributes::setType()
     * @uses Attributes::setCount()
     * @param \Pggns\MidocoApi\Order\StructType\Attributetype[] $attributetype
     * @param string $type
     * @param int $count
     */
    public function __construct(array $attributetype = [], ?string $type = null, ?int $count = null)
    {
        $this
            ->setAttributetype($attributetype)
            ->setType($type)
            ->setCount($count);
    }
    /**
     * Get attributetype value
     * @return \Pggns\MidocoApi\Order\StructType\Attributetype[]
     */
    public function getAttributetype(): array
    {
        return $this->attributetype;
    }
    /**
     * This method is responsible for validating the values passed to the setAttributetype method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttributetype method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttributetypeForArrayConstraintsFromSetAttributetype(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $attributesAttributetypeItem) {
            // validation for constraint: itemType
            if (!$attributesAttributetypeItem instanceof \Pggns\MidocoApi\Order\StructType\Attributetype) {
                $invalidValues[] = is_object($attributesAttributetypeItem) ? get_class($attributesAttributetypeItem) : sprintf('%s(%s)', gettype($attributesAttributetypeItem), var_export($attributesAttributetypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The attributetype property can only contain items of type \Pggns\MidocoApi\Order\StructType\Attributetype, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set attributetype value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Attributetype[] $attributetype
     * @return \Pggns\MidocoApi\Order\StructType\Attributes
     */
    public function setAttributetype(array $attributetype = []): self
    {
        // validation for constraint: array
        if ('' !== ($attributetypeArrayErrorMessage = self::validateAttributetypeForArrayConstraintsFromSetAttributetype($attributetype))) {
            throw new InvalidArgumentException($attributetypeArrayErrorMessage, __LINE__);
        }
        $this->attributetype = $attributetype;
        
        return $this;
    }
    /**
     * Add item to attributetype value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Attributetype $item
     * @return \Pggns\MidocoApi\Order\StructType\Attributes
     */
    public function addToAttributetype(\Pggns\MidocoApi\Order\StructType\Attributetype $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Attributetype) {
            throw new InvalidArgumentException(sprintf('The attributetype property can only contain items of type \Pggns\MidocoApi\Order\StructType\Attributetype, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->attributetype[] = $item;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\Attributes
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->count;
    }
    /**
     * Set count value
     * @param int $count
     * @return \Pggns\MidocoApi\Order\StructType\Attributes
     */
    public function setCount(?int $count = null): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->count = $count;
        
        return $this;
    }
}
