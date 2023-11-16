<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CcproxyTargetDTO StructType
 * @subpackage Structs
 */
class CcproxyTargetDTO extends AbstractStructBase
{
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The direction
     * @var string|null
     */
    protected ?string $direction = null;
    /**
     * The handlerId
     * @var string|null
     */
    protected ?string $handlerId = null;
    /**
     * The isActive
     * @var bool|null
     */
    protected ?bool $isActive = null;
    /**
     * The matchingUrl
     * @var string|null
     */
    protected ?string $matchingUrl = null;
    /**
     * The modificationTimestamp
     * @var string|null
     */
    protected ?string $modificationTimestamp = null;
    /**
     * The modificationUser
     * @var int|null
     */
    protected ?int $modificationUser = null;
    /**
     * The processingUnitName
     * @var string|null
     */
    protected ?string $processingUnitName = null;
    /**
     * The processingUser
     * @var int|null
     */
    protected ?int $processingUser = null;
    /**
     * The targetId
     * @var string|null
     */
    protected ?string $targetId = null;
    /**
     * The targetUrl
     * @var string|null
     */
    protected ?string $targetUrl = null;
    /**
     * Constructor method for CcproxyTargetDTO
     * @uses CcproxyTargetDTO::setCreationTimestamp()
     * @uses CcproxyTargetDTO::setCreationUser()
     * @uses CcproxyTargetDTO::setDirection()
     * @uses CcproxyTargetDTO::setHandlerId()
     * @uses CcproxyTargetDTO::setIsActive()
     * @uses CcproxyTargetDTO::setMatchingUrl()
     * @uses CcproxyTargetDTO::setModificationTimestamp()
     * @uses CcproxyTargetDTO::setModificationUser()
     * @uses CcproxyTargetDTO::setProcessingUnitName()
     * @uses CcproxyTargetDTO::setProcessingUser()
     * @uses CcproxyTargetDTO::setTargetId()
     * @uses CcproxyTargetDTO::setTargetUrl()
     * @param string $creationTimestamp
     * @param int $creationUser
     * @param string $direction
     * @param string $handlerId
     * @param bool $isActive
     * @param string $matchingUrl
     * @param string $modificationTimestamp
     * @param int $modificationUser
     * @param string $processingUnitName
     * @param int $processingUser
     * @param string $targetId
     * @param string $targetUrl
     */
    public function __construct(?string $creationTimestamp = null, ?int $creationUser = null, ?string $direction = null, ?string $handlerId = null, ?bool $isActive = null, ?string $matchingUrl = null, ?string $modificationTimestamp = null, ?int $modificationUser = null, ?string $processingUnitName = null, ?int $processingUser = null, ?string $targetId = null, ?string $targetUrl = null)
    {
        $this
            ->setCreationTimestamp($creationTimestamp)
            ->setCreationUser($creationUser)
            ->setDirection($direction)
            ->setHandlerId($handlerId)
            ->setIsActive($isActive)
            ->setMatchingUrl($matchingUrl)
            ->setModificationTimestamp($modificationTimestamp)
            ->setModificationUser($modificationUser)
            ->setProcessingUnitName($processingUnitName)
            ->setProcessingUser($processingUser)
            ->setTargetId($targetId)
            ->setTargetUrl($targetUrl);
    }
    /**
     * Get creationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp(): ?string
    {
        return $this->creationTimestamp;
    }
    /**
     * Set creationTimestamp value
     * @param string $creationTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\CcproxyTargetDTO
     */
    public function setCreationTimestamp(?string $creationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimestamp, true), gettype($creationTimestamp)), __LINE__);
        }
        $this->creationTimestamp = $creationTimestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CcproxyTargetDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CcproxyTargetDTO
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
     * Get handlerId value
     * @return string|null
     */
    public function getHandlerId(): ?string
    {
        return $this->handlerId;
    }
    /**
     * Set handlerId value
     * @param string $handlerId
     * @return \Pggns\MidocoApi\Order\StructType\CcproxyTargetDTO
     */
    public function setHandlerId(?string $handlerId = null): self
    {
        // validation for constraint: string
        if (!is_null($handlerId) && !is_string($handlerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($handlerId, true), gettype($handlerId)), __LINE__);
        }
        $this->handlerId = $handlerId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CcproxyTargetDTO
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
     * Get matchingUrl value
     * @return string|null
     */
    public function getMatchingUrl(): ?string
    {
        return $this->matchingUrl;
    }
    /**
     * Set matchingUrl value
     * @param string $matchingUrl
     * @return \Pggns\MidocoApi\Order\StructType\CcproxyTargetDTO
     */
    public function setMatchingUrl(?string $matchingUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($matchingUrl) && !is_string($matchingUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($matchingUrl, true), gettype($matchingUrl)), __LINE__);
        }
        $this->matchingUrl = $matchingUrl;
        
        return $this;
    }
    /**
     * Get modificationTimestamp value
     * @return string|null
     */
    public function getModificationTimestamp(): ?string
    {
        return $this->modificationTimestamp;
    }
    /**
     * Set modificationTimestamp value
     * @param string $modificationTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\CcproxyTargetDTO
     */
    public function setModificationTimestamp(?string $modificationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($modificationTimestamp) && !is_string($modificationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modificationTimestamp, true), gettype($modificationTimestamp)), __LINE__);
        }
        $this->modificationTimestamp = $modificationTimestamp;
        
        return $this;
    }
    /**
     * Get modificationUser value
     * @return int|null
     */
    public function getModificationUser(): ?int
    {
        return $this->modificationUser;
    }
    /**
     * Set modificationUser value
     * @param int $modificationUser
     * @return \Pggns\MidocoApi\Order\StructType\CcproxyTargetDTO
     */
    public function setModificationUser(?int $modificationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modificationUser) && !(is_int($modificationUser) || ctype_digit($modificationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modificationUser, true), gettype($modificationUser)), __LINE__);
        }
        $this->modificationUser = $modificationUser;
        
        return $this;
    }
    /**
     * Get processingUnitName value
     * @return string|null
     */
    public function getProcessingUnitName(): ?string
    {
        return $this->processingUnitName;
    }
    /**
     * Set processingUnitName value
     * @param string $processingUnitName
     * @return \Pggns\MidocoApi\Order\StructType\CcproxyTargetDTO
     */
    public function setProcessingUnitName(?string $processingUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($processingUnitName) && !is_string($processingUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($processingUnitName, true), gettype($processingUnitName)), __LINE__);
        }
        $this->processingUnitName = $processingUnitName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CcproxyTargetDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CcproxyTargetDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CcproxyTargetDTO
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
}
