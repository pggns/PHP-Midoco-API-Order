<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalServiceLinkDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalServiceLinkDTO extends AbstractStructBase
{
    /**
     * The assignedUnits
     * @var string|null
     */
    protected ?string $assignedUnits = null;
    /**
     * The configuration
     * @var string|null
     */
    protected ?string $configuration = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The externalServiceLinkId
     * @var string|null
     */
    protected ?string $externalServiceLinkId = null;
    /**
     * The unitOwner
     * @var string|null
     */
    protected ?string $unitOwner = null;
    /**
     * The url
     * @var string|null
     */
    protected ?string $url = null;
    /**
     * Constructor method for ExternalServiceLinkDTO
     * @uses ExternalServiceLinkDTO::setAssignedUnits()
     * @uses ExternalServiceLinkDTO::setConfiguration()
     * @uses ExternalServiceLinkDTO::setDescription()
     * @uses ExternalServiceLinkDTO::setExternalServiceLinkId()
     * @uses ExternalServiceLinkDTO::setUnitOwner()
     * @uses ExternalServiceLinkDTO::setUrl()
     * @param string $assignedUnits
     * @param string $configuration
     * @param string $description
     * @param string $externalServiceLinkId
     * @param string $unitOwner
     * @param string $url
     */
    public function __construct(?string $assignedUnits = null, ?string $configuration = null, ?string $description = null, ?string $externalServiceLinkId = null, ?string $unitOwner = null, ?string $url = null)
    {
        $this
            ->setAssignedUnits($assignedUnits)
            ->setConfiguration($configuration)
            ->setDescription($description)
            ->setExternalServiceLinkId($externalServiceLinkId)
            ->setUnitOwner($unitOwner)
            ->setUrl($url);
    }
    /**
     * Get assignedUnits value
     * @return string|null
     */
    public function getAssignedUnits(): ?string
    {
        return $this->assignedUnits;
    }
    /**
     * Set assignedUnits value
     * @param string $assignedUnits
     * @return \Pggns\MidocoApi\Order\StructType\ExternalServiceLinkDTO
     */
    public function setAssignedUnits(?string $assignedUnits = null): self
    {
        // validation for constraint: string
        if (!is_null($assignedUnits) && !is_string($assignedUnits)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignedUnits, true), gettype($assignedUnits)), __LINE__);
        }
        $this->assignedUnits = $assignedUnits;
        
        return $this;
    }
    /**
     * Get configuration value
     * @return string|null
     */
    public function getConfiguration(): ?string
    {
        return $this->configuration;
    }
    /**
     * Set configuration value
     * @param string $configuration
     * @return \Pggns\MidocoApi\Order\StructType\ExternalServiceLinkDTO
     */
    public function setConfiguration(?string $configuration = null): self
    {
        // validation for constraint: string
        if (!is_null($configuration) && !is_string($configuration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($configuration, true), gettype($configuration)), __LINE__);
        }
        $this->configuration = $configuration;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\ExternalServiceLinkDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get externalServiceLinkId value
     * @return string|null
     */
    public function getExternalServiceLinkId(): ?string
    {
        return $this->externalServiceLinkId;
    }
    /**
     * Set externalServiceLinkId value
     * @param string $externalServiceLinkId
     * @return \Pggns\MidocoApi\Order\StructType\ExternalServiceLinkDTO
     */
    public function setExternalServiceLinkId(?string $externalServiceLinkId = null): self
    {
        // validation for constraint: string
        if (!is_null($externalServiceLinkId) && !is_string($externalServiceLinkId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalServiceLinkId, true), gettype($externalServiceLinkId)), __LINE__);
        }
        $this->externalServiceLinkId = $externalServiceLinkId;
        
        return $this;
    }
    /**
     * Get unitOwner value
     * @return string|null
     */
    public function getUnitOwner(): ?string
    {
        return $this->unitOwner;
    }
    /**
     * Set unitOwner value
     * @param string $unitOwner
     * @return \Pggns\MidocoApi\Order\StructType\ExternalServiceLinkDTO
     */
    public function setUnitOwner(?string $unitOwner = null): self
    {
        // validation for constraint: string
        if (!is_null($unitOwner) && !is_string($unitOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitOwner, true), gettype($unitOwner)), __LINE__);
        }
        $this->unitOwner = $unitOwner;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExternalServiceLinkDTO
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
}
