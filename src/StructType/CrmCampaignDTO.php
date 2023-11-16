<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmCampaignDTO StructType
 * @subpackage Structs
 */
class CrmCampaignDTO extends AbstractStructBase
{
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * The campaignType
     * @var string|null
     */
    protected ?string $campaignType = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The executeUserId
     * @var int|null
     */
    protected ?int $executeUserId = null;
    /**
     * The externalReference
     * @var string|null
     */
    protected ?string $externalReference = null;
    /**
     * The importSystem
     * @var string|null
     */
    protected ?string $importSystem = null;
    /**
     * The isExported
     * @var bool|null
     */
    protected ?bool $isExported = null;
    /**
     * The isImported
     * @var bool|null
     */
    protected ?bool $isImported = null;
    /**
     * The numberOfResults
     * @var int|null
     */
    protected ?int $numberOfResults = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The sender
     * @var string|null
     */
    protected ?string $sender = null;
    /**
     * Constructor method for CrmCampaignDTO
     * @uses CrmCampaignDTO::setCampaignId()
     * @uses CrmCampaignDTO::setCampaignType()
     * @uses CrmCampaignDTO::setDescription()
     * @uses CrmCampaignDTO::setExecuteUserId()
     * @uses CrmCampaignDTO::setExternalReference()
     * @uses CrmCampaignDTO::setImportSystem()
     * @uses CrmCampaignDTO::setIsExported()
     * @uses CrmCampaignDTO::setIsImported()
     * @uses CrmCampaignDTO::setNumberOfResults()
     * @uses CrmCampaignDTO::setOrgUnit()
     * @uses CrmCampaignDTO::setSender()
     * @param int $campaignId
     * @param string $campaignType
     * @param string $description
     * @param int $executeUserId
     * @param string $externalReference
     * @param string $importSystem
     * @param bool $isExported
     * @param bool $isImported
     * @param int $numberOfResults
     * @param string $orgUnit
     * @param string $sender
     */
    public function __construct(?int $campaignId = null, ?string $campaignType = null, ?string $description = null, ?int $executeUserId = null, ?string $externalReference = null, ?string $importSystem = null, ?bool $isExported = null, ?bool $isImported = null, ?int $numberOfResults = null, ?string $orgUnit = null, ?string $sender = null)
    {
        $this
            ->setCampaignId($campaignId)
            ->setCampaignType($campaignType)
            ->setDescription($description)
            ->setExecuteUserId($executeUserId)
            ->setExternalReference($externalReference)
            ->setImportSystem($importSystem)
            ->setIsExported($isExported)
            ->setIsImported($isImported)
            ->setNumberOfResults($numberOfResults)
            ->setOrgUnit($orgUnit)
            ->setSender($sender);
    }
    /**
     * Get campaignId value
     * @return int|null
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }
    /**
     * Set campaignId value
     * @param int $campaignId
     * @return \Pggns\MidocoApi\Order\StructType\CrmCampaignDTO
     */
    public function setCampaignId(?int $campaignId = null): self
    {
        // validation for constraint: int
        if (!is_null($campaignId) && !(is_int($campaignId) || ctype_digit($campaignId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($campaignId, true), gettype($campaignId)), __LINE__);
        }
        $this->campaignId = $campaignId;
        
        return $this;
    }
    /**
     * Get campaignType value
     * @return string|null
     */
    public function getCampaignType(): ?string
    {
        return $this->campaignType;
    }
    /**
     * Set campaignType value
     * @param string $campaignType
     * @return \Pggns\MidocoApi\Order\StructType\CrmCampaignDTO
     */
    public function setCampaignType(?string $campaignType = null): self
    {
        // validation for constraint: string
        if (!is_null($campaignType) && !is_string($campaignType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campaignType, true), gettype($campaignType)), __LINE__);
        }
        $this->campaignType = $campaignType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCampaignDTO
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
     * Get executeUserId value
     * @return int|null
     */
    public function getExecuteUserId(): ?int
    {
        return $this->executeUserId;
    }
    /**
     * Set executeUserId value
     * @param int $executeUserId
     * @return \Pggns\MidocoApi\Order\StructType\CrmCampaignDTO
     */
    public function setExecuteUserId(?int $executeUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($executeUserId) && !(is_int($executeUserId) || ctype_digit($executeUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($executeUserId, true), gettype($executeUserId)), __LINE__);
        }
        $this->executeUserId = $executeUserId;
        
        return $this;
    }
    /**
     * Get externalReference value
     * @return string|null
     */
    public function getExternalReference(): ?string
    {
        return $this->externalReference;
    }
    /**
     * Set externalReference value
     * @param string $externalReference
     * @return \Pggns\MidocoApi\Order\StructType\CrmCampaignDTO
     */
    public function setExternalReference(?string $externalReference = null): self
    {
        // validation for constraint: string
        if (!is_null($externalReference) && !is_string($externalReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalReference, true), gettype($externalReference)), __LINE__);
        }
        $this->externalReference = $externalReference;
        
        return $this;
    }
    /**
     * Get importSystem value
     * @return string|null
     */
    public function getImportSystem(): ?string
    {
        return $this->importSystem;
    }
    /**
     * Set importSystem value
     * @param string $importSystem
     * @return \Pggns\MidocoApi\Order\StructType\CrmCampaignDTO
     */
    public function setImportSystem(?string $importSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($importSystem) && !is_string($importSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importSystem, true), gettype($importSystem)), __LINE__);
        }
        $this->importSystem = $importSystem;
        
        return $this;
    }
    /**
     * Get isExported value
     * @return bool|null
     */
    public function getIsExported(): ?bool
    {
        return $this->isExported;
    }
    /**
     * Set isExported value
     * @param bool $isExported
     * @return \Pggns\MidocoApi\Order\StructType\CrmCampaignDTO
     */
    public function setIsExported(?bool $isExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExported) && !is_bool($isExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExported, true), gettype($isExported)), __LINE__);
        }
        $this->isExported = $isExported;
        
        return $this;
    }
    /**
     * Get isImported value
     * @return bool|null
     */
    public function getIsImported(): ?bool
    {
        return $this->isImported;
    }
    /**
     * Set isImported value
     * @param bool $isImported
     * @return \Pggns\MidocoApi\Order\StructType\CrmCampaignDTO
     */
    public function setIsImported(?bool $isImported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isImported) && !is_bool($isImported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isImported, true), gettype($isImported)), __LINE__);
        }
        $this->isImported = $isImported;
        
        return $this;
    }
    /**
     * Get numberOfResults value
     * @return int|null
     */
    public function getNumberOfResults(): ?int
    {
        return $this->numberOfResults;
    }
    /**
     * Set numberOfResults value
     * @param int $numberOfResults
     * @return \Pggns\MidocoApi\Order\StructType\CrmCampaignDTO
     */
    public function setNumberOfResults(?int $numberOfResults = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfResults) && !(is_int($numberOfResults) || ctype_digit($numberOfResults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfResults, true), gettype($numberOfResults)), __LINE__);
        }
        $this->numberOfResults = $numberOfResults;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCampaignDTO
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
     * Get sender value
     * @return string|null
     */
    public function getSender(): ?string
    {
        return $this->sender;
    }
    /**
     * Set sender value
     * @param string $sender
     * @return \Pggns\MidocoApi\Order\StructType\CrmCampaignDTO
     */
    public function setSender(?string $sender = null): self
    {
        // validation for constraint: string
        if (!is_null($sender) && !is_string($sender)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sender, true), gettype($sender)), __LINE__);
        }
        $this->sender = $sender;
        
        return $this;
    }
}
