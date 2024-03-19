<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UsersPassHistoryDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UsersPassHistoryDTO extends AbstractStructBase
{
    /**
     * The historyIndex
     * @var int|null
     */
    protected ?int $historyIndex = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The passwordDate
     * @var string|null
     */
    protected ?string $passwordDate = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for UsersPassHistoryDTO
     * @uses UsersPassHistoryDTO::setHistoryIndex()
     * @uses UsersPassHistoryDTO::setPassword()
     * @uses UsersPassHistoryDTO::setPasswordDate()
     * @uses UsersPassHistoryDTO::setUserId()
     * @param int $historyIndex
     * @param string $password
     * @param string $passwordDate
     * @param int $userId
     */
    public function __construct(?int $historyIndex = null, ?string $password = null, ?string $passwordDate = null, ?int $userId = null)
    {
        $this
            ->setHistoryIndex($historyIndex)
            ->setPassword($password)
            ->setPasswordDate($passwordDate)
            ->setUserId($userId);
    }
    /**
     * Get historyIndex value
     * @return int|null
     */
    public function getHistoryIndex(): ?int
    {
        return $this->historyIndex;
    }
    /**
     * Set historyIndex value
     * @param int $historyIndex
     * @return \Pggns\MidocoApi\Order\StructType\UsersPassHistoryDTO
     */
    public function setHistoryIndex(?int $historyIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($historyIndex) && !(is_int($historyIndex) || ctype_digit($historyIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($historyIndex, true), gettype($historyIndex)), __LINE__);
        }
        $this->historyIndex = $historyIndex;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Pggns\MidocoApi\Order\StructType\UsersPassHistoryDTO
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get passwordDate value
     * @return string|null
     */
    public function getPasswordDate(): ?string
    {
        return $this->passwordDate;
    }
    /**
     * Set passwordDate value
     * @param string $passwordDate
     * @return \Pggns\MidocoApi\Order\StructType\UsersPassHistoryDTO
     */
    public function setPasswordDate(?string $passwordDate = null): self
    {
        // validation for constraint: string
        if (!is_null($passwordDate) && !is_string($passwordDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passwordDate, true), gettype($passwordDate)), __LINE__);
        }
        $this->passwordDate = $passwordDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\UsersPassHistoryDTO
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
