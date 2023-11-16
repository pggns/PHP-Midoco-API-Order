<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoUserattribValue StructType
 * @subpackage Structs
 */
class MidocoUserattribValue extends AbstractStructBase
{
    /**
     * The internalAttribValue
     * @var string|null
     */
    protected ?string $internalAttribValue = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The attribName
     * @var string|null
     */
    protected ?string $attribName = null;
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * Constructor method for MidocoUserattribValue
     * @uses MidocoUserattribValue::setInternalAttribValue()
     * @uses MidocoUserattribValue::setUserId()
     * @uses MidocoUserattribValue::setAttribName()
     * @uses MidocoUserattribValue::setValue()
     * @param string $internalAttribValue
     * @param int $userId
     * @param string $attribName
     * @param string $value
     */
    public function __construct(?string $internalAttribValue = null, ?int $userId = null, ?string $attribName = null, ?string $value = null)
    {
        $this
            ->setInternalAttribValue($internalAttribValue)
            ->setUserId($userId)
            ->setAttribName($attribName)
            ->setValue($value);
    }
    /**
     * Get internalAttribValue value
     * @return string|null
     */
    public function getInternalAttribValue(): ?string
    {
        return $this->internalAttribValue;
    }
    /**
     * Set internalAttribValue value
     * @param string $internalAttribValue
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserattribValue
     */
    public function setInternalAttribValue(?string $internalAttribValue = null): self
    {
        // validation for constraint: string
        if (!is_null($internalAttribValue) && !is_string($internalAttribValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internalAttribValue, true), gettype($internalAttribValue)), __LINE__);
        }
        $this->internalAttribValue = $internalAttribValue;
        
        return $this;
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserattribValue
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
    /**
     * Get attribName value
     * @return string|null
     */
    public function getAttribName(): ?string
    {
        return $this->attribName;
    }
    /**
     * Set attribName value
     * @param string $attribName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserattribValue
     */
    public function setAttribName(?string $attribName = null): self
    {
        // validation for constraint: string
        if (!is_null($attribName) && !is_string($attribName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attribName, true), gettype($attribName)), __LINE__);
        }
        $this->attribName = $attribName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserattribValue
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
