<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalCampaignDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalCampaignDTO extends AbstractStructBase
{
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
     * The extCampId
     * @var int|null
     */
    protected ?int $extCampId = null;
    /**
     * The externalId
     * @var int|null
     */
    protected ?int $externalId = null;
    /**
     * The externalSystem
     * @var string|null
     */
    protected ?string $externalSystem = null;
    /**
     * The issueTime
     * @var string|null
     */
    protected ?string $issueTime = null;
    /**
     * The numberOfRecipients
     * @var int|null
     */
    protected ?int $numberOfRecipients = null;
    /**
     * The sender
     * @var string|null
     */
    protected ?string $sender = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for ExternalCampaignDTO
     * @uses ExternalCampaignDTO::setCampaignType()
     * @uses ExternalCampaignDTO::setDescription()
     * @uses ExternalCampaignDTO::setExtCampId()
     * @uses ExternalCampaignDTO::setExternalId()
     * @uses ExternalCampaignDTO::setExternalSystem()
     * @uses ExternalCampaignDTO::setIssueTime()
     * @uses ExternalCampaignDTO::setNumberOfRecipients()
     * @uses ExternalCampaignDTO::setSender()
     * @uses ExternalCampaignDTO::setUserId()
     * @param string $campaignType
     * @param string $description
     * @param int $extCampId
     * @param int $externalId
     * @param string $externalSystem
     * @param string $issueTime
     * @param int $numberOfRecipients
     * @param string $sender
     * @param int $userId
     */
    public function __construct(?string $campaignType = null, ?string $description = null, ?int $extCampId = null, ?int $externalId = null, ?string $externalSystem = null, ?string $issueTime = null, ?int $numberOfRecipients = null, ?string $sender = null, ?int $userId = null)
    {
        $this
            ->setCampaignType($campaignType)
            ->setDescription($description)
            ->setExtCampId($extCampId)
            ->setExternalId($externalId)
            ->setExternalSystem($externalSystem)
            ->setIssueTime($issueTime)
            ->setNumberOfRecipients($numberOfRecipients)
            ->setSender($sender)
            ->setUserId($userId);
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
     * @return \Pggns\MidocoApi\Order\StructType\ExternalCampaignDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ExternalCampaignDTO
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
     * Get extCampId value
     * @return int|null
     */
    public function getExtCampId(): ?int
    {
        return $this->extCampId;
    }
    /**
     * Set extCampId value
     * @param int $extCampId
     * @return \Pggns\MidocoApi\Order\StructType\ExternalCampaignDTO
     */
    public function setExtCampId(?int $extCampId = null): self
    {
        // validation for constraint: int
        if (!is_null($extCampId) && !(is_int($extCampId) || ctype_digit($extCampId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($extCampId, true), gettype($extCampId)), __LINE__);
        }
        $this->extCampId = $extCampId;
        
        return $this;
    }
    /**
     * Get externalId value
     * @return int|null
     */
    public function getExternalId(): ?int
    {
        return $this->externalId;
    }
    /**
     * Set externalId value
     * @param int $externalId
     * @return \Pggns\MidocoApi\Order\StructType\ExternalCampaignDTO
     */
    public function setExternalId(?int $externalId = null): self
    {
        // validation for constraint: int
        if (!is_null($externalId) && !(is_int($externalId) || ctype_digit($externalId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($externalId, true), gettype($externalId)), __LINE__);
        }
        $this->externalId = $externalId;
        
        return $this;
    }
    /**
     * Get externalSystem value
     * @return string|null
     */
    public function getExternalSystem(): ?string
    {
        return $this->externalSystem;
    }
    /**
     * Set externalSystem value
     * @param string $externalSystem
     * @return \Pggns\MidocoApi\Order\StructType\ExternalCampaignDTO
     */
    public function setExternalSystem(?string $externalSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($externalSystem) && !is_string($externalSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalSystem, true), gettype($externalSystem)), __LINE__);
        }
        $this->externalSystem = $externalSystem;
        
        return $this;
    }
    /**
     * Get issueTime value
     * @return string|null
     */
    public function getIssueTime(): ?string
    {
        return $this->issueTime;
    }
    /**
     * Set issueTime value
     * @param string $issueTime
     * @return \Pggns\MidocoApi\Order\StructType\ExternalCampaignDTO
     */
    public function setIssueTime(?string $issueTime = null): self
    {
        // validation for constraint: string
        if (!is_null($issueTime) && !is_string($issueTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueTime, true), gettype($issueTime)), __LINE__);
        }
        $this->issueTime = $issueTime;
        
        return $this;
    }
    /**
     * Get numberOfRecipients value
     * @return int|null
     */
    public function getNumberOfRecipients(): ?int
    {
        return $this->numberOfRecipients;
    }
    /**
     * Set numberOfRecipients value
     * @param int $numberOfRecipients
     * @return \Pggns\MidocoApi\Order\StructType\ExternalCampaignDTO
     */
    public function setNumberOfRecipients(?int $numberOfRecipients = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfRecipients) && !(is_int($numberOfRecipients) || ctype_digit($numberOfRecipients))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfRecipients, true), gettype($numberOfRecipients)), __LINE__);
        }
        $this->numberOfRecipients = $numberOfRecipients;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExternalCampaignDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ExternalCampaignDTO
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
