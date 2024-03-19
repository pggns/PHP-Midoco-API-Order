<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CcTokenAttrDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CcTokenAttrDTO extends AbstractStructBase
{
    /**
     * The attrName
     * @var string|null
     */
    protected ?string $attrName = null;
    /**
     * The attrPosition
     * @var int|null
     */
    protected ?int $attrPosition = null;
    /**
     * The attrValue
     * @var string|null
     */
    protected ?string $attrValue = null;
    /**
     * The ccTokenType
     * @var string|null
     */
    protected ?string $ccTokenType = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * Constructor method for CcTokenAttrDTO
     * @uses CcTokenAttrDTO::setAttrName()
     * @uses CcTokenAttrDTO::setAttrPosition()
     * @uses CcTokenAttrDTO::setAttrValue()
     * @uses CcTokenAttrDTO::setCcTokenType()
     * @uses CcTokenAttrDTO::setId()
     * @param string $attrName
     * @param int $attrPosition
     * @param string $attrValue
     * @param string $ccTokenType
     * @param int $id
     */
    public function __construct(?string $attrName = null, ?int $attrPosition = null, ?string $attrValue = null, ?string $ccTokenType = null, ?int $id = null)
    {
        $this
            ->setAttrName($attrName)
            ->setAttrPosition($attrPosition)
            ->setAttrValue($attrValue)
            ->setCcTokenType($ccTokenType)
            ->setId($id);
    }
    /**
     * Get attrName value
     * @return string|null
     */
    public function getAttrName(): ?string
    {
        return $this->attrName;
    }
    /**
     * Set attrName value
     * @param string $attrName
     * @return \Pggns\MidocoApi\Order\StructType\CcTokenAttrDTO
     */
    public function setAttrName(?string $attrName = null): self
    {
        // validation for constraint: string
        if (!is_null($attrName) && !is_string($attrName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrName, true), gettype($attrName)), __LINE__);
        }
        $this->attrName = $attrName;
        
        return $this;
    }
    /**
     * Get attrPosition value
     * @return int|null
     */
    public function getAttrPosition(): ?int
    {
        return $this->attrPosition;
    }
    /**
     * Set attrPosition value
     * @param int $attrPosition
     * @return \Pggns\MidocoApi\Order\StructType\CcTokenAttrDTO
     */
    public function setAttrPosition(?int $attrPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($attrPosition) && !(is_int($attrPosition) || ctype_digit($attrPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attrPosition, true), gettype($attrPosition)), __LINE__);
        }
        $this->attrPosition = $attrPosition;
        
        return $this;
    }
    /**
     * Get attrValue value
     * @return string|null
     */
    public function getAttrValue(): ?string
    {
        return $this->attrValue;
    }
    /**
     * Set attrValue value
     * @param string $attrValue
     * @return \Pggns\MidocoApi\Order\StructType\CcTokenAttrDTO
     */
    public function setAttrValue(?string $attrValue = null): self
    {
        // validation for constraint: string
        if (!is_null($attrValue) && !is_string($attrValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrValue, true), gettype($attrValue)), __LINE__);
        }
        $this->attrValue = $attrValue;
        
        return $this;
    }
    /**
     * Get ccTokenType value
     * @return string|null
     */
    public function getCcTokenType(): ?string
    {
        return $this->ccTokenType;
    }
    /**
     * Set ccTokenType value
     * @param string $ccTokenType
     * @return \Pggns\MidocoApi\Order\StructType\CcTokenAttrDTO
     */
    public function setCcTokenType(?string $ccTokenType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccTokenType) && !is_string($ccTokenType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccTokenType, true), gettype($ccTokenType)), __LINE__);
        }
        $this->ccTokenType = $ccTokenType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CcTokenAttrDTO
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
}
