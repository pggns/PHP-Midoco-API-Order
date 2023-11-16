<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderLockPeriodDTO StructType
 * @subpackage Structs
 */
class OrderLockPeriodDTO extends AbstractStructBase
{
    /**
     * The creationTime
     * @var string|null
     */
    protected ?string $creationTime = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The forAllChildren
     * @var bool|null
     */
    protected ?bool $forAllChildren = null;
    /**
     * The lockPeriodEnd
     * @var string|null
     */
    protected ?string $lockPeriodEnd = null;
    /**
     * The lockPeriodId
     * @var int|null
     */
    protected ?int $lockPeriodId = null;
    /**
     * The lockPeriodStart
     * @var string|null
     */
    protected ?string $lockPeriodStart = null;
    /**
     * The suspendUser
     * @var int|null
     */
    protected ?int $suspendUser = null;
    /**
     * The suspended
     * @var bool|null
     */
    protected ?bool $suspended = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for OrderLockPeriodDTO
     * @uses OrderLockPeriodDTO::setCreationTime()
     * @uses OrderLockPeriodDTO::setCreationUser()
     * @uses OrderLockPeriodDTO::setForAllChildren()
     * @uses OrderLockPeriodDTO::setLockPeriodEnd()
     * @uses OrderLockPeriodDTO::setLockPeriodId()
     * @uses OrderLockPeriodDTO::setLockPeriodStart()
     * @uses OrderLockPeriodDTO::setSuspendUser()
     * @uses OrderLockPeriodDTO::setSuspended()
     * @uses OrderLockPeriodDTO::setUnitName()
     * @param string $creationTime
     * @param int $creationUser
     * @param bool $forAllChildren
     * @param string $lockPeriodEnd
     * @param int $lockPeriodId
     * @param string $lockPeriodStart
     * @param int $suspendUser
     * @param bool $suspended
     * @param string $unitName
     */
    public function __construct(?string $creationTime = null, ?int $creationUser = null, ?bool $forAllChildren = null, ?string $lockPeriodEnd = null, ?int $lockPeriodId = null, ?string $lockPeriodStart = null, ?int $suspendUser = null, ?bool $suspended = null, ?string $unitName = null)
    {
        $this
            ->setCreationTime($creationTime)
            ->setCreationUser($creationUser)
            ->setForAllChildren($forAllChildren)
            ->setLockPeriodEnd($lockPeriodEnd)
            ->setLockPeriodId($lockPeriodId)
            ->setLockPeriodStart($lockPeriodStart)
            ->setSuspendUser($suspendUser)
            ->setSuspended($suspended)
            ->setUnitName($unitName);
    }
    /**
     * Get creationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * Set creationTime value
     * @param string $creationTime
     * @return \Pggns\MidocoApi\Order\StructType\OrderLockPeriodDTO
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->creationTime = $creationTime;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\OrderLockPeriodDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get forAllChildren value
     * @return bool|null
     */
    public function getForAllChildren(): ?bool
    {
        return $this->forAllChildren;
    }
    /**
     * Set forAllChildren value
     * @param bool $forAllChildren
     * @return \Pggns\MidocoApi\Order\StructType\OrderLockPeriodDTO
     */
    public function setForAllChildren(?bool $forAllChildren = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forAllChildren) && !is_bool($forAllChildren)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forAllChildren, true), gettype($forAllChildren)), __LINE__);
        }
        $this->forAllChildren = $forAllChildren;
        
        return $this;
    }
    /**
     * Get lockPeriodEnd value
     * @return string|null
     */
    public function getLockPeriodEnd(): ?string
    {
        return $this->lockPeriodEnd;
    }
    /**
     * Set lockPeriodEnd value
     * @param string $lockPeriodEnd
     * @return \Pggns\MidocoApi\Order\StructType\OrderLockPeriodDTO
     */
    public function setLockPeriodEnd(?string $lockPeriodEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($lockPeriodEnd) && !is_string($lockPeriodEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lockPeriodEnd, true), gettype($lockPeriodEnd)), __LINE__);
        }
        $this->lockPeriodEnd = $lockPeriodEnd;
        
        return $this;
    }
    /**
     * Get lockPeriodId value
     * @return int|null
     */
    public function getLockPeriodId(): ?int
    {
        return $this->lockPeriodId;
    }
    /**
     * Set lockPeriodId value
     * @param int $lockPeriodId
     * @return \Pggns\MidocoApi\Order\StructType\OrderLockPeriodDTO
     */
    public function setLockPeriodId(?int $lockPeriodId = null): self
    {
        // validation for constraint: int
        if (!is_null($lockPeriodId) && !(is_int($lockPeriodId) || ctype_digit($lockPeriodId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lockPeriodId, true), gettype($lockPeriodId)), __LINE__);
        }
        $this->lockPeriodId = $lockPeriodId;
        
        return $this;
    }
    /**
     * Get lockPeriodStart value
     * @return string|null
     */
    public function getLockPeriodStart(): ?string
    {
        return $this->lockPeriodStart;
    }
    /**
     * Set lockPeriodStart value
     * @param string $lockPeriodStart
     * @return \Pggns\MidocoApi\Order\StructType\OrderLockPeriodDTO
     */
    public function setLockPeriodStart(?string $lockPeriodStart = null): self
    {
        // validation for constraint: string
        if (!is_null($lockPeriodStart) && !is_string($lockPeriodStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lockPeriodStart, true), gettype($lockPeriodStart)), __LINE__);
        }
        $this->lockPeriodStart = $lockPeriodStart;
        
        return $this;
    }
    /**
     * Get suspendUser value
     * @return int|null
     */
    public function getSuspendUser(): ?int
    {
        return $this->suspendUser;
    }
    /**
     * Set suspendUser value
     * @param int $suspendUser
     * @return \Pggns\MidocoApi\Order\StructType\OrderLockPeriodDTO
     */
    public function setSuspendUser(?int $suspendUser = null): self
    {
        // validation for constraint: int
        if (!is_null($suspendUser) && !(is_int($suspendUser) || ctype_digit($suspendUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($suspendUser, true), gettype($suspendUser)), __LINE__);
        }
        $this->suspendUser = $suspendUser;
        
        return $this;
    }
    /**
     * Get suspended value
     * @return bool|null
     */
    public function getSuspended(): ?bool
    {
        return $this->suspended;
    }
    /**
     * Set suspended value
     * @param bool $suspended
     * @return \Pggns\MidocoApi\Order\StructType\OrderLockPeriodDTO
     */
    public function setSuspended(?bool $suspended = null): self
    {
        // validation for constraint: boolean
        if (!is_null($suspended) && !is_bool($suspended)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($suspended, true), gettype($suspended)), __LINE__);
        }
        $this->suspended = $suspended;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\OrderLockPeriodDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
