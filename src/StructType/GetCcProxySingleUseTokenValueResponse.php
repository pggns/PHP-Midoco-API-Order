<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCcProxySingleUseTokenValueResponse StructType
 * @subpackage Structs
 */
class GetCcProxySingleUseTokenValueResponse extends AbstractStructBase
{
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
     * Constructor method for GetCcProxySingleUseTokenValueResponse
     * @uses GetCcProxySingleUseTokenValueResponse::setTokenValue()
     * @uses GetCcProxySingleUseTokenValueResponse::setSensitiveId()
     * @uses GetCcProxySingleUseTokenValueResponse::setUserId()
     * @uses GetCcProxySingleUseTokenValueResponse::setOrgUnit()
     * @param string $tokenValue
     * @param string $sensitiveId
     * @param int $userId
     * @param string $orgUnit
     */
    public function __construct(?string $tokenValue = null, ?string $sensitiveId = null, ?int $userId = null, ?string $orgUnit = null)
    {
        $this
            ->setTokenValue($tokenValue)
            ->setSensitiveId($sensitiveId)
            ->setUserId($userId)
            ->setOrgUnit($orgUnit);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetCcProxySingleUseTokenValueResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\GetCcProxySingleUseTokenValueResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\GetCcProxySingleUseTokenValueResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\GetCcProxySingleUseTokenValueResponse
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
}
