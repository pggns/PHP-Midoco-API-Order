<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmCampaignTemplateDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmCampaignTemplateDTO extends AbstractStructBase
{
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * The isImported
     * @var bool|null
     */
    protected ?bool $isImported = null;
    /**
     * The language
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * The text
     * @var string|null
     */
    protected ?string $text = null;
    /**
     * Constructor method for CrmCampaignTemplateDTO
     * @uses CrmCampaignTemplateDTO::setCampaignId()
     * @uses CrmCampaignTemplateDTO::setIsImported()
     * @uses CrmCampaignTemplateDTO::setLanguage()
     * @uses CrmCampaignTemplateDTO::setText()
     * @param int $campaignId
     * @param bool $isImported
     * @param string $language
     * @param string $text
     */
    public function __construct(?int $campaignId = null, ?bool $isImported = null, ?string $language = null, ?string $text = null)
    {
        $this
            ->setCampaignId($campaignId)
            ->setIsImported($isImported)
            ->setLanguage($language)
            ->setText($text);
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCampaignTemplateDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCampaignTemplateDTO
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
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Pggns\MidocoApi\Order\StructType\CrmCampaignTemplateDTO
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
        return $this;
    }
    /**
     * Get text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \Pggns\MidocoApi\Order\StructType\CrmCampaignTemplateDTO
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        
        return $this;
    }
}
