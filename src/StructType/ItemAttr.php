<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for itemAttr StructType
 * @subpackage Structs
 */
class ItemAttr extends AbstractStructBase
{
    /**
     * The position
     * Meta information extracted from the WSDL
     * - documentation: reference to item position, there can be more than one with the same position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The subposition
     * @var int|null
     */
    protected ?int $subposition = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * Constructor method for itemAttr
     * @uses ItemAttr::setPosition()
     * @uses ItemAttr::setSubposition()
     * @uses ItemAttr::setName()
     * @uses ItemAttr::setValue()
     * @param int $position
     * @param int $subposition
     * @param string $name
     * @param string $value
     */
    public function __construct(?int $position = null, ?int $subposition = null, ?string $name = null, ?string $value = null)
    {
        $this
            ->setPosition($position)
            ->setSubposition($subposition)
            ->setName($name)
            ->setValue($value);
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\ItemAttr
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get subposition value
     * @return int|null
     */
    public function getSubposition(): ?int
    {
        return $this->subposition;
    }
    /**
     * Set subposition value
     * @param int $subposition
     * @return \Pggns\MidocoApi\Order\StructType\ItemAttr
     */
    public function setSubposition(?int $subposition = null): self
    {
        // validation for constraint: int
        if (!is_null($subposition) && !(is_int($subposition) || ctype_digit($subposition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($subposition, true), gettype($subposition)), __LINE__);
        }
        $this->subposition = $subposition;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\ItemAttr
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ItemAttr
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
