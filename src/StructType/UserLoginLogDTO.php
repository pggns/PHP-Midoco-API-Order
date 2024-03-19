<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserLoginLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UserLoginLogDTO extends AbstractStructBase
{
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The ipAddress
     * @var string|null
     */
    protected ?string $ipAddress = null;
    /**
     * The lastAction
     * @var string|null
     */
    protected ?string $lastAction = null;
    /**
     * The loginTime
     * @var string|null
     */
    protected ?string $loginTime = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for UserLoginLogDTO
     * @uses UserLoginLogDTO::setId()
     * @uses UserLoginLogDTO::setIpAddress()
     * @uses UserLoginLogDTO::setLastAction()
     * @uses UserLoginLogDTO::setLoginTime()
     * @uses UserLoginLogDTO::setUnitName()
     * @uses UserLoginLogDTO::setUserId()
     * @param int $id
     * @param string $ipAddress
     * @param string $lastAction
     * @param string $loginTime
     * @param string $unitName
     * @param int $userId
     */
    public function __construct(?int $id = null, ?string $ipAddress = null, ?string $lastAction = null, ?string $loginTime = null, ?string $unitName = null, ?int $userId = null)
    {
        $this
            ->setId($id)
            ->setIpAddress($ipAddress)
            ->setLastAction($lastAction)
            ->setLoginTime($loginTime)
            ->setUnitName($unitName)
            ->setUserId($userId);
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
     * @return \Pggns\MidocoApi\Order\StructType\UserLoginLogDTO
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
     * Get ipAddress value
     * @return string|null
     */
    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }
    /**
     * Set ipAddress value
     * @param string $ipAddress
     * @return \Pggns\MidocoApi\Order\StructType\UserLoginLogDTO
     */
    public function setIpAddress(?string $ipAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($ipAddress) && !is_string($ipAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ipAddress, true), gettype($ipAddress)), __LINE__);
        }
        $this->ipAddress = $ipAddress;
        
        return $this;
    }
    /**
     * Get lastAction value
     * @return string|null
     */
    public function getLastAction(): ?string
    {
        return $this->lastAction;
    }
    /**
     * Set lastAction value
     * @param string $lastAction
     * @return \Pggns\MidocoApi\Order\StructType\UserLoginLogDTO
     */
    public function setLastAction(?string $lastAction = null): self
    {
        // validation for constraint: string
        if (!is_null($lastAction) && !is_string($lastAction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastAction, true), gettype($lastAction)), __LINE__);
        }
        $this->lastAction = $lastAction;
        
        return $this;
    }
    /**
     * Get loginTime value
     * @return string|null
     */
    public function getLoginTime(): ?string
    {
        return $this->loginTime;
    }
    /**
     * Set loginTime value
     * @param string $loginTime
     * @return \Pggns\MidocoApi\Order\StructType\UserLoginLogDTO
     */
    public function setLoginTime(?string $loginTime = null): self
    {
        // validation for constraint: string
        if (!is_null($loginTime) && !is_string($loginTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($loginTime, true), gettype($loginTime)), __LINE__);
        }
        $this->loginTime = $loginTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\UserLoginLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\UserLoginLogDTO
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
