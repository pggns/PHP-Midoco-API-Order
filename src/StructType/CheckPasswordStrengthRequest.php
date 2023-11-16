<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckPasswordStrengthRequest StructType
 * @subpackage Structs
 */
class CheckPasswordStrengthRequest extends AbstractStructBase
{
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The passwordLevel
     * @var int|null
     */
    protected ?int $passwordLevel = null;
    /**
     * Constructor method for CheckPasswordStrengthRequest
     * @uses CheckPasswordStrengthRequest::setPassword()
     * @uses CheckPasswordStrengthRequest::setUserId()
     * @uses CheckPasswordStrengthRequest::setPasswordLevel()
     * @param string $password
     * @param int $userId
     * @param int $passwordLevel
     */
    public function __construct(?string $password = null, ?int $userId = null, ?int $passwordLevel = null)
    {
        $this
            ->setPassword($password)
            ->setUserId($userId)
            ->setPasswordLevel($passwordLevel);
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
     * @return \Pggns\MidocoApi\Order\StructType\CheckPasswordStrengthRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\CheckPasswordStrengthRequest
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
     * Get passwordLevel value
     * @return int|null
     */
    public function getPasswordLevel(): ?int
    {
        return $this->passwordLevel;
    }
    /**
     * Set passwordLevel value
     * @param int $passwordLevel
     * @return \Pggns\MidocoApi\Order\StructType\CheckPasswordStrengthRequest
     */
    public function setPasswordLevel(?int $passwordLevel = null): self
    {
        // validation for constraint: int
        if (!is_null($passwordLevel) && !(is_int($passwordLevel) || ctype_digit($passwordLevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($passwordLevel, true), gettype($passwordLevel)), __LINE__);
        }
        $this->passwordLevel = $passwordLevel;
        
        return $this;
    }
}
