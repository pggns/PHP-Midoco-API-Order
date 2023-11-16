<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CcproxySingleUseTokenDTO StructType
 * @subpackage Structs
 */
class CcproxySingleUseTokenDTO extends AbstractStructBase
{
    /**
     * The createdAt
     * @var string|null
     */
    protected ?string $createdAt = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The expireAt
     * @var string|null
     */
    protected ?string $expireAt = null;
    /**
     * The modifiedAt
     * @var string|null
     */
    protected ?string $modifiedAt = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The sensitiveid
     * @var string|null
     */
    protected ?string $sensitiveid = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The token
     * @var string|null
     */
    protected ?string $token = null;
    /**
     * The tokenId
     * @var int|null
     */
    protected ?int $tokenId = null;
    /**
     * The tokenValue
     * @var string|null
     */
    protected ?string $tokenValue = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for CcproxySingleUseTokenDTO
     * @uses CcproxySingleUseTokenDTO::setCreatedAt()
     * @uses CcproxySingleUseTokenDTO::setEmail()
     * @uses CcproxySingleUseTokenDTO::setExpireAt()
     * @uses CcproxySingleUseTokenDTO::setModifiedAt()
     * @uses CcproxySingleUseTokenDTO::setOrgUnit()
     * @uses CcproxySingleUseTokenDTO::setSensitiveid()
     * @uses CcproxySingleUseTokenDTO::setStatus()
     * @uses CcproxySingleUseTokenDTO::setToken()
     * @uses CcproxySingleUseTokenDTO::setTokenId()
     * @uses CcproxySingleUseTokenDTO::setTokenValue()
     * @uses CcproxySingleUseTokenDTO::setUserId()
     * @param string $createdAt
     * @param string $email
     * @param string $expireAt
     * @param string $modifiedAt
     * @param string $orgUnit
     * @param string $sensitiveid
     * @param string $status
     * @param string $token
     * @param int $tokenId
     * @param string $tokenValue
     * @param int $userId
     */
    public function __construct(?string $createdAt = null, ?string $email = null, ?string $expireAt = null, ?string $modifiedAt = null, ?string $orgUnit = null, ?string $sensitiveid = null, ?string $status = null, ?string $token = null, ?int $tokenId = null, ?string $tokenValue = null, ?int $userId = null)
    {
        $this
            ->setCreatedAt($createdAt)
            ->setEmail($email)
            ->setExpireAt($expireAt)
            ->setModifiedAt($modifiedAt)
            ->setOrgUnit($orgUnit)
            ->setSensitiveid($sensitiveid)
            ->setStatus($status)
            ->setToken($token)
            ->setTokenId($tokenId)
            ->setTokenValue($tokenValue)
            ->setUserId($userId);
    }
    /**
     * Get createdAt value
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }
    /**
     * Set createdAt value
     * @param string $createdAt
     * @return \Pggns\MidocoApi\Order\StructType\CcproxySingleUseTokenDTO
     */
    public function setCreatedAt(?string $createdAt = null): self
    {
        // validation for constraint: string
        if (!is_null($createdAt) && !is_string($createdAt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdAt, true), gettype($createdAt)), __LINE__);
        }
        $this->createdAt = $createdAt;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Pggns\MidocoApi\Order\StructType\CcproxySingleUseTokenDTO
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get expireAt value
     * @return string|null
     */
    public function getExpireAt(): ?string
    {
        return $this->expireAt;
    }
    /**
     * Set expireAt value
     * @param string $expireAt
     * @return \Pggns\MidocoApi\Order\StructType\CcproxySingleUseTokenDTO
     */
    public function setExpireAt(?string $expireAt = null): self
    {
        // validation for constraint: string
        if (!is_null($expireAt) && !is_string($expireAt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expireAt, true), gettype($expireAt)), __LINE__);
        }
        $this->expireAt = $expireAt;
        
        return $this;
    }
    /**
     * Get modifiedAt value
     * @return string|null
     */
    public function getModifiedAt(): ?string
    {
        return $this->modifiedAt;
    }
    /**
     * Set modifiedAt value
     * @param string $modifiedAt
     * @return \Pggns\MidocoApi\Order\StructType\CcproxySingleUseTokenDTO
     */
    public function setModifiedAt(?string $modifiedAt = null): self
    {
        // validation for constraint: string
        if (!is_null($modifiedAt) && !is_string($modifiedAt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifiedAt, true), gettype($modifiedAt)), __LINE__);
        }
        $this->modifiedAt = $modifiedAt;
        
        return $this;
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Order\StructType\CcproxySingleUseTokenDTO
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Get sensitiveid value
     * @return string|null
     */
    public function getSensitiveid(): ?string
    {
        return $this->sensitiveid;
    }
    /**
     * Set sensitiveid value
     * @param string $sensitiveid
     * @return \Pggns\MidocoApi\Order\StructType\CcproxySingleUseTokenDTO
     */
    public function setSensitiveid(?string $sensitiveid = null): self
    {
        // validation for constraint: string
        if (!is_null($sensitiveid) && !is_string($sensitiveid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sensitiveid, true), gettype($sensitiveid)), __LINE__);
        }
        $this->sensitiveid = $sensitiveid;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\CcproxySingleUseTokenDTO
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get token value
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }
    /**
     * Set token value
     * @param string $token
     * @return \Pggns\MidocoApi\Order\StructType\CcproxySingleUseTokenDTO
     */
    public function setToken(?string $token = null): self
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
        }
        $this->token = $token;
        
        return $this;
    }
    /**
     * Get tokenId value
     * @return int|null
     */
    public function getTokenId(): ?int
    {
        return $this->tokenId;
    }
    /**
     * Set tokenId value
     * @param int $tokenId
     * @return \Pggns\MidocoApi\Order\StructType\CcproxySingleUseTokenDTO
     */
    public function setTokenId(?int $tokenId = null): self
    {
        // validation for constraint: int
        if (!is_null($tokenId) && !(is_int($tokenId) || ctype_digit($tokenId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tokenId, true), gettype($tokenId)), __LINE__);
        }
        $this->tokenId = $tokenId;
        
        return $this;
    }
    /**
     * Get tokenValue value
     * @return string|null
     */
    public function getTokenValue(): ?string
    {
        return $this->tokenValue;
    }
    /**
     * Set tokenValue value
     * @param string $tokenValue
     * @return \Pggns\MidocoApi\Order\StructType\CcproxySingleUseTokenDTO
     */
    public function setTokenValue(?string $tokenValue = null): self
    {
        // validation for constraint: string
        if (!is_null($tokenValue) && !is_string($tokenValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenValue, true), gettype($tokenValue)), __LINE__);
        }
        $this->tokenValue = $tokenValue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CcproxySingleUseTokenDTO
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
