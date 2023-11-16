<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerProfileDTO StructType
 * @subpackage Structs
 */
class CustomerProfileDTO extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The gdsId
     * @var string|null
     */
    protected ?string $gdsId = null;
    /**
     * The profileId
     * @var int|null
     */
    protected ?int $profileId = null;
    /**
     * The profileNumber
     * @var string|null
     */
    protected ?string $profileNumber = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The versionNo
     * @var int|null
     */
    protected ?int $versionNo = null;
    /**
     * Constructor method for CustomerProfileDTO
     * @uses CustomerProfileDTO::setCustomerId()
     * @uses CustomerProfileDTO::setGdsId()
     * @uses CustomerProfileDTO::setProfileId()
     * @uses CustomerProfileDTO::setProfileNumber()
     * @uses CustomerProfileDTO::setUnitName()
     * @uses CustomerProfileDTO::setVersionNo()
     * @param int $customerId
     * @param string $gdsId
     * @param int $profileId
     * @param string $profileNumber
     * @param string $unitName
     * @param int $versionNo
     */
    public function __construct(?int $customerId = null, ?string $gdsId = null, ?int $profileId = null, ?string $profileNumber = null, ?string $unitName = null, ?int $versionNo = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setGdsId($gdsId)
            ->setProfileId($profileId)
            ->setProfileNumber($profileNumber)
            ->setUnitName($unitName)
            ->setVersionNo($versionNo);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CustomerProfileDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get gdsId value
     * @return string|null
     */
    public function getGdsId(): ?string
    {
        return $this->gdsId;
    }
    /**
     * Set gdsId value
     * @param string $gdsId
     * @return \Pggns\MidocoApi\Order\StructType\CustomerProfileDTO
     */
    public function setGdsId(?string $gdsId = null): self
    {
        // validation for constraint: string
        if (!is_null($gdsId) && !is_string($gdsId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gdsId, true), gettype($gdsId)), __LINE__);
        }
        $this->gdsId = $gdsId;
        
        return $this;
    }
    /**
     * Get profileId value
     * @return int|null
     */
    public function getProfileId(): ?int
    {
        return $this->profileId;
    }
    /**
     * Set profileId value
     * @param int $profileId
     * @return \Pggns\MidocoApi\Order\StructType\CustomerProfileDTO
     */
    public function setProfileId(?int $profileId = null): self
    {
        // validation for constraint: int
        if (!is_null($profileId) && !(is_int($profileId) || ctype_digit($profileId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($profileId, true), gettype($profileId)), __LINE__);
        }
        $this->profileId = $profileId;
        
        return $this;
    }
    /**
     * Get profileNumber value
     * @return string|null
     */
    public function getProfileNumber(): ?string
    {
        return $this->profileNumber;
    }
    /**
     * Set profileNumber value
     * @param string $profileNumber
     * @return \Pggns\MidocoApi\Order\StructType\CustomerProfileDTO
     */
    public function setProfileNumber(?string $profileNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($profileNumber) && !is_string($profileNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profileNumber, true), gettype($profileNumber)), __LINE__);
        }
        $this->profileNumber = $profileNumber;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerProfileDTO
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
     * Get versionNo value
     * @return int|null
     */
    public function getVersionNo(): ?int
    {
        return $this->versionNo;
    }
    /**
     * Set versionNo value
     * @param int $versionNo
     * @return \Pggns\MidocoApi\Order\StructType\CustomerProfileDTO
     */
    public function setVersionNo(?int $versionNo = null): self
    {
        // validation for constraint: int
        if (!is_null($versionNo) && !(is_int($versionNo) || ctype_digit($versionNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($versionNo, true), gettype($versionNo)), __LINE__);
        }
        $this->versionNo = $versionNo;
        
        return $this;
    }
}
