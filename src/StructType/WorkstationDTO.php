<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkstationDTO StructType
 * @subpackage Structs
 */
class WorkstationDTO extends AbstractStructBase
{
    /**
     * The id
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The lastLogin
     * @var string|null
     */
    protected ?string $lastLogin = null;
    /**
     * The lastUser
     * @var int|null
     */
    protected ?int $lastUser = null;
    /**
     * Constructor method for WorkstationDTO
     * @uses WorkstationDTO::setId()
     * @uses WorkstationDTO::setLastLogin()
     * @uses WorkstationDTO::setLastUser()
     * @param string $id
     * @param string $lastLogin
     * @param int $lastUser
     */
    public function __construct(?string $id = null, ?string $lastLogin = null, ?int $lastUser = null)
    {
        $this
            ->setId($id)
            ->setLastLogin($lastLogin)
            ->setLastUser($lastUser);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Pggns\MidocoApi\Order\StructType\WorkstationDTO
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get lastLogin value
     * @return string|null
     */
    public function getLastLogin(): ?string
    {
        return $this->lastLogin;
    }
    /**
     * Set lastLogin value
     * @param string $lastLogin
     * @return \Pggns\MidocoApi\Order\StructType\WorkstationDTO
     */
    public function setLastLogin(?string $lastLogin = null): self
    {
        // validation for constraint: string
        if (!is_null($lastLogin) && !is_string($lastLogin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastLogin, true), gettype($lastLogin)), __LINE__);
        }
        $this->lastLogin = $lastLogin;
        
        return $this;
    }
    /**
     * Get lastUser value
     * @return int|null
     */
    public function getLastUser(): ?int
    {
        return $this->lastUser;
    }
    /**
     * Set lastUser value
     * @param int $lastUser
     * @return \Pggns\MidocoApi\Order\StructType\WorkstationDTO
     */
    public function setLastUser(?int $lastUser = null): self
    {
        // validation for constraint: int
        if (!is_null($lastUser) && !(is_int($lastUser) || ctype_digit($lastUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastUser, true), gettype($lastUser)), __LINE__);
        }
        $this->lastUser = $lastUser;
        
        return $this;
    }
}
