<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCcProxyTargetRequest StructType
 * @subpackage Structs
 */
class GetCcProxyTargetRequest extends AbstractStructBase
{
    /**
     * The targetId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $targetId = null;
    /**
     * The processingUser
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $processingUser = null;
    /**
     * The targetUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $targetUrl = null;
    /**
     * The direction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $direction = null;
    /**
     * The isActive
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isActive = null;
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for GetCcProxyTargetRequest
     * @uses GetCcProxyTargetRequest::setTargetId()
     * @uses GetCcProxyTargetRequest::setProcessingUser()
     * @uses GetCcProxyTargetRequest::setTargetUrl()
     * @uses GetCcProxyTargetRequest::setDirection()
     * @uses GetCcProxyTargetRequest::setIsActive()
     * @uses GetCcProxyTargetRequest::setUnitName()
     * @param string $targetId
     * @param int $processingUser
     * @param string $targetUrl
     * @param string $direction
     * @param bool $isActive
     * @param string $unitName
     */
    public function __construct(?string $targetId = null, ?int $processingUser = null, ?string $targetUrl = null, ?string $direction = null, ?bool $isActive = null, ?string $unitName = null)
    {
        $this
            ->setTargetId($targetId)
            ->setProcessingUser($processingUser)
            ->setTargetUrl($targetUrl)
            ->setDirection($direction)
            ->setIsActive($isActive)
            ->setUnitName($unitName);
    }
    /**
     * Get targetId value
     * @return string|null
     */
    public function getTargetId(): ?string
    {
        return $this->targetId;
    }
    /**
     * Set targetId value
     * @param string $targetId
     * @return \Pggns\MidocoApi\Order\StructType\GetCcProxyTargetRequest
     */
    public function setTargetId(?string $targetId = null): self
    {
        // validation for constraint: string
        if (!is_null($targetId) && !is_string($targetId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetId, true), gettype($targetId)), __LINE__);
        }
        $this->targetId = $targetId;
        
        return $this;
    }
    /**
     * Get processingUser value
     * @return int|null
     */
    public function getProcessingUser(): ?int
    {
        return $this->processingUser;
    }
    /**
     * Set processingUser value
     * @param int $processingUser
     * @return \Pggns\MidocoApi\Order\StructType\GetCcProxyTargetRequest
     */
    public function setProcessingUser(?int $processingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($processingUser) && !(is_int($processingUser) || ctype_digit($processingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($processingUser, true), gettype($processingUser)), __LINE__);
        }
        $this->processingUser = $processingUser;
        
        return $this;
    }
    /**
     * Get targetUrl value
     * @return string|null
     */
    public function getTargetUrl(): ?string
    {
        return $this->targetUrl;
    }
    /**
     * Set targetUrl value
     * @param string $targetUrl
     * @return \Pggns\MidocoApi\Order\StructType\GetCcProxyTargetRequest
     */
    public function setTargetUrl(?string $targetUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($targetUrl) && !is_string($targetUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetUrl, true), gettype($targetUrl)), __LINE__);
        }
        $this->targetUrl = $targetUrl;
        
        return $this;
    }
    /**
     * Get direction value
     * @return string|null
     */
    public function getDirection(): ?string
    {
        return $this->direction;
    }
    /**
     * Set direction value
     * @param string $direction
     * @return \Pggns\MidocoApi\Order\StructType\GetCcProxyTargetRequest
     */
    public function setDirection(?string $direction = null): self
    {
        // validation for constraint: string
        if (!is_null($direction) && !is_string($direction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($direction, true), gettype($direction)), __LINE__);
        }
        $this->direction = $direction;
        
        return $this;
    }
    /**
     * Get isActive value
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }
    /**
     * Set isActive value
     * @param bool $isActive
     * @return \Pggns\MidocoApi\Order\StructType\GetCcProxyTargetRequest
     */
    public function setIsActive(?bool $isActive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isActive) && !is_bool($isActive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isActive, true), gettype($isActive)), __LINE__);
        }
        $this->isActive = $isActive;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetCcProxyTargetRequest
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
