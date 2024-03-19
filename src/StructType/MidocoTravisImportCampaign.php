<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTravisImportCampaign StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoTravisImportCampaign extends AbstractStructBase
{
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * The campaignDescription
     * @var string|null
     */
    protected ?string $campaignDescription = null;
    /**
     * The infoText
     * @var string|null
     */
    protected ?string $infoText = null;
    /**
     * The campaignCreationDate
     * @var string|null
     */
    protected ?string $campaignCreationDate = null;
    /**
     * The campaignType
     * @var string|null
     */
    protected ?string $campaignType = null;
    /**
     * The user
     * @var string|null
     */
    protected ?string $user = null;
    /**
     * The typ
     * @var string|null
     */
    protected ?string $typ = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The orgunit
     * @var string|null
     */
    protected ?string $orgunit = null;
    /**
     * Constructor method for MidocoTravisImportCampaign
     * @uses MidocoTravisImportCampaign::setCampaignId()
     * @uses MidocoTravisImportCampaign::setCampaignDescription()
     * @uses MidocoTravisImportCampaign::setInfoText()
     * @uses MidocoTravisImportCampaign::setCampaignCreationDate()
     * @uses MidocoTravisImportCampaign::setCampaignType()
     * @uses MidocoTravisImportCampaign::setUser()
     * @uses MidocoTravisImportCampaign::setTyp()
     * @uses MidocoTravisImportCampaign::setCustomerId()
     * @uses MidocoTravisImportCampaign::setOrgunit()
     * @param int $campaignId
     * @param string $campaignDescription
     * @param string $infoText
     * @param string $campaignCreationDate
     * @param string $campaignType
     * @param string $user
     * @param string $typ
     * @param int $customerId
     * @param string $orgunit
     */
    public function __construct(?int $campaignId = null, ?string $campaignDescription = null, ?string $infoText = null, ?string $campaignCreationDate = null, ?string $campaignType = null, ?string $user = null, ?string $typ = null, ?int $customerId = null, ?string $orgunit = null)
    {
        $this
            ->setCampaignId($campaignId)
            ->setCampaignDescription($campaignDescription)
            ->setInfoText($infoText)
            ->setCampaignCreationDate($campaignCreationDate)
            ->setCampaignType($campaignType)
            ->setUser($user)
            ->setTyp($typ)
            ->setCustomerId($customerId)
            ->setOrgunit($orgunit);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravisImportCampaign
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
     * Get campaignDescription value
     * @return string|null
     */
    public function getCampaignDescription(): ?string
    {
        return $this->campaignDescription;
    }
    /**
     * Set campaignDescription value
     * @param string $campaignDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravisImportCampaign
     */
    public function setCampaignDescription(?string $campaignDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($campaignDescription) && !is_string($campaignDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campaignDescription, true), gettype($campaignDescription)), __LINE__);
        }
        $this->campaignDescription = $campaignDescription;
        
        return $this;
    }
    /**
     * Get infoText value
     * @return string|null
     */
    public function getInfoText(): ?string
    {
        return $this->infoText;
    }
    /**
     * Set infoText value
     * @param string $infoText
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravisImportCampaign
     */
    public function setInfoText(?string $infoText = null): self
    {
        // validation for constraint: string
        if (!is_null($infoText) && !is_string($infoText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoText, true), gettype($infoText)), __LINE__);
        }
        $this->infoText = $infoText;
        
        return $this;
    }
    /**
     * Get campaignCreationDate value
     * @return string|null
     */
    public function getCampaignCreationDate(): ?string
    {
        return $this->campaignCreationDate;
    }
    /**
     * Set campaignCreationDate value
     * @param string $campaignCreationDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravisImportCampaign
     */
    public function setCampaignCreationDate(?string $campaignCreationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($campaignCreationDate) && !is_string($campaignCreationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campaignCreationDate, true), gettype($campaignCreationDate)), __LINE__);
        }
        $this->campaignCreationDate = $campaignCreationDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravisImportCampaign
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
     * Get user value
     * @return string|null
     */
    public function getUser(): ?string
    {
        return $this->user;
    }
    /**
     * Set user value
     * @param string $user
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravisImportCampaign
     */
    public function setUser(?string $user = null): self
    {
        // validation for constraint: string
        if (!is_null($user) && !is_string($user)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user, true), gettype($user)), __LINE__);
        }
        $this->user = $user;
        
        return $this;
    }
    /**
     * Get typ value
     * @return string|null
     */
    public function getTyp(): ?string
    {
        return $this->typ;
    }
    /**
     * Set typ value
     * @param string $typ
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravisImportCampaign
     */
    public function setTyp(?string $typ = null): self
    {
        // validation for constraint: string
        if (!is_null($typ) && !is_string($typ)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typ, true), gettype($typ)), __LINE__);
        }
        $this->typ = $typ;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravisImportCampaign
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
     * Get orgunit value
     * @return string|null
     */
    public function getOrgunit(): ?string
    {
        return $this->orgunit;
    }
    /**
     * Set orgunit value
     * @param string $orgunit
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravisImportCampaign
     */
    public function setOrgunit(?string $orgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunit) && !is_string($orgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunit, true), gettype($orgunit)), __LINE__);
        }
        $this->orgunit = $orgunit;
        
        return $this;
    }
}
