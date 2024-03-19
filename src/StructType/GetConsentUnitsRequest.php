<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsentUnitsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetConsentUnitsRequest extends AbstractStructBase
{
    /**
     * The consentId
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $consentId;
    /**
     * The isGroup
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var bool
     */
    protected bool $isGroup;
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for GetConsentUnitsRequest
     * @uses GetConsentUnitsRequest::setConsentId()
     * @uses GetConsentUnitsRequest::setIsGroup()
     * @uses GetConsentUnitsRequest::setUnitName()
     * @param string $consentId
     * @param bool $isGroup
     * @param string $unitName
     */
    public function __construct(string $consentId, bool $isGroup, ?string $unitName = null)
    {
        $this
            ->setConsentId($consentId)
            ->setIsGroup($isGroup)
            ->setUnitName($unitName);
    }
    /**
     * Get consentId value
     * @return string
     */
    public function getConsentId(): string
    {
        return $this->consentId;
    }
    /**
     * Set consentId value
     * @param string $consentId
     * @return \Pggns\MidocoApi\Order\StructType\GetConsentUnitsRequest
     */
    public function setConsentId(string $consentId): self
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
     * @return bool
     */
    public function getIsGroup(): bool
    {
        return $this->isGroup;
    }
    /**
     * Set isGroup value
     * @param bool $isGroup
     * @return \Pggns\MidocoApi\Order\StructType\GetConsentUnitsRequest
     */
    public function setIsGroup(bool $isGroup): self
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
     * @return \Pggns\MidocoApi\Order\StructType\GetConsentUnitsRequest
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
