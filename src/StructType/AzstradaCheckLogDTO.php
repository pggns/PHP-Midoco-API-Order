<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AzstradaCheckLogDTO StructType
 * @subpackage Structs
 */
class AzstradaCheckLogDTO extends AbstractStructBase
{
    /**
     * The checkLogId
     * @var int|null
     */
    protected ?int $checkLogId = null;
    /**
     * The checkTime
     * @var string|null
     */
    protected ?string $checkTime = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The url
     * @var string|null
     */
    protected ?string $url = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for AzstradaCheckLogDTO
     * @uses AzstradaCheckLogDTO::setCheckLogId()
     * @uses AzstradaCheckLogDTO::setCheckTime()
     * @uses AzstradaCheckLogDTO::setOrgUnit()
     * @uses AzstradaCheckLogDTO::setUrl()
     * @uses AzstradaCheckLogDTO::setUserId()
     * @param int $checkLogId
     * @param string $checkTime
     * @param string $orgUnit
     * @param string $url
     * @param int $userId
     */
    public function __construct(?int $checkLogId = null, ?string $checkTime = null, ?string $orgUnit = null, ?string $url = null, ?int $userId = null)
    {
        $this
            ->setCheckLogId($checkLogId)
            ->setCheckTime($checkTime)
            ->setOrgUnit($orgUnit)
            ->setUrl($url)
            ->setUserId($userId);
    }
    /**
     * Get checkLogId value
     * @return int|null
     */
    public function getCheckLogId(): ?int
    {
        return $this->checkLogId;
    }
    /**
     * Set checkLogId value
     * @param int $checkLogId
     * @return \Pggns\MidocoApi\Order\StructType\AzstradaCheckLogDTO
     */
    public function setCheckLogId(?int $checkLogId = null): self
    {
        // validation for constraint: int
        if (!is_null($checkLogId) && !(is_int($checkLogId) || ctype_digit($checkLogId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($checkLogId, true), gettype($checkLogId)), __LINE__);
        }
        $this->checkLogId = $checkLogId;
        
        return $this;
    }
    /**
     * Get checkTime value
     * @return string|null
     */
    public function getCheckTime(): ?string
    {
        return $this->checkTime;
    }
    /**
     * Set checkTime value
     * @param string $checkTime
     * @return \Pggns\MidocoApi\Order\StructType\AzstradaCheckLogDTO
     */
    public function setCheckTime(?string $checkTime = null): self
    {
        // validation for constraint: string
        if (!is_null($checkTime) && !is_string($checkTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checkTime, true), gettype($checkTime)), __LINE__);
        }
        $this->checkTime = $checkTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AzstradaCheckLogDTO
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
     * Get url value
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     * Set url value
     * @param string $url
     * @return \Pggns\MidocoApi\Order\StructType\AzstradaCheckLogDTO
     */
    public function setUrl(?string $url = null): self
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        $this->url = $url;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AzstradaCheckLogDTO
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
