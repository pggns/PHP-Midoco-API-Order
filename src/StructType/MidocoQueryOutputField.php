<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoQueryOutputField StructType
 * @subpackage Structs
 */
class MidocoQueryOutputField extends AbstractStructBase
{
    /**
     * The fieldName
     * @var string|null
     */
    protected ?string $fieldName = null;
    /**
     * The orderAscendent
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $orderAscendent = null;
    /**
     * The orderByPosition
     * @var int|null
     */
    protected ?int $orderByPosition = null;
    /**
     * The visible
     * @var bool|null
     */
    protected ?bool $visible = null;
    /**
     * Constructor method for MidocoQueryOutputField
     * @uses MidocoQueryOutputField::setFieldName()
     * @uses MidocoQueryOutputField::setOrderAscendent()
     * @uses MidocoQueryOutputField::setOrderByPosition()
     * @uses MidocoQueryOutputField::setVisible()
     * @param string $fieldName
     * @param bool $orderAscendent
     * @param int $orderByPosition
     * @param bool $visible
     */
    public function __construct(?string $fieldName = null, ?bool $orderAscendent = true, ?int $orderByPosition = null, ?bool $visible = null)
    {
        $this
            ->setFieldName($fieldName)
            ->setOrderAscendent($orderAscendent)
            ->setOrderByPosition($orderByPosition)
            ->setVisible($visible);
    }
    /**
     * Get fieldName value
     * @return string|null
     */
    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }
    /**
     * Set fieldName value
     * @param string $fieldName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryOutputField
     */
    public function setFieldName(?string $fieldName = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldName) && !is_string($fieldName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldName, true), gettype($fieldName)), __LINE__);
        }
        $this->fieldName = $fieldName;
        
        return $this;
    }
    /**
     * Get orderAscendent value
     * @return bool|null
     */
    public function getOrderAscendent(): ?bool
    {
        return $this->orderAscendent;
    }
    /**
     * Set orderAscendent value
     * @param bool $orderAscendent
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryOutputField
     */
    public function setOrderAscendent(?bool $orderAscendent = true): self
    {
        // validation for constraint: boolean
        if (!is_null($orderAscendent) && !is_bool($orderAscendent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($orderAscendent, true), gettype($orderAscendent)), __LINE__);
        }
        $this->orderAscendent = $orderAscendent;
        
        return $this;
    }
    /**
     * Get orderByPosition value
     * @return int|null
     */
    public function getOrderByPosition(): ?int
    {
        return $this->orderByPosition;
    }
    /**
     * Set orderByPosition value
     * @param int $orderByPosition
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryOutputField
     */
    public function setOrderByPosition(?int $orderByPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($orderByPosition) && !(is_int($orderByPosition) || ctype_digit($orderByPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderByPosition, true), gettype($orderByPosition)), __LINE__);
        }
        $this->orderByPosition = $orderByPosition;
        
        return $this;
    }
    /**
     * Get visible value
     * @return bool|null
     */
    public function getVisible(): ?bool
    {
        return $this->visible;
    }
    /**
     * Set visible value
     * @param bool $visible
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryOutputField
     */
    public function setVisible(?bool $visible = null): self
    {
        // validation for constraint: boolean
        if (!is_null($visible) && !is_bool($visible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($visible, true), gettype($visible)), __LINE__);
        }
        $this->visible = $visible;
        
        return $this;
    }
}
