<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoProfileAttribute StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoProfileAttribute extends AbstractStructBase
{
    /**
     * The GdsProfileAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: GdsProfileAttribute
     * @var \Pggns\MidocoApi\Order\StructType\GdsProfileAttribute[]
     */
    protected ?array $GdsProfileAttribute = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * Constructor method for MidocoProfileAttribute
     * @uses MidocoProfileAttribute::setGdsProfileAttribute()
     * @uses MidocoProfileAttribute::setId()
     * @uses MidocoProfileAttribute::setType()
     * @uses MidocoProfileAttribute::setValue()
     * @param \Pggns\MidocoApi\Order\StructType\GdsProfileAttribute[] $gdsProfileAttribute
     * @param int $id
     * @param string $type
     * @param string $value
     */
    public function __construct(?array $gdsProfileAttribute = null, ?int $id = null, ?string $type = null, ?string $value = null)
    {
        $this
            ->setGdsProfileAttribute($gdsProfileAttribute)
            ->setId($id)
            ->setType($type)
            ->setValue($value);
    }
    /**
     * Get GdsProfileAttribute value
     * @return \Pggns\MidocoApi\Order\StructType\GdsProfileAttribute[]
     */
    public function getGdsProfileAttribute(): ?array
    {
        return $this->GdsProfileAttribute;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setGdsProfileAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGdsProfileAttribute method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGdsProfileAttributeForArrayConstraintFromSetGdsProfileAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoProfileAttributeGdsProfileAttributeItem) {
            // validation for constraint: itemType
            if (!$midocoProfileAttributeGdsProfileAttributeItem instanceof \Pggns\MidocoApi\Order\StructType\GdsProfileAttribute) {
                $invalidValues[] = is_object($midocoProfileAttributeGdsProfileAttributeItem) ? get_class($midocoProfileAttributeGdsProfileAttributeItem) : sprintf('%s(%s)', gettype($midocoProfileAttributeGdsProfileAttributeItem), var_export($midocoProfileAttributeGdsProfileAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GdsProfileAttribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\GdsProfileAttribute, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GdsProfileAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\GdsProfileAttribute[] $gdsProfileAttribute
     * @return \Pggns\MidocoApi\Order\StructType\MidocoProfileAttribute
     */
    public function setGdsProfileAttribute(?array $gdsProfileAttribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($gdsProfileAttributeArrayErrorMessage = self::validateGdsProfileAttributeForArrayConstraintFromSetGdsProfileAttribute($gdsProfileAttribute))) {
            throw new InvalidArgumentException($gdsProfileAttributeArrayErrorMessage, __LINE__);
        }
        $this->GdsProfileAttribute = $gdsProfileAttribute;
        
        return $this;
    }
    /**
     * Add item to GdsProfileAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\GdsProfileAttribute $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoProfileAttribute
     */
    public function addToGdsProfileAttribute(\Pggns\MidocoApi\Order\StructType\GdsProfileAttribute $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\GdsProfileAttribute) {
            throw new InvalidArgumentException(sprintf('The GdsProfileAttribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\GdsProfileAttribute, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->GdsProfileAttribute[] = $item;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\MidocoProfileAttribute
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoProfileAttribute
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
     * Get value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoProfileAttribute
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
}
