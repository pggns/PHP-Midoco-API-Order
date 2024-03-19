<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AutoMailDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AutoMailDTO extends AbstractStructBase
{
    /**
     * The addresseeEmail
     * @var string|null
     */
    protected ?string $addresseeEmail = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The includeSuborgunits
     * @var bool|null
     */
    protected ?bool $includeSuborgunits = null;
    /**
     * The offsetDays
     * @var int|null
     */
    protected ?int $offsetDays = null;
    /**
     * The ruleset
     * @var string|null
     */
    protected ?string $ruleset = null;
    /**
     * The senderEmail
     * @var string|null
     */
    protected ?string $senderEmail = null;
    /**
     * The subjectTemplate
     * @var string|null
     */
    protected ?string $subjectTemplate = null;
    /**
     * The templateType
     * @var string|null
     */
    protected ?string $templateType = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for AutoMailDTO
     * @uses AutoMailDTO::setAddresseeEmail()
     * @uses AutoMailDTO::setId()
     * @uses AutoMailDTO::setIncludeSuborgunits()
     * @uses AutoMailDTO::setOffsetDays()
     * @uses AutoMailDTO::setRuleset()
     * @uses AutoMailDTO::setSenderEmail()
     * @uses AutoMailDTO::setSubjectTemplate()
     * @uses AutoMailDTO::setTemplateType()
     * @uses AutoMailDTO::setType()
     * @uses AutoMailDTO::setUnitName()
     * @param string $addresseeEmail
     * @param int $id
     * @param bool $includeSuborgunits
     * @param int $offsetDays
     * @param string $ruleset
     * @param string $senderEmail
     * @param string $subjectTemplate
     * @param string $templateType
     * @param string $type
     * @param string $unitName
     */
    public function __construct(?string $addresseeEmail = null, ?int $id = null, ?bool $includeSuborgunits = null, ?int $offsetDays = null, ?string $ruleset = null, ?string $senderEmail = null, ?string $subjectTemplate = null, ?string $templateType = null, ?string $type = null, ?string $unitName = null)
    {
        $this
            ->setAddresseeEmail($addresseeEmail)
            ->setId($id)
            ->setIncludeSuborgunits($includeSuborgunits)
            ->setOffsetDays($offsetDays)
            ->setRuleset($ruleset)
            ->setSenderEmail($senderEmail)
            ->setSubjectTemplate($subjectTemplate)
            ->setTemplateType($templateType)
            ->setType($type)
            ->setUnitName($unitName);
    }
    /**
     * Get addresseeEmail value
     * @return string|null
     */
    public function getAddresseeEmail(): ?string
    {
        return $this->addresseeEmail;
    }
    /**
     * Set addresseeEmail value
     * @param string $addresseeEmail
     * @return \Pggns\MidocoApi\Order\StructType\AutoMailDTO
     */
    public function setAddresseeEmail(?string $addresseeEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($addresseeEmail) && !is_string($addresseeEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addresseeEmail, true), gettype($addresseeEmail)), __LINE__);
        }
        $this->addresseeEmail = $addresseeEmail;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\AutoMailDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get includeSuborgunits value
     * @return bool|null
     */
    public function getIncludeSuborgunits(): ?bool
    {
        return $this->includeSuborgunits;
    }
    /**
     * Set includeSuborgunits value
     * @param bool $includeSuborgunits
     * @return \Pggns\MidocoApi\Order\StructType\AutoMailDTO
     */
    public function setIncludeSuborgunits(?bool $includeSuborgunits = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeSuborgunits) && !is_bool($includeSuborgunits)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeSuborgunits, true), gettype($includeSuborgunits)), __LINE__);
        }
        $this->includeSuborgunits = $includeSuborgunits;
        
        return $this;
    }
    /**
     * Get offsetDays value
     * @return int|null
     */
    public function getOffsetDays(): ?int
    {
        return $this->offsetDays;
    }
    /**
     * Set offsetDays value
     * @param int $offsetDays
     * @return \Pggns\MidocoApi\Order\StructType\AutoMailDTO
     */
    public function setOffsetDays(?int $offsetDays = null): self
    {
        // validation for constraint: int
        if (!is_null($offsetDays) && !(is_int($offsetDays) || ctype_digit($offsetDays))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offsetDays, true), gettype($offsetDays)), __LINE__);
        }
        $this->offsetDays = $offsetDays;
        
        return $this;
    }
    /**
     * Get ruleset value
     * @return string|null
     */
    public function getRuleset(): ?string
    {
        return $this->ruleset;
    }
    /**
     * Set ruleset value
     * @param string $ruleset
     * @return \Pggns\MidocoApi\Order\StructType\AutoMailDTO
     */
    public function setRuleset(?string $ruleset = null): self
    {
        // validation for constraint: string
        if (!is_null($ruleset) && !is_string($ruleset)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ruleset, true), gettype($ruleset)), __LINE__);
        }
        $this->ruleset = $ruleset;
        
        return $this;
    }
    /**
     * Get senderEmail value
     * @return string|null
     */
    public function getSenderEmail(): ?string
    {
        return $this->senderEmail;
    }
    /**
     * Set senderEmail value
     * @param string $senderEmail
     * @return \Pggns\MidocoApi\Order\StructType\AutoMailDTO
     */
    public function setSenderEmail(?string $senderEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($senderEmail) && !is_string($senderEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($senderEmail, true), gettype($senderEmail)), __LINE__);
        }
        $this->senderEmail = $senderEmail;
        
        return $this;
    }
    /**
     * Get subjectTemplate value
     * @return string|null
     */
    public function getSubjectTemplate(): ?string
    {
        return $this->subjectTemplate;
    }
    /**
     * Set subjectTemplate value
     * @param string $subjectTemplate
     * @return \Pggns\MidocoApi\Order\StructType\AutoMailDTO
     */
    public function setSubjectTemplate(?string $subjectTemplate = null): self
    {
        // validation for constraint: string
        if (!is_null($subjectTemplate) && !is_string($subjectTemplate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subjectTemplate, true), gettype($subjectTemplate)), __LINE__);
        }
        $this->subjectTemplate = $subjectTemplate;
        
        return $this;
    }
    /**
     * Get templateType value
     * @return string|null
     */
    public function getTemplateType(): ?string
    {
        return $this->templateType;
    }
    /**
     * Set templateType value
     * @param string $templateType
     * @return \Pggns\MidocoApi\Order\StructType\AutoMailDTO
     */
    public function setTemplateType(?string $templateType = null): self
    {
        // validation for constraint: string
        if (!is_null($templateType) && !is_string($templateType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateType, true), gettype($templateType)), __LINE__);
        }
        $this->templateType = $templateType;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\AutoMailDTO
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AutoMailDTO
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
