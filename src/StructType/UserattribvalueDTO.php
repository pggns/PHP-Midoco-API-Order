<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserattribvalueDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UserattribvalueDTO extends AbstractStructBase
{
    /**
     * The attribName
     * @var string|null
     */
    protected ?string $attribName = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * Constructor method for UserattribvalueDTO
     * @uses UserattribvalueDTO::setAttribName()
     * @uses UserattribvalueDTO::setUserId()
     * @uses UserattribvalueDTO::setValue()
     * @param string $attribName
     * @param int $userId
     * @param string $value
     */
    public function __construct(?string $attribName = null, ?int $userId = null, ?string $value = null)
    {
        $this
            ->setAttribName($attribName)
            ->setUserId($userId)
            ->setValue($value);
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
     * @return \Pggns\MidocoApi\Order\StructType\UserattribvalueDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\UserattribvalueDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\UserattribvalueDTO
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
