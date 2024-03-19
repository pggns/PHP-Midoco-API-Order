<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateCcProxySingleUseTokenRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateCcProxySingleUseTokenRequest extends AbstractStructBase
{
    /**
     * The token
     * @var string|null
     */
    protected ?string $token = null;
    /**
     * The tokenValue
     * @var string|null
     */
    protected ?string $tokenValue = null;
    /**
     * The sensitiveId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sensitiveId = null;
    /**
     * The lifespanInSeconds
     * @var int|null
     */
    protected ?int $lifespanInSeconds = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The emailData
     * @var \Pggns\MidocoApi\Order\StructType\CcProxyEmailDataDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CcProxyEmailDataDTO $emailData = null;
    /**
     * Constructor method for CreateCcProxySingleUseTokenRequest
     * @uses CreateCcProxySingleUseTokenRequest::setToken()
     * @uses CreateCcProxySingleUseTokenRequest::setTokenValue()
     * @uses CreateCcProxySingleUseTokenRequest::setSensitiveId()
     * @uses CreateCcProxySingleUseTokenRequest::setLifespanInSeconds()
     * @uses CreateCcProxySingleUseTokenRequest::setUserId()
     * @uses CreateCcProxySingleUseTokenRequest::setOrgUnit()
     * @uses CreateCcProxySingleUseTokenRequest::setEmailData()
     * @param string $token
     * @param string $tokenValue
     * @param string $sensitiveId
     * @param int $lifespanInSeconds
     * @param int $userId
     * @param string $orgUnit
     * @param \Pggns\MidocoApi\Order\StructType\CcProxyEmailDataDTO $emailData
     */
    public function __construct(?string $token = null, ?string $tokenValue = null, ?string $sensitiveId = null, ?int $lifespanInSeconds = null, ?int $userId = null, ?string $orgUnit = null, ?\Pggns\MidocoApi\Order\StructType\CcProxyEmailDataDTO $emailData = null)
    {
        $this
            ->setToken($token)
            ->setTokenValue($tokenValue)
            ->setSensitiveId($sensitiveId)
            ->setLifespanInSeconds($lifespanInSeconds)
            ->setUserId($userId)
            ->setOrgUnit($orgUnit)
            ->setEmailData($emailData);
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
     * @return \Pggns\MidocoApi\Order\StructType\CreateCcProxySingleUseTokenRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\CreateCcProxySingleUseTokenRequest
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
     * Get sensitiveId value
     * @return string|null
     */
    public function getSensitiveId(): ?string
    {
        return $this->sensitiveId;
    }
    /**
     * Set sensitiveId value
     * @param string $sensitiveId
     * @return \Pggns\MidocoApi\Order\StructType\CreateCcProxySingleUseTokenRequest
     */
    public function setSensitiveId(?string $sensitiveId = null): self
    {
        // validation for constraint: string
        if (!is_null($sensitiveId) && !is_string($sensitiveId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sensitiveId, true), gettype($sensitiveId)), __LINE__);
        }
        $this->sensitiveId = $sensitiveId;
        
        return $this;
    }
    /**
     * Get lifespanInSeconds value
     * @return int|null
     */
    public function getLifespanInSeconds(): ?int
    {
        return $this->lifespanInSeconds;
    }
    /**
     * Set lifespanInSeconds value
     * @param int $lifespanInSeconds
     * @return \Pggns\MidocoApi\Order\StructType\CreateCcProxySingleUseTokenRequest
     */
    public function setLifespanInSeconds(?int $lifespanInSeconds = null): self
    {
        // validation for constraint: int
        if (!is_null($lifespanInSeconds) && !(is_int($lifespanInSeconds) || ctype_digit($lifespanInSeconds))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lifespanInSeconds, true), gettype($lifespanInSeconds)), __LINE__);
        }
        $this->lifespanInSeconds = $lifespanInSeconds;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CreateCcProxySingleUseTokenRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\CreateCcProxySingleUseTokenRequest
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
     * Get emailData value
     * @return \Pggns\MidocoApi\Order\StructType\CcProxyEmailDataDTO|null
     */
    public function getEmailData(): ?\Pggns\MidocoApi\Order\StructType\CcProxyEmailDataDTO
    {
        return $this->emailData;
    }
    /**
     * Set emailData value
     * @param \Pggns\MidocoApi\Order\StructType\CcProxyEmailDataDTO $emailData
     * @return \Pggns\MidocoApi\Order\StructType\CreateCcProxySingleUseTokenRequest
     */
    public function setEmailData(?\Pggns\MidocoApi\Order\StructType\CcProxyEmailDataDTO $emailData = null): self
    {
        $this->emailData = $emailData;
        
        return $this;
    }
}
