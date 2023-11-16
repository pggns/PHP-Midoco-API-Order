<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsentUnitDTO StructType
 * @subpackage Structs
 */
class ConsentUnitDTO extends AbstractStructBase
{
    /**
     * The consentId
     * @var string|null
     */
    protected ?string $consentId = null;
    /**
     * The isGroup
     * @var bool|null
     */
    protected ?bool $isGroup = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for ConsentUnitDTO
     * @uses ConsentUnitDTO::setConsentId()
     * @uses ConsentUnitDTO::setIsGroup()
     * @uses ConsentUnitDTO::setUnitName()
     * @param string $consentId
     * @param bool $isGroup
     * @param string $unitName
     */
    public function __construct(?string $consentId = null, ?bool $isGroup = null, ?string $unitName = null)
    {
        $this
            ->setConsentId($consentId)
            ->setIsGroup($isGroup)
            ->setUnitName($unitName);
    }
    /**
     * Get consentId value
     * @return string|null
     */
    public function getConsentId(): ?string
    {
        return $this->consentId;
    }
    /**
     * Set consentId value
     * @param string $consentId
     * @return \Pggns\MidocoApi\Order\StructType\ConsentUnitDTO
     */
    public function setConsentId(?string $consentId = null): self
    {
        // validation for constraint: string
        if (!is_null($consentId) && !is_string($consentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consentId, true), gettype($consentId)), __LINE__);
        }
        $this->consentId = $consentId;
        
        return $this;
    }
    /**
     * Get isGroup value
     * @return bool|null
     */
    public function getIsGroup(): ?bool
    {
        return $this->isGroup;
    }
    /**
     * Set isGroup value
     * @param bool $isGroup
     * @return \Pggns\MidocoApi\Order\StructType\ConsentUnitDTO
     */
    public function setIsGroup(?bool $isGroup = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isGroup) && !is_bool($isGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isGroup, true), gettype($isGroup)), __LINE__);
        }
        $this->isGroup = $isGroup;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ConsentUnitDTO
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
