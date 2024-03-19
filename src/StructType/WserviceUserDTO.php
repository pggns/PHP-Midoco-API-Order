<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WserviceUserDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WserviceUserDTO extends AbstractStructBase
{
    /**
     * The allowed
     * @var bool|null
     */
    protected ?bool $allowed = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for WserviceUserDTO
     * @uses WserviceUserDTO::setAllowed()
     * @uses WserviceUserDTO::setName()
     * @uses WserviceUserDTO::setUserId()
     * @param bool $allowed
     * @param string $name
     * @param int $userId
     */
    public function __construct(?bool $allowed = null, ?string $name = null, ?int $userId = null)
    {
        $this
            ->setAllowed($allowed)
            ->setName($name)
            ->setUserId($userId);
    }
    /**
     * Get allowed value
     * @return bool|null
     */
    public function getAllowed(): ?bool
    {
        return $this->allowed;
    }
    /**
     * Set allowed value
     * @param bool $allowed
     * @return \Pggns\MidocoApi\Order\StructType\WserviceUserDTO
     */
    public function setAllowed(?bool $allowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allowed) && !is_bool($allowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowed, true), gettype($allowed)), __LINE__);
        }
        $this->allowed = $allowed;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\WserviceUserDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\WserviceUserDTO
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
}
