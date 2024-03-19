<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pictures StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Pictures extends AbstractStructBase
{
    /**
     * The picturetype
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: picturetype
     * @var \Pggns\MidocoApi\Order\StructType\Picturetype[]
     */
    protected ?array $picturetype = null;
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
     * Constructor method for pictures
     * @uses Pictures::setPicturetype()
     * @uses Pictures::setType()
     * @uses Pictures::setCount()
     * @param \Pggns\MidocoApi\Order\StructType\Picturetype[] $picturetype
     * @param string $type
     * @param int $count
     */
    public function __construct(?array $picturetype = null, ?string $type = null, ?int $count = null)
    {
        $this
            ->setPicturetype($picturetype)
            ->setType($type)
            ->setCount($count);
    }
    /**
     * Get picturetype value
     * @return \Pggns\MidocoApi\Order\StructType\Picturetype[]
     */
    public function getPicturetype(): ?array
    {
        return $this->picturetype;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPicturetype method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPicturetype method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePicturetypeForArrayConstraintFromSetPicturetype(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $picturesPicturetypeItem) {
            // validation for constraint: itemType
            if (!$picturesPicturetypeItem instanceof \Pggns\MidocoApi\Order\StructType\Picturetype) {
                $invalidValues[] = is_object($picturesPicturetypeItem) ? get_class($picturesPicturetypeItem) : sprintf('%s(%s)', gettype($picturesPicturetypeItem), var_export($picturesPicturetypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The picturetype property can only contain items of type \Pggns\MidocoApi\Order\StructType\Picturetype, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set picturetype value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Picturetype[] $picturetype
     * @return \Pggns\MidocoApi\Order\StructType\Pictures
     */
    public function setPicturetype(?array $picturetype = null): self
    {
        // validation for constraint: array
        if ('' !== ($picturetypeArrayErrorMessage = self::validatePicturetypeForArrayConstraintFromSetPicturetype($picturetype))) {
            throw new InvalidArgumentException($picturetypeArrayErrorMessage, __LINE__);
        }
        $this->picturetype = $picturetype;
        
        return $this;
    }
    /**
     * Add item to picturetype value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Picturetype $item
     * @return \Pggns\MidocoApi\Order\StructType\Pictures
     */
    public function addToPicturetype(\Pggns\MidocoApi\Order\StructType\Picturetype $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Picturetype) {
            throw new InvalidArgumentException(sprintf('The picturetype property can only contain items of type \Pggns\MidocoApi\Order\StructType\Picturetype, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->picturetype[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Pictures
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
     * @return \Pggns\MidocoApi\Order\StructType\Pictures
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
